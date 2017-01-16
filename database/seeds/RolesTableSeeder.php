<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = [
        	[
        		'name' => 'owner',
        		'display_name' => 'Project Owner',
        		'description' => 'User is the owner of a given project'
        	],
        	[
        		'name' => 'admin',
        		'display_name' => 'User Administrator',
        		'description' => 'User is allowed to manage and edit other users'
        	],
        	[
        		'name' => 'employee',
        		'display_name' => 'User Employee',
        		'description' => 'User is the Employee'
        	]
        ];

        foreach ($role as $key => $value) {
        	Role::create($value);
        }
    }
}
