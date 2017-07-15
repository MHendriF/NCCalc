<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('UserSeeder');
        //this message shown in your terminal after running db:seed command
        $this->command->info("User database is completed :)");
        $this->call('ItemSeeder');
        //this message shown in your terminal after running db:seed command
        $this->command->info("Item database is completed :)");
    }
}
