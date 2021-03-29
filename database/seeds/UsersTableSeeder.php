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
        $data = [
            [
                'name' => 'Super Admin',
                'email' => 'admin@mail.com',
                'password' => bcrypt('nanozero1')
            ],
        ];

        try {
            foreach ($data as $key => $value) {
                $user = User::firstOrCreate($value);
            }
        } catch (\Exception $e) {
            dd($e);
        }
    }
}
