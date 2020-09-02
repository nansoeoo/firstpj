<?php

use Illuminate\Database\Seeder;

class RowTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role=new Role;
        $role->name="Customer";
        $role->save();

        $role2=new Role;
        $role2->name="Admin";
        $role2->save();
    }
}
