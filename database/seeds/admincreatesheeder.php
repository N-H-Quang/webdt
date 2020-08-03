<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class admincreatesheeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert(['name'=>'Nguyen Huu quang','email'=>'neuem113@gmail.com','phone'=>'0327460560','avatar'=>'','password'=>bcrypt('Quang')]);
    }
}
