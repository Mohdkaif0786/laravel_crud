<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
 use Illuminate\Support\Facades\File;
 use App\Models\employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json=File::get('database/json/emp.json');
        $json_dec=json_decode($json);
        $data=collect($json_dec);
          $data->each(function($emp){
            employee::create([
                'name'=>$emp->name,
                'age'=>$emp->age,
                'email'=>$emp->email,
                'city'=>$emp->city
            ]);
          });
              
         
                  
    }
}
