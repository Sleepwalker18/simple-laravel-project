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

    $users = [
      [
        'name' => 'Israel Arellano',
        'email' => 'israel@gmail.com',
        'password' => Hash::make('password')
      ],
      [
        'name' => 'Juan Hernandez',
        'email' => 'juan@gmail.com',
        'password' => Hash::make('password')
      ]
    ];

    foreach ($users as $user) {
      User::create($user);
    }

  }
}
