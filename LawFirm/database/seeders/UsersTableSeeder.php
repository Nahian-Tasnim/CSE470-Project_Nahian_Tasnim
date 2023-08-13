<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // FirmLeader
        DB::table('users')->insert([

           [
                'name' =>'Firmleader',
                'username'=>'firmleader',
                'email' => 'firmleader@g.com',
                'password' => Hash::make('111'),
                'role' => 'firmleader',
                'status' => 'active',
           ],

           [
                'name' =>'lawyer',
                'username'=>'lawyer',
                'email' => 'lawyer@g.com',
                'password' => Hash::make('111'),
                'role' => 'lawyer',
                'status' => 'active',
           ]


        ]);


        DB::table('case_lists')->insert([

           [
                'id'=>'1',
                'Client_Name'=> 'Client1',
                'Assigned_Lawyer_ID'=>'NULL',
                'status' => 'unassigned',
           ]

        ]);


        DB::table('lawyers')->insert([

           [
                'name' =>'lawyer1',
                'username' => 'l1',
                'email' => 'lawyer1@g.com',
                'phone' => '123',
                'role' => 'lawyer',
                'assigned_cases' => '2',
                'status' => 'available',
           ]


        ]);


        DB::table('case_details')->insert([
            'Client_Name'=> 'Client1',
            'Client_Email' =>'client1@rys.c',
            'Opposition'=> 'Opposition 1',
        ]);

        
    }
}
