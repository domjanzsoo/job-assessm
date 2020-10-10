<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App;
class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\User::insert(
            [
               'firstName' => 'Edward',
               'lastName' => 'Norton',
               'DOB'=>'1972.11.25',
               'phoneNumber'=>'01235454464',
               'email'=>'enorton@email.com',
            ]);
        App\Models\User::insert([
                'firstName' => 'Lara',
                'lastName' => 'Croft',
                'DOB'=>'1989.01.10',
                'phoneNumber'=>'01235455556',
                'email'=>'laracroft@email.com',
             ]);
        App\Models\User::insert([
                'firstName' => 'Donald',
                'lastName' => 'Trump',
                'DOB'=>'1945.03.13',
                'phoneNumber'=>'01235457007',
                'email'=>'doni@whouse.com',
             ]);
        App\Models\User::insert([
                'firstName' => 'Anna',
                'lastName' => 'Krejczzkuczik',
                'DOB'=>'1981.12.04',
                'phoneNumber'=>'01230004464',
                'email'=>'anna@email.com',
             ]);
        App\Models\User::insert([
                'firstName' => 'Bob',
                'lastName' => 'Justbob',
                'DOB'=>'1990.08.10',
                'phoneNumber'=>'01335454963',
                'email'=>'bob@simplybob.com',
             ]);
            
    }
}
