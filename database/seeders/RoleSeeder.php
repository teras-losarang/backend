<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\Traits\TruncateTable;
use Database\Seeders\Traits\DisableForeignKey;


class RoleSeeder extends Seeder
{
    use DisableForeignKey;
    use TruncateTable;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['Super Admin', 'Owner', 'Customer'];

        $this->disableForeignKeys();
        $this->truncate('roles');
        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }
        $this->enableForeignKeys();

    }
}
