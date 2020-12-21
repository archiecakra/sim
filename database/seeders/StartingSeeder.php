<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Hash;

use App\Models\Category;
use App\Models\Item;
use App\Models\Supplier;
use App\Models\Unit;
use App\Models\User;

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
                'role' => 'customer',
                'password' => Hash::make('12345678')
            ],
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@admin.com',
                'phone' => '081331818699',
                'role' => 'admin',
                'password' => Hash::make('123')
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

        $suppliers =([
            ['nama' => 'CV. Artha Mandiri'], ['nama' => 'PT. Mandiri Prima'], ['nama' => 'PT. Bangun Sejahtera'], ['nama' => 'PT. Digi'],
        ]);

        foreach ($suppliers as $supplier) {
            # code...
            Supplier::create($supplier);
        }

        $items = ([
            [
                'nama' => 'Buku Tulis Sidu 58 Lembar',
                'category_id' => '1',
                'unit_id' => '2',
                'harga_beli' => '34900',
                'harga_jual' => '40000',
                'stok' => '12',
                'gambar' => 'gambar/Buku Tulis Sidu 58 Lembar.png',
            ],
            [
                'nama' => 'Buku Tulis Sidu 24 Lembar',
                'category_id' => '1',
                'unit_id' => '2',
                'harga_beli' => '19500',
                'harga_jual' => '23000',
                'stok' => '20',
                'gambar' => 'gambar/Buku Tulis Sidu 24 Lembar.png',
            ],
            [
                'nama' => 'Faster 13mm Hitam',
                'category_id' => '3',
                'unit_id' => '2',
                'harga_beli' => '9300',
                'harga_jual' => '11000',
                'stok' => '31',
                'gambar' => 'gambar/Bolpoint Faster 13mm Hitam.png',
            ],
        ]);
        
        foreach ($items as $item) {
            # code...
            Item::create($item);
        }
    }
}
