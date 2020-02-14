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
            'name'=>'Marcin Dydymski',
            'email'=>'marcin_dydymski@poczta.fm',
            'password'=>bcrypt('password'),
            'phone'=>12345678,
            'address'=>"Grzymińska 24/5, 71-711 Szczecin",
            'status'=>'Active',
            'pesel'=>'83092217978',
            'type'=>'admin'
        ]);

        DB::table('users')->insert([
            'name'=>'Marek Markiewicz',
            'email'=>'doctorNO@poczta.fm',
            'password'=>bcrypt('password'),
            'phone'=>58712358,
            'address'=>"Robotnicza 22/1, 71-711 Szczecin",
            'status'=>'Active',
            'pesel'=>'56295547896',
            'type'=>'patient'
        ]);

        DB::table('users')->insert([
            'name'=>'Paweł Dydymski',
            'email'=>'paweł_dydymski@poczta.fm',
            'password'=>bcrypt('password'),
            'phone'=>791854789,
            'address'=>"ul. Wodna 1, 74-503 Moryń",
            'status'=>'Active',
            'pesel'=>'91020485641',
            'type'=>'patient'
        ]);

        DB::table('users')->insert([
            'name'=>'Katarzyna Grzelczyk',
            'email'=>'kgrzelczyk@gmail.com',
            'password'=>bcrypt('password'),
            'phone'=>515600346,
            'address'=>"ul. Grzymińska 24/5, 71-711 Szczecin",
            'status'=>'Active',
            'pesel'=>'84062387963',
            'type'=>'doctor'
        ]);

        DB::table('users')->insert([
            'name'=>'Jan Dradrach',
            'email'=>'jdradrach@wp.pl',
            'password'=>bcrypt('password'),
            'phone'=>791589741,
            'address'=>"ul. Kolejowa 34/1. 74-500 Chojna",
            'status'=>'Active',
            'pesel'=>'84082145628',
            'type'=>'doctor'
        ]);

        DB::table('users')->insert([
            'name'=>'Mirosław Leśniak',
            'email'=>'mlesniak@gmail.com',
            'password'=>bcrypt('password'),
            'phone'=>792854632,
            'address'=>"ul. Pszczelarska 3/8, 74-501 Mieszkowice",
            'status'=>'Active',
            'pesel'=>'79120878954',
            'type'=>'doctor'
        ]);

        DB::table('specializations')->insert([
            'name'=>'oncology',
        ]);

        DB::table('specializations')->insert([
            'name'=>'surgeon',
        ]);

        DB::table('specializations')->insert([
            'name'=>'internist',
        ]);
    }
}
