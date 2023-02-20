<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
            [
                'name' => 'test1',
                'email' => 'hoge1@hoge.com',
                'password' => Hash::make('aaaaaaaa'),
                'created_at' => '2022/01/01 11:11:11',
            ],

            [
                'name' => 'test2',
                'email' => 'hoge2@hoge.com',
                'password' => Hash::make('aaaaaaaa'),
                'created_at' => '2022/01/01 11:11:11',
            ],
            
            [
                'name' => 'test3',
                'email' => 'hoge3@hoge.com',
                'password' => Hash::make('aaaaaaaa'),
                'created_at' => '2022/01/01 11:11:11',
            ],
        ]);
    }
}
