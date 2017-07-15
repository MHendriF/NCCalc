<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        DB::table('users')->insert(array(
			array('name'=>'admin@ncc', 'username'=>'admin@ncc', 'email'=>'admin@ncc.com', 'password'=>'$2y$10$sUfJOg3uPTxclU1RWwdHSOx4ugJxQtuyICgH9AoQ60NPRvSa8BZfW')
		));
    }
}
