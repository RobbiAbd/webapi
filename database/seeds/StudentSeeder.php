<?php

use Illuminate\Database\Seeder;
use \App\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::insert([
        	'nama'	=> 'Robbi Abdul Rohman',
        	'jk'	=> 'L'
        ]);

        Student::insert([
        	'nama'	=> 'Megumin',
        	'jk'	=> 'P'
        ]);
    }
}
