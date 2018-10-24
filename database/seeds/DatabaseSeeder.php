<?php

use App\User;
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
        // $this->call(UsersTableSeeder::class);

        DB::table('users')->delete();
        DB::table('posts')->delete();

        factory(App\Post::class, 8)->create();

        User::create([
            'name' => 'Johnos',
            'email' => 'johnosjw@gmail.com',
            'password' => bcrypt('password')
        ]);
    }
}
