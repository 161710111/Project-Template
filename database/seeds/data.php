<?php

use Illuminate\Database\Seeder;

class data extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = [
        		['Barang'=>'Kaos', 'Harga'=>'25000'],
        		['Barang'=>'celana', 'Harga'=>'30000']
        ];

        DB::table('barangs')->insert($a);
    }
}
