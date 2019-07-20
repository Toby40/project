<?php

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
        //fetch roles
//        $roles = \App\Role::query()->select('id')->get()->toArray();


            //Admin user
            $user = new \App\User([
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'username' => 'admin',
                'role_id' => 1,
                'password' => \Illuminate\Support\Facades\Hash::make('password')
            ]);
            $user->save();



            //Member user
            $user = new \App\User([
                'name' => 'Member',
                'email' => 'member@admin.com',
                'username' => 'member',
                'role_id' => 2,
                'password' => \Illuminate\Support\Facades\Hash::make('password')
            ]);
            $user->save();


            //Staff user
            $user = new \App\User([
                'name' => 'Staff',
                'email' => 'staff@admin.com',
                'username' => 'staff',
                'role_id' => 3,
                'password' => \Illuminate\Support\Facades\Hash::make('password')
            ]);
            $user->save();

            $staff = new \App\Staff([
                'user_id' => 3,
                'staff_number' => 345950,
                'staff_name' => 'Staff'
            ]);
            $staff->save();


            //Land Agent user
            $user = new \App\User([
                'name' => 'Agent',
                'email' => 'agent@admin.com',
                'username' => 'agent',
                'role_id' => 4,
                'password' => \Illuminate\Support\Facades\Hash::make('password')
            ]);
            $user->save();

            $land_agent = new \App\LandAgent([
                'land_id' => 1,
                'user_id' => 4,
                'land_agent_name' => 'Agent'
            ]);
            $land_agent->save();
        }



}
