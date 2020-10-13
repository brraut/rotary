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
        $admin = new User;
        $admin->name = "Audan Admin";
        $admin->email = "administrator@audan.org.np";
        $admin->password = bcrypt("audanpassword12345");
        $admin->save();

    }
}
