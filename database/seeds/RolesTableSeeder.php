<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Admin Role
        $role = new \App\Role([
            'name' => 'Admin'
        ]);
        $role->save();

        //Member Role
        $role = new \App\Role([
            'name' => 'Member'
        ]);
        $role->save();

        //Staff Role
        $role = new \App\Role([
            'name' => 'Staff'
        ]);
        $role->save();

        //LandAgent
        $role = new \App\Role([
            'name' => 'Agent'
        ]);
        $role->save();
    }
}
