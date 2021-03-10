<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Philip Sada',
            'email' => 'sada_phillip@yahoo.com',
            'password' => Hash::make('12345678'),
            'email_verified_at' => now(),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('users')->insert([
            'name' => 'Rottels',
            'email' => 'a.rottels@stadtbekannt.online',
            'password' => Hash::make('WM{hy9uVFNKb)VZq'),
            'email_verified_at' => now(),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
    }
}
