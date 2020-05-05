<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::updateOrCreate([
            'name'        => 'Branch Office Dhankuta',
            'username'    => 'RBB201',
            'branch_code' => '201',
            'email'       => 'dhankuta@rbb.com.np',
            'password'    => bcrypt('dhankuta@1234'),
        ]);
    }
}
