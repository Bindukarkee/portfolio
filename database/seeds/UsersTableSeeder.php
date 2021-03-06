<?php

use App\User;
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
        factory(User::class)->create([
            'name' => 'John Doe',
            'email' => 'john@portfolio.test'
        ]);
        factory(User::class, 9)->create();
    }
}
