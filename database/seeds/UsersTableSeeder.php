<?php

use App\Models\User;
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
        factory(User::class, 10)->create();

        /* criando usuario padrao sem precisar utilizar o factory
    User::create([
    'name' => 'Leonardo',
    'email' => 'leoprofissional@live.com',
    'password' => bcrypt('123456'),
    ]);
     */
    }
}
