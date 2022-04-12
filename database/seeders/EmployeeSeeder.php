<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'name'=>'Hendry',
            'jeniskelamin'=>'Laki-laki',
            'telpon'=>'085709152191',
        ]);
    }
}
