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
        DB::table('users')->insert([
            'role_id'=>'1',
            
            'name'=>'AZ.SuperAdmin',
            'username'=>'superadmin',
            'email'=>'super@mail.com',
            'password'=>bcrypt('rootsuper'),

        ]);

        DB::table('users')->insert([
            'role_id'=>'2',
            
            'name'=>'AZ.SchoolAdmin',
            'username'=>'schooladmin',
            'email'=>'admin@mail.com',
            'password'=>bcrypt('rootschooladmin'),

        ]);

        DB::table('users')->insert([
            'role_id'=>'3',
            
            'name'=>'AZ.Student',
            'username'=>'student',
            'email'=>'student@mail.com',
            'password'=>bcrypt('rootstudent'),

        ]);

        DB::table('users')->insert([
            'role_id'=>'3',
            
            'name'=>'OM.Student',
            'username'=>'student2',
            'email'=>'student2@mail.com',
            'password'=>bcrypt('rootstudent2'),

        ]);
    }
}
