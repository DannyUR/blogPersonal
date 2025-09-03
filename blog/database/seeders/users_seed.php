<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class users_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            DB::table('users')->insert([
            "name"=>'Jsjs',
            "email"=> 'jsjs@gmail.com',
            "password"=>Hash::make('123'), //encriptar contraseña
            "nickname"=>'Aik0',
            "img"=>"default.jpg",
            'created_at'=>date('Y-m-d h:m:s') //2025-12-12
        ]);
           DB::table('users')->insert([
            "name"=>'xd',
            "email"=> 'xd@gmail.com',
            "password"=>Hash::make('123'), //encriptar contraseña
            "nickname"=>'Z0e',
            "img"=>"default.jpg",
            'created_at'=>date('Y-m-d h:m:s') //2025-12-12
        ]);
        
        for($i=0;$i<50;$i++){
            DB::table('users')->insert([
            "name"=>'unapersona'.$i,
            "email"=> 'un4p3r50n4'.$i.'@gmail.com',
            "password"=>Hash::make('123'), //encriptar contraseña
            "nickname"=>'N40k0'.$i,
            "img"=>"default.jpg",
            'created_at'=>date('Y-m-d h:m:s') //2025-12-12
            ]);
        }

    }
}
