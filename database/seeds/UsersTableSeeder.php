<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $array = array(
            array(
                'name'=> 'Admin Ecommerce',
                'email'=>'admin@ebancom.com',
                'password'=>Hash::make('admin@ebancom.com'),
                'role'=>'admin',
                'status'=>'active'

            ),

            array(
                'name'=> 'Vendor Ecommerce',
                'email'=>'vendor@ebancom.com',
                'password'=>Hash::make('vendor@ebancom.com'),
                'role'=>'vendor',
                'status'=>'active'

            ),

             array(
                    'name'=> 'Customer Ecommerce',
                    'email'=>'customer@ebancom.com',
                    'password'=>Hash::make('customer@ebancom.com'),
                    'role'=>'customer',
                    'status'=>'active'

                )
        );

        foreach ($array as $user_data){
            $user = User::where('email',$user_data['email'])->first();
            if(!$user) {
                $user = new User();
            }

            $user->fill($user_data);
            $user->save();

            }
        }
    }

