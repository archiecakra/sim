<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Hash;

use App\Models\User;
use App\Models\Category;
use App\Models\Unit;

class StartingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users = ([
            [
                'name' => 'Archie Cakra',
                'username' => 'archiecakra',
                'email' => 'archiecakra1@gmail.com',
                'phone' => '082257381817',
                'password' => Hash::make('12345678')
            ],
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@admin.com',
                'phone' => '081331818699',
                'password' => Hash::make('admin')
            ]
        ]);
        
        foreach ($users as $user) {
            # code...
            User::create($user);
        }

        $categories =([
            ['nama' => 'Buku'], ['nama' => 'Kertas'], ['nama' => 'Bolpoint'], ['nama' => 'Pensil'], ['nama' => 'Spidol'],
        ]);

        foreach ($categories as $category) {
            # code...
            Category::create($category);
        }

        $units =([
            ['nama' => 'Box'], ['nama' => 'Pack'], ['nama' => 'Rim'], ['nama' => 'Dus'],
        ]);

        foreach ($units as $unit) {
            # code...
            Unit::create($unit);
        }
    }
}
