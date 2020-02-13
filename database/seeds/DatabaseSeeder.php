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
        DB::table('members')->insert([
            ['name' => 'Nguyen thi Hien', 'username' => 'nguyenhien', 'password' => Hash::make('123456'), 'image' => 'dsjhjhsk', 'email' => 'hiennguyen@gmail.com', 'phone' => '0978742821', 'is_admin' => 0],
            ['name' => 'Hoang Cong Tuyen', 'username' => 'hoangtuyen', 'password' => Hash::make('123456'), 'image' => 'sbjsfjksf', 'email' => 'tuyenhoang@gmail.com', 'phone' => '0974719769', 'is_admin' => 1],
        ]);
    }
}
