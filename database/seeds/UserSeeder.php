<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       DB::table('users')->delete();
        //user
       $admin = new User();
       $admin->name = 'polo';
       $admin->lastname = 'Mbilong';
       $admin->email = 'admin1@gmail.com';
       $admin->password = bcrypt('123456');
       $admin->save();

       $manager = new User();
       $manager->name = 'jules';
       $admin->lastname = 'Yimtchi';
       $manager->email = 'admin2@gmail.com';
       $manager->password = bcrypt('123456');
       $manager->save();

   }
}
