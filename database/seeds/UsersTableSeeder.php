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
            [
                // 'name'=>'Daniela Dewitt',
                'username'=>'ddewitt', 
                'email'=>'daniela@dewitt.de', 
                'email_verified_at'=>now(),
                'password'=>bcrypt('daniela@dewitt.de'), 
                'remember_token' => str_random(60),
                'created_at' =>now(),
                'updated_at' =>now(),
            ],

            [
                // 'name'=>'Mario Palmer',
                'username'=>'mpalmer', 
                'email'=>'mario@palmer.us',
                'email_verified_at'=>now(), 
                'password'=>bcrypt('mario@palmer.us'), 
                'remember_token' => str_random(60),
                'created_at' =>now(),
                'updated_at' =>now(),
            ],

            [
                // 'name'=>'Demetri Caron',
                'username'=>'dcaron', 
                'email'=>'demetri@caron.us',
                'email_verified_at'=>now(), 
                'password'=>bcrypt('demetri@caron.us'), 
                'remember_token' => str_random(60),
                'created_at' =>now(),
                'updated_at' =>now(),
            ],

            [
                // 'name'=>'Marie Jensen',
                'username'=>'mjensen', 
                'email'=>'marie@jensen.us',
                'email_verified_at'=>now(), 
                'password'=>bcrypt('marie@jensen.us'), 
                'remember_token' => str_random(60),
                'created_at' =>now(),
                'updated_at' =>now(),
            ],

            [
                // 'name'=>'Adolfo Hess',
                'username'=>'ahess', 
                'email'=>'adolfo@hess.us', 
                'email_verified_at'=>now(),
                'password'=>bcrypt('adolfo@hess.us'), 
                'remember_token' => str_random(60),
                'created_at' =>now(),
                'updated_at' =>now(),
            ],

            [
                // 'name'=>'Joshua Wilson',
                'username'=>'jwilson', 
                'email'=>'joshua@wilson.us', 
                'email_verified_at'=>now(),
                'password'=>bcrypt('joshua@wilson.us'), 
                'remember_token' => str_random(60),
                'created_at' =>now(),
                'updated_at' =>now(),
            ],

            [
                // 'name'=>'Gianluca Conte',
                'username'=>'gconte', 
                'email'=>'gianluca@conte.it',
                'email_verified_at'=>now(), 
                'password'=>bcrypt('gianluca@conte.it'), 
                'remember_token' => str_random(60),
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
        ]);
    }
}
