<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\SMSSim\Models\User::class)->create([
            'name' => 'Allan Roberto',
            'email' => 'allanroberto18@gmail.com',
            'password' => bcrypt('kerberos280104'),
            'dica_senha' => 'padrão dantas + dedé',
            'role' => 'admin'
        ]);
        factory(\SMSSim\Models\User::class)->create([
            'name' => 'Delmo Rodrigues',
            'email' => 'delmo@smssim.com.br',
            'password' => bcrypt('123456'),
            'dica_senha' => 'um dois três quatro cinco seis',
            'role' => 'vendedor'
        ]);
        factory(\SMSSim\Models\User::class, 5)->create();
    }
}
