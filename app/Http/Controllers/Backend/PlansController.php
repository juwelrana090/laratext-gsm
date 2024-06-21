<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Plans;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PlansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plan_1 = Plans::where('id', 1)->first();
        $plan_2 = Plans::where('id', 2)->first();
        $plan_3 = Plans::where('id', 3)->first();
        $plan_4 = Plans::where('id', 4)->first();
        return view('backend.plans.index', [
            'plan_1' => $plan_1,
            'plan_2' => $plan_2,
            'plan_3' => $plan_3,
            'plan_4' => $plan_4
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plans  $plans
     * @return \Illuminate\Http\Response
     */
    public function show(Plans $plans)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plans  $plans
     * @return \Illuminate\Http\Response
     */
    public function edit(Plans $plans)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plans  $plans
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plans $plans)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'name' => 'required',
            'contract' => 'required',
            'price_month' => 'required',
            'price_year' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $description = [];

        foreach ($request->des_title as $key => $value) {
            $new_des = [
                'show' => $request->des_check[$key],
                'title' => $value,
            ];

            array_push($description, $new_des);
        }

        $plan = Plans::where('id', $request->id)->first();

        $plan->update([
            'name' => $request->name,
            'contract' => $request->contract,
            'price_month' => $request->price_month,
            'price_year' => $request->price_year,
            'description' => json_encode($description),
        ]);

        return redirect()->route('plans.index')->with('success', 'Blog created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plans  $plans
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plans $plans)
    {
        //
    }
}
