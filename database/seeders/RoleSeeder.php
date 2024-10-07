<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $role1 = Role::create(['name' => 'Admin']);
      $role2 = Role::create(['name' => 'Coordinador']);
      $role3 = Role::create(['name' => 'Profesor']);

      Permission::create(['name' => 'admin.home'])->syncRoles([$role1, $role2, $role3]);

      Permission::create(['name' => 'admin.users.index'])->syncRoles([$role1]);
      Permission::create(['name' => 'admin.users.edit'])->syncRoles([$role1]);
      Permission::create(['name' => 'admin.users.update'])->syncRoles([$role1]);

      Permission::create(['name' => 'admin.categories.index'])->syncRoles([$role1, $role2]);
      Permission::create(['name' => 'admin.categories.create'])->syncRoles([$role1, $role2]);
      Permission::create(['name' => 'admin.categories.edit'])->syncRoles([$role1, $role2]);
      Permission::create(['name' => 'admin.categories.destroy'])->syncRoles([$role1, $role2]);

      Permission::create(['name' => 'admin.tags.index'])->syncRoles([$role1, $role2]);
      Permission::create(['name' => 'admin.tags.create'])->syncRoles([$role1, $role2]);
      Permission::create(['name' => 'admin.tags.edit'])->syncRoles([$role1, $role2]);
      Permission::create(['name' => 'admin.tags.destroy'])->syncRoles([$role1, $role2]);

      Permission::create(['name' => 'admin.cargos.index'])->syncRoles([$role1, $role2]);
      Permission::create(['name' => 'admin.cargos.create'])->syncRoles([$role1, $role2]);
      Permission::create(['name' => 'admin.cargos.edit'])->syncRoles([$role1, $role2]);
      Permission::create(['name' => 'admin.cargos.destroy'])->syncRoles([$role1, $role2]);

      Permission::create(['name' => 'admin.inventories.index'])->syncRoles([$role1, $role2]);
      Permission::create(['name' => 'admin.inventories.create'])->syncRoles([$role1, $role2]);
      Permission::create(['name' => 'admin.inventories.edit'])->syncRoles([$role1, $role2]);
      Permission::create(['name' => 'admin.inventories.destroy'])->syncRoles([$role1, $role2]);

      Permission::create(['name' => 'admin.herramientas.index'])->syncRoles([$role1, $role2, $role3]);
      Permission::create(['name' => 'admin.herramientas.create'])->syncRoles([$role1, $role2, $role3]);
      Permission::create(['name' => 'admin.herramientas.edit'])->syncRoles([$role1, $role2, $role3]);
      Permission::create(['name' => 'admin.herramientas.destroy'])->syncRoles([$role1, $role2, $role3]);

      
    }
}
