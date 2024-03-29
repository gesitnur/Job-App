<?php
use App\Role;

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = new Role(); 
        $role_user->name = 'user'; 
        $role_user->description = 'A User';
         $role_user->save();
          $role_admin = new Role(); 
         $role_admin->name = 'admin'; 
         $role_admin->description = 'A Admin User';
          $role_admin->save();
    }
}
