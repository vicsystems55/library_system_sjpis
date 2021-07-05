<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insertOrIgnore([

            
            [
                'id' => '10001',
                'name' => 'Administrator',
                'email' => 'emitaku@sjpis.sch.ng',
                
                'email_verified_at' => now(),
                'password' =>  Hash::make('secret001'),
                
                'email_verified_at' => now(),
                'role' => 'admin',
               
                'admin_no' => 'SJPIS0001',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),

                'phone' => '08037835670',
                'class' => 'Admin 001',
                'category' => 'Admin',
            ],

            [
                'id' => '10002',
                'name' => 'Jane Doe',
                'email' => 'student1@sjpis.sch.ng',
                
                'email_verified_at' => now(),
                'password' =>  Hash::make('secret002'),
              
                'email_verified_at' => now(),
                'role' => 'user',
               
                'admin_no' => 'SJPIS0002',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),

                'phone' => '08037835670',
                'class' => 'JSS 1',
                'category' => 'Junior',
            ],

            [
                'id' => '10003',
                'name' => 'John Doe',
                'email' => 'student2@sjpis.sch.ng',
                
                'email_verified_at' => now(),
                'password' =>  Hash::make('secret003'),
              
                'email_verified_at' => now(),
                'role' => 'user',
               
                'admin_no' => 'SJPIS0003',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),

                'phone' => '08037835670',
                'class' => 'SS 1',
                'category' => 'Science',
            ],

             
          ]);
    }
}
