<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemSupplierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_supplier', function (Blueprint $table) {
            $table->id();
            $table->char('kode_pembelian', '9');
            $table->foreignId('item_id');
            $table->foreignId('supplier_id');
            $table->integer('jumlah_barang');
            $table->integer('total_bayar');
            $table->timestamps();

            $table->foreign('item_id')->references('id')->on('items');
            $table->foreign('supplier_id')->references('id')->on('suppliers');
        });

        DB::statement("ALTER TABLE item_supplier AUTO_INCREMENT = 200000;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_supplier');
    }
}
