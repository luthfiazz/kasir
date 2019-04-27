<?php

use Illuminate\Database\Seeder;

class masterbarangseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('masterbarang')->insert([
            [
                'nama_barang' => 'sabun batang',
                'harga_satuan' => ' harga 3000'
            ],[
                'nama_barang' => 'Mie Instan',
                'harga_satuan' => ' harga 2000'
            ],[
                'nama_barang' => 'Pensil',
                'harga_satuan' => ' harga 1000'
            ],[
                'nama_barang' => 'Kopi Sachet',
                'harga_satuan' => ' harga 1500'
            ],[
                'nama_barang' => 'Air Minum Galon',
                'harga_satuan' => ' harga 2000'
            ],
        ]);
        
    }
}
