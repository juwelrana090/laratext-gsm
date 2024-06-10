<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;



use App\Models\Blogs;
use App\Models\BlogCategories;
use App\Models\FileManager;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $blogs = Blogs::latest()->orderBy('id', 'desc')->paginate(10);
    }


    public function getBlog(Request $request)
    {
        try {
            $token = $request->header('Authorization');
            $get_blog = Blogs::where('id', '=', $request->id)->first();
            $blog = [
                'id' => $get_blog->id,
                'user_id' => $get_blog->user_id,
                'uniqid' => $get_blog->uniqid,
                'post_title' => $get_blog->post_title,
                'post_slug' => $get_blog->post_slug,
                'post_description' => json_decode($get_blog->post_description),
                'post_image' => $get_blog->post_image,
                'post_status' => $get_blog->post_status,
                'is_featured' => $get_blog->is_featured,
                'meta_tags' => $get_blog->meta_tags,
                'meta_title' => $get_blog->meta_title,
                'meta_keywords' => $get_blog->meta_keywords,
                'meta_description' => $get_blog->meta_description,
                'meta_canonical_url' => $get_blog->meta_canonical_url,
                'created_at' => $get_blog->created_at,
                'updated_at' => $get_blog->updated_at,
            ];

            return response()->json([
                'status' => true,
                'blog' => $blog,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function getSlug(Request $request)
    {
        $get_blog = Blogs::where('post_slug', '=', $request->slug)->first();

        $blog = [
            'id' => $get_blog->id,
            'user_id' => $get_blog->user_id,
            'uniqid' => $get_blog->uniqid,
            'post_title' => $get_blog->post_title,
            'post_slug' => $get_blog->post_slug,
            'post_description' => json_decode($get_blog->post_description),
            'post_image' => $get_blog->post_image,
            'post_status' => $get_blog->post_status,
            'is_featured' => $get_blog->is_featured,
            'meta_tags' => $get_blog->meta_tags,
            'meta_title' => $get_blog->meta_title,
            'meta_keywords' => $get_blog->meta_keywords,
            'meta_description' => $get_blog->meta_description,
            'meta_canonical_url' => $get_blog->meta_canonical_url,
            'created_at' => $get_blog->created_at,
            'updated_at' => $get_blog->updated_at,
        ];
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $blog_categories = BlogCategories::latest()->get();

        $categories = BlogCategories::latest()->orderBy('id', 'desc')->get();
        return view('backend.blogs.blog_add', [
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'post_title' => 'required',
            'post_slug' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $uniqid = uniqid();
        $post_title = $request->post_title;
        $post_slug = Str::slug($request->post_slug);

        $blogs = Blogs::where('post_slug', 'LIKE', "%{$post_slug}%")->get();
        $count = $blogs->count();

        if ($count > 0) {;
            foreach ($blogs as $cat) {
                $data[] = $cat['post_slug'];
            }

            if (in_array($post_slug, $data)) {
                $cat_count = 0;
                while (in_array(($post_slug . '-' . ++$cat_count), $data));
                $post_title = $post_title . " " . $cat_count;
                $post_slug = $post_slug . '-' . $cat_count;
            }
        }

        $user_id = Auth::user()->id;
        $user_id = auth()->user()->id;

        $now_day = date('F_Y');
        $image_id = "";

        if ($request->hasFile('post_image')) {
            $file = $request->file('post_image');
            $path = public_path('uploads/files/' . $now_day);

            if (!File::isDirectory($path)) {
                File::makeDirectory($path, 0777, true, true);
            }

            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->move($path, $fileName);
            $fileModel = new FileManager;
            $file_location = 'uploads/files/' . $now_day . '/' . $fileName;

            $file_type = explode('/', $file->getClientMimeType());

            if ($filePath) {
                $fileModel->file_name = $fileName;
                $fileModel->file_type = $file_type[0];
                $fileModel->file_format = $file->getClientOriginalExtension();
                $fileModel->file_thumbnail = $file_location;
                $fileModel->file_path = $file_location;
                $fileModel->save();
            }

            $image_id = $fileModel->id;
        }

        $blog_create = Blogs::create([
            'uniqid' => $uniqid,
            'user_id' => $user_id,
            'post_title' => $post_title,
            'post_slug' => $post_slug,
            'post_description' => json_encode($request->post_description),
            'post_image' => $file_location,
            'post_status' => $request->post_status,
            'is_featured' => $request->is_featured,
            'meta_title' => $request->meta_title,
            'meta_tags' => $request->meta_tags,
            'meta_keywords' => $request->meta_keywords,
            'meta_description' => $request->meta_description,
            'meta_canonical_url' => $request->meta_canonical_url,
            'image_id' => $image_id,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blogs $blogs)
    {

        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'post_title' => 'required',
            'post_slug' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $post_title = $request->post_title;
        $post_slug = Str::slug($request->post_slug);

        $blogs = Blogs::where('post_slug', 'LIKE', "%{$post_slug}%")->get();
        $count = $blogs->count();

        $blog = Blogs::where('id', '=', $request->id)->first();

        if ($post_title != $blog->post_title && $post_slug != $blog->post_slug) {
            if ($count > 0) {;
                foreach ($blogs as $cat) {
                    $data[] = $cat['post_slug'];
                }

                if (in_array($post_slug, $data)) {
                    $cat_count = 0;
                    while (in_array(($post_slug . '-' . ++$cat_count), $data));
                    $post_title = $post_title . " " . $cat_count;
                    $post_slug = $post_slug . '-' . $cat_count;
                }
            }
        }

        $blog_update = $blog->update([
            'post_title' => $post_title,
            'post_slug' => $post_slug,
            'post_description' => $request->post_description,
            'post_image' => $request->post_image,
            'post_status' => $request->post_status,
            'is_featured' => $request->is_featured,
            'meta_title' => $request->meta_title,
            'meta_tags' => $request->meta_tags,
            'meta_keywords' => $request->meta_keywords,
            'meta_description' => $request->meta_description,
            'meta_canonical_url' => $request->meta_canonical_url,
        ]);

        return response()->json([
            'status' => true,
            'message' => "Blog updated successfully",
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Blogs $blogs)
    {
        $user_id = auth()->user()->id;

        $blogs = Blogs::where('id', '=', $request->id)->first();

        if ($blogs) {
            $blogs->delete();
            return back();
        }
    }
}
