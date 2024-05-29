<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=DB::table('users')->where('email','super.admin@mail.com')->first();
        if(!$user){
            $data=[
                'name'=>'Jhone Doe',
                'email'=>'super.admin@mail.com',
                'password'=>Hash::make('12345678'),
                'created_at'=>Carbon::now()
            ];
            $user=User::insert($data);
        }
        Car::factory()->count(10)->create();
    }
}
