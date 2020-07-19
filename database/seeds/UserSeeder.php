<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('admin123')
        ])
            ->roles()
            ->attach(Role::where('name', 'admin')->first());

        User::create([
            'vendor_id' => 1,
            'name' => 'Kasir',
            'email' => 'kasir@mail.com',
            'password' => Hash::make('kasir123')
        ])
            ->roles()
            ->attach(Role::where('name', 'cashier')->first());

        User::create([
            'vendor_id' => 1,
            'name' => 'Vendor',
            'email' => 'vendor@mail.com',
            'password' => Hash::make('vendor123')
        ])
            ->roles()
            ->attach(Role::where('name', 'vendor')->first());

        User::create([
            'name' => 'User',
            'email' => 'user@mail.com',
            'password' => Hash::make('user123')
        ])
            ->roles()
            ->attach(Role::where('name', 'user')->first());
    }
}
