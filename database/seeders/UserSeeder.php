<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(20)->create();
        // DB::table('users')->insert([
        //     'name' => 'sinaga',
        //     'email' => 'rendi@admin.com',
        //     'password' => Hash::make('sinagarendi'),
        //     'roles'=> 'ADMIN',
        // ]);
        // DB::table('users')->insert([
        //     'name' => 'rendi',
        //     'email' => 'sinaga@suplier.com',
        //     'password' => Hash::make('sinagarendi'),
        //     'roles'=> 'SUPLIER',
        // ]);
    }
}
