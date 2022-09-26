<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\str;


class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        // for($i=0; $i <= 10; $i++){
            $faker = \Faker\Factory::create();
            $minincome = 500000;
            $maxincome = 1500000;
           
    $min = 0;
    $max = 2;
    $rand = rand($min,$max);
    $min = 0;
    $max = 2;
    $rand2 = rand($min,$max);
    $min = 0;
    $max = 2;
    $rand3 = rand($min,$max);
    $partnerOccupation = array("Private","Government","Business");
    $partnerOccupation1 =  array_rand($partnerOccupation,3);
    $ab = $partnerOccupation[$partnerOccupation1[$rand]]." ".$partnerOccupation[$partnerOccupation1[$rand2]]." ".$partnerOccupation[$partnerOccupation1[$rand3]];
    $ff = explode(" ",$ab);
    $min1 = 0;
    $max1 = 1;
    $mix = rand($min1,$max1);
    $min2 = 0;
    $max2 = 1;
    $mix2 = rand($min2,$max2);
           
    
            $family = array("Joint","Nuclear");
            $Family1 = array_rand($family,2);
           $familyString = $family[$Family1[$mix]]." ".$family[$Family1[$mix2]];
           $familyArray = explode(" ",$familyString);
            $partnerManglik = array("yes","no");
            $partnerManglik1 = array_rand($partnerManglik,2);
       $partnerManglikString = $partnerManglik[$partnerManglik1[$mix]]." ".$partnerManglik[$partnerManglik1[$mix2]];
       $partnerManglikArray =  explode(" ",$partnerManglikString);
    
            $data = User::create([
                "name" => $faker->name(),
                "email" => 'anand.sen.9237@gmail.com',
                'password' => hash::make('admin@576'),
                'date_of_birth'=>$faker->datetimeBetween('10-10-1998','10-10-2020'),
                'gender'=>$faker->randomElement(["male", "female"]),
                'annual_income'=> mt_rand($minincome, $maxincome),
                'occupation'=>$faker->randomElement(["Private", "Government","Business"]),
                'family_type'=>$faker->randomElement(["Joint", "Nuclear"]),
                'manglik'=>$faker->randomElement(["yes", "no"]),
                'expected_income'=> mt_rand($minincome, $maxincome).'-'.mt_rand($minincome, $maxincome),
                'partnerOccupation'=> json_encode($ff),
                 'Family'=> json_encode($familyArray),
                 'partnerManglik'=>json_encode($partnerManglikArray),
                'role_as' => 'admin'
            ]);
        // }
        }
}
