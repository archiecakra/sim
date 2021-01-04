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
            ],
            [
                'kode_pembelian' => 'PCS0001',
                'supplier_id' => 2,
                'total_bayar' => 186000,
                'keterangan' => 'Restok Bolpoint',
            ]
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
        
        Purchase::create($purchases_data[0]);
        Purchase::create($purchases_data[1]);
        
        $purchases = Purchase::all();
        foreach ($purchases as $purchase) {
            # code...
            $pdetail = PurchaseDetail::create([
                'purchase_id' => $purchase->id,
            ]);
        }

        PurchaseDetail::find(1)->items()->attach($purchases_detail1);
        PurchaseDetail::find(2)->items()->attach($purchases_detail2);

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

        Item::find(1)->update(['stok' => 22]);
        Item::find(2)->update(['stok' => 30]);
        Item::find(3)->update(['stok' => 51]);
    }
}
