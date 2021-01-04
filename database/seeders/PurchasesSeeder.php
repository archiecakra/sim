<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\Purchase;
use App\Models\PurchaseDetail;
use App\Models\Supplier;
use App\Models\StockMutation;

use Illuminate\Database\Seeder;

class PurchasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $purchases_data = ([
            [
                'kode_pembelian' => 'PCS0000',
                'supplier_id' => 1,
                'total_bayar' => 498000,
                'keterangan' => 'Restok Buku',
                'created_at' => '2020-10-04 11:41:50'
            ],
            [
                'kode_pembelian' => 'PCS0001',
                'supplier_id' => 2,
                'total_bayar' => 186000,
                'keterangan' => 'Restok Bolpoint',
                'created_at' => '2020-11-04 11:41:50'
            ],
            [
                'kode_pembelian' => 'PCS0002',
                'supplier_id' => 3,
                'total_bayar' => 480000,
                'keterangan' => 'Restok Bolpoint',
                'created_at' => '2020-11-04 11:41:50'
            ],
            [
                'kode_pembelian' => 'PCS0003',
                'supplier_id' => 4,
                'total_bayar' => 1050000,
                'keterangan' => 'Restok Bolpoint',
                'created_at' => '2020-12-03 11:41:50'
            ],
            [
                'kode_pembelian' => 'PCS0004',
                'supplier_id' => 5,
                'total_bayar' => 894000,
                'keterangan' => 'Restok Buku',
                'created_at' => '2020-12-04 11:41:50'
            ],
        ]);

        $purchases_detail1 = ([
            [
                'item_id' => 1,
                'purchase_detail_id' => 1,
                'jumlah' => 10,
            ],
            [
                'item_id' => 2,
                'purchase_detail_id' => 1,
                'jumlah' => 10,
            ],
        ]);

        $purchases_detail2 = ([
            [
                'item_id' => 3,
                'purchase_detail_id' => 2,
                'jumlah' => 20,
            ]
        ]);

        $purchases_detail3 = ([
            [
                'item_id' => 3,
                'purchase_detail_id' => 3,
                'jumlah' => 25,
            ],
            [
                'item_id' => 4,
                'purchase_detail_id' => 3,
                'jumlah' => 25,
            ]
        ]);

        $purchases_detail4 = ([
            [
                'item_id' => 5,
                'purchase_detail_id' => 4,
                'jumlah' => 30,
            ]
        ]);

        $purchases_detail5 = ([
            [
                'item_id' => 1,
                'purchase_detail_id' => 5,
                'jumlah' => 10,
            ],
            [
                'item_id' => 2,
                'purchase_detail_id' => 5,
                'jumlah' => 10,
            ],
            [
                'item_id' => 5,
                'purchase_detail_id' => 5,
                'jumlah' => 10,
            ],
        ]);
        
        $iteration = 0;
        foreach ($purchases_data as $purchase) {
            # code...
            $new_purchase = Purchase::create($purchases_data[$iteration]);
            PurchaseDetail::create([
                'purchase_id' => $new_purchase->id,
            ]);
            $iteration++;
        }

        PurchaseDetail::find(1)->items()->attach($purchases_detail1);
        PurchaseDetail::find(2)->items()->attach($purchases_detail2);
        PurchaseDetail::find(3)->items()->attach($purchases_detail3);
        PurchaseDetail::find(4)->items()->attach($purchases_detail4);
        PurchaseDetail::find(5)->items()->attach($purchases_detail5);

        StockMutation::create([
            'item_id' => 1,
            'stok_awal' => 12,
            'stok_mutasi' => 10,
            'stok_akhir' => 22,
            'jenis_mutasi' => 'penambahan',
            'keterangan' => 'Pembelian dengan Kode : PCS0000',
        ]);

        StockMutation::create([
            'item_id' => 2,
            'stok_awal' => 20,
            'stok_mutasi' => 10,
            'stok_akhir' => 30,
            'jenis_mutasi' => 'penambahan',
            'keterangan' => 'Pembelian dengan Kode : PCS0000',
        ]);

        StockMutation::create([
            'item_id' => 3,
            'stok_awal' => 31,
            'stok_mutasi' => 20,
            'stok_akhir' => 51,
            'jenis_mutasi' => 'penambahan',
            'keterangan' => 'Pembelian dengan Kode : PCS0001',
        ]);

        StockMutation::create([
            'item_id' => 3,
            'stok_awal' => 51,
            'stok_mutasi' => 25,
            'stok_akhir' => 76,
            'jenis_mutasi' => 'penambahan',
            'keterangan' => 'Pembelian dengan Kode : PCS0002',
        ]);

        StockMutation::create([
            'item_id' => 4,
            'stok_awal' => 30,
            'stok_mutasi' => 25,
            'stok_akhir' => 55,
            'jenis_mutasi' => 'penambahan',
            'keterangan' => 'Pembelian dengan Kode : PCS0002',
        ]);

        StockMutation::create([
            'item_id' => 5,
            'stok_awal' => 25,
            'stok_mutasi' => 30,
            'stok_akhir' => 55,
            'jenis_mutasi' => 'penambahan',
            'keterangan' => 'Pembelian dengan Kode : PCS0003',
        ]);

        StockMutation::create([
            'item_id' => 1,
            'stok_awal' => 22,
            'stok_mutasi' => 10,
            'stok_akhir' => 32,
            'jenis_mutasi' => 'penambahan',
            'keterangan' => 'Pembelian dengan Kode : PCS0004',
        ]);

        StockMutation::create([
            'item_id' => 2,
            'stok_awal' => 30,
            'stok_mutasi' => 10,
            'stok_akhir' => 40,
            'jenis_mutasi' => 'penambahan',
            'keterangan' => 'Pembelian dengan Kode : PCS0004',
        ]);

        StockMutation::create([
            'item_id' => 5,
            'stok_awal' => 55,
            'stok_mutasi' => 10,
            'stok_akhir' => 65,
            'jenis_mutasi' => 'penambahan',
            'keterangan' => 'Pembelian dengan Kode : PCS0004',
        ]);

        Item::find(1)->update(['stok' => 32]);
        Item::find(2)->update(['stok' => 40]);
        Item::find(3)->update(['stok' => 76]);
        Item::find(4)->update(['stok' => 55]);
        Item::find(5)->update(['stok' => 65]);
    }
}
