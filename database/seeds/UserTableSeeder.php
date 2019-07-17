<?php

use App\User; 
use App\Role;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_employee = Role::where('name', 'user')->first();
         $role_manager = Role::where('name', 'admin')->first(); 
         $employee = new User(); $employee->name = 'user name';
          $employee->email = 'user@example.com';
          $employee->birth = '2000-06-06';
          $employee->address = 'cibaligo';
          $employee->gender = 'female';
          $employee->cv = 'cv.jpg';
           $employee->password = bcrypt('secret'); $employee->save();
            $employee->roles()->attach($role_employee);
             $manager = new User(); $manager->name = 
             'admin name'; 
             $manager->email = 'admin@example.com';
             $manager->birth = '1995-01-01';
             $manager->address = 'Cimindi';
             $manager->gender = 'male';
             $manager->cv = 'cv.png';
              $manager->password = bcrypt('secret'); $manager->save();
              $manager->roles()->attach($role_manager);
    }
}
