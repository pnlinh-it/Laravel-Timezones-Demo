<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => '$2y$10$KYDNw2au5f8rqgsx2FZhTu4JS.yk7aSk1pC5Vj.SOdamc55akAAvy',
                'remember_token' => '',
                'timezone' => 'Europe/London'
            ],

        ];

        foreach ($items as $item) {
            \App\User::create($item);
        }
    }
}
