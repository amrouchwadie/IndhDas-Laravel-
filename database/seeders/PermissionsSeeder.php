<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Junges\ACL\Models\Group;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            ['name' => 'compte', 'guard_name' => 'gerer-compte', 'description' => 'compte permission'],
            ['name' => 'Sector', 'guard_name' => 'gerer-sectors', 'description' => 'sector permissions'],
            ['name' => 'ajouter role', 'guard_name' => 'can-add-role', 'description' => 'Role permissions'],
            ['name' => 'editer role', 'guard_name' => 'can-edit-role', 'description' => 'Role permissions'],
            ['name' => 'supprimer role', 'guard_name' => 'can-delete-role', 'description' => 'Role permissions'],
            ['name' => 'gestion role', 'guard_name' => 'can-index-role', 'description' => 'Role permissions'],
        
        ]);

        Group::insert([
            ['id'=>1,'name' => 'admin', 'guard_name' => 'admin', 'description' => 'group admin'],
        ]);

        $group = Group::find(1);
        $group->assignPermissions('gerer-compte','gerer-sectors','can-add-role','can-edit-role','can-delete-role','can-index-role');

        $user = User::find(1);
        $user->assignGroup('admin');

    }
}
