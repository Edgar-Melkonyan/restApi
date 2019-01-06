<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $users = [
            ['id' => 1, 'email' => 'first@gmail.com',  'password' => bcrypt('first365224')],
            ['id' => 2, 'email' => 'second@gmail.com', 'password' => bcrypt('second365224')],
        ];
        foreach ($users as $user) {
            User::create($user);
        }
     }
}
