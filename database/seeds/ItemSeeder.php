<?php

use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->delete();
        //insert some dummy records
        DB::table('items')->insert(array(
			array('nama_item'=>'Print, tanpa kertas, warna hitam-putih', 'harga'=>'200'),
			array('nama_item'=>'Print, tanpa kertas, berwarna < 50%', 'harga'=>'300'),
			array('nama_item'=>'Print, tanpa kertas, berwarna > 50%', 'harga'=>'600'),
			array('nama_item'=>'Print, kertas A5-single, warna hitam-putih', 'harga'=>'300'),
			array('nama_item'=>'Print, kertas A5-single, warna berwarna < 50%', 'harga'=>'400'),
			array('nama_item'=>'Print, kertas A5-single, warna berwarna > 50%', 'harga'=>'700'),
			array('nama_item'=>'Print, kertas A5-bolak-balik, warna hitam-putih', 'harga'=>'400'),
			array('nama_item'=>'Print, kertas A5-bolak-balik, warna berwarna < 50%', 'harga'=>'600'),
			array('nama_item'=>'Print, kertas A5-bolak-balik, warna berwarna > 50%', 'harga'=>'800'),

			array('nama_item'=>'Print, kertas A4-single, warna hitam-putih', 'harga'=>'400'),
			array('nama_item'=>'Print, kertas A4-single, warna berwarna < 50%', 'harga'=>'500'),
			array('nama_item'=>'Print, kertas A4-single, warna berwarna > 50%', 'harga'=>'1000'),
			array('nama_item'=>'Print, kertas A4-bolak-balik, warna hitam-putih', 'harga'=>'500'),
			array('nama_item'=>'Print, kertas A4-bolak-balik, warna berwarna < 50%', 'harga'=>'600'),
			array('nama_item'=>'Print, kertas A4-bolak-balik, warna berwarna > 50%', 'harga'=>'1100'),

			array('nama_item'=>'Kertas A5', 'harga'=>'100'),
			array('nama_item'=>'Kertas A4', 'harga'=>'150'),

			array('nama_item'=>'Scan hitam-putih', 'harga'=>'500'),
			array('nama_item'=>'Scan berwarna', 'harga'=>'1000'),
			array('nama_item'=>'CDR', 'harga'=>'3500'),
			array('nama_item'=>'Case only', 'harga'=>'3000'),
			array('nama_item'=>'CDR + Case', 'harga'=>'6000'),
			array('nama_item'=>'Sticker CD', 'harga'=>'1000'),
			array('nama_item'=>'Mika', 'harga'=>'1000'),
			array('nama_item'=>'Cover jilid only (bufallo+kertas minyak)', 'harga'=>'2000'),
			array('nama_item'=>'Stofmap folio', 'harga'=>'1500'),
			array('nama_item'=>'Folio bergaris', 'harga'=>'500'),
			array('nama_item'=>'Jilid', 'harga'=>'4000'),
			array('nama_item'=>'Amplop', 'harga'=>'250'),
           
          ));
    }
}
