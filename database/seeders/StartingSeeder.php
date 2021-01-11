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
            ['nama' => 'CV. Artha Mandiri'], 
            ['nama' => 'PT. Mandiri Prima'], 
            ['nama' => 'PT. Bangun Sejahtera'], 
            ['nama' => 'PT. Digital Utama'],
            ['nama' => 'Toko Buku Salo'],
            ['nama' => 'Toko Buku Uranus'],
            ['nama' => 'Togamas Margorejo'],
        ]);

        foreach ($suppliers as $supplier) {
            # code...
            Supplier::create($supplier);
        }

        $items = ([
            [
                'nama' => 'Buku Tulis Sinar Dunia 58',
                'category_id' => '1',
                'unit_id' => '2',
                'harga_beli' => '34500',
                'harga_jual' => '40000',
                'stok' => '12',
                'gambar' => 'gambar/Buku Tulis Sidu 58 Lembar.png',
            ],
            [
                'nama' => 'Buku Tulis Sinar Dunia 38',
                'category_id' => '1',
                'unit_id' => '2',
                'harga_beli' => '23800',
                'harga_jual' => '28000',
                'stok' => '20',
                'gambar' => 'gambar/Buku Tulis Sidu 38 Lembar.png',
            ],
            [
                'nama' => 'Buku Tulis Sinar Dunia 32',
                'category_id' => '1',
                'unit_id' => '2',
                'harga_beli' => '20500',
                'harga_jual' => '25000',
                'stok' => '31',
                'gambar' => 'gambar/Buku Tulis Sinar Dunia 32.png',
            ],
            [
                'nama' => 'Buku Gambar A3',
                'category_id' => '1',
                'unit_id' => '2',
                'harga_beli' => '23000',
                'harga_jual' => '28000',
                'stok' => '30',
                'gambar' => 'gambar/Bolpoint Faster 13mm Hitam.png',
            ],
            [
                'nama' => 'Buku Gambar A4',
                'category_id' => '1',
                'unit_id' => '2',
                'harga_beli' => '20000',
                'harga_jual' => '25000',
                'stok' => '25',
                'gambar' => 'gambar/Buku Tulis Sidu 58 Lembar.png',
            ],
        ]);
        
        foreach ($items as $item) {
            # code...
            Item::create($item);
        }
    }
}
