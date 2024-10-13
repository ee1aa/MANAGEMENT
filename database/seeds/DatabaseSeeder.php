<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         // 他のシーダーがある場合もここに追加
        $this->call(UsersTableSeeder::class);
    }
}
