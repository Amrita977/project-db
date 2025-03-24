<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        // $json = File::get(path:'database/json/students.json');
        //  $students=collect(json_decode($json));


     
        // $students->each(function($student){
            for($i=1; $i<=10;$i++){
            student::create([
                'name'=>fake()->name(),
                'email'=>fake()->unique()->email()
            ]);
    }
            // student::insert($student);
    }
 
    }

    //     $students=collect(
    // [
    //             [
    //             'name' => 'Richaa' ,
    //            'email' =>'Richa@gmail.com'
    //         ],
    //          [  
    //             'name' => 'Amrita' ,
    //             'email' =>'amrita@gmail.com'
    //             ]
    // ]
    //          );
             
        
        // student::create['name' => 'Amrita' ,
        // 'email' =>'amrita@gmail.com']);
        //
    
