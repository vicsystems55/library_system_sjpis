<?php

use Illuminate\Database\Seeder;

class MindigoPackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('mindigo_packs')->insertOrIgnore([

            [
               
                'title' => 'Star Package',
                'description' => 'This is the basic MindigoGlobal Pack',
                'reg_fee' => '99700',
                'grade' => 1,
                'points' => 700,
                'dr_commission' => 5000,
                'match_bonus' => 10000,
                'max_daily_matching' => 14,
                'banner_img' => 'star_package.jpg',
            ],

            // [
               
            //     'title' => 'Ruby Package',
            //     'description' => 'This is the second package',
            //     'reg_fee' => '500',
            //     'grade' => 2,
            //     'points' => 250,
            //     'dr_commission' => 15,
            //     'match_bonus' => 150,
            //     'max_daily_matching' => 6,
            //     'banner_img' => 'ruby_package.jpg',
            // ],

            // [
                
            //     'title' => 'Pearl Package',
            //     'description' => 'This is the third tier package for the able investor',
            //     'reg_fee' => '1000',
            //     'grade' => 3,
            //     'points' => 500,
            //     'dr_commission' => 20,
            //     'match_bonus' => 200,
            //     'max_daily_matching' => 8,
            //     'banner_img' => 'pearl_package.jpg',
            // ],

            // [
               
            //     'title' => 'Silver Package',
            //     'description' => 'This is for fourth tier investors',
            //     'reg_fee' => '5000',
            //     'grade' => 4,
            //     'points' => 2500,
            //     'dr_commission' => 25,
            //     'match_bonus' => 250,
            //     'max_daily_matching' => 10,
            //     'banner_img' => 'silver_package.jpg', 
            // ],

            // [
               
            //     'title' => 'Emerald Package',
            //     'description' => 'This is a fifth tier investment package, the investors choice',
            //     'reg_fee' => '10000',
            //     'grade' => 5,
            //     'points' => 5000,
            //     'dr_commission' => 30,
            //     'match_bonus' => 300,
            //     'max_daily_matching' => 12,
            //     'banner_img' => 'emerald_package.jpg',
            // ],

            // [
              
            //     'title' => 'Sapphire Package',
            //     'description' => 'This is the sixth tier investment package',
            //     'reg_fee' => '20000',
            //     'grade' => 6,
            //     'points' => 10000,
            //     'dr_commission' => 35,
            //     'match_bonus' => 350,
            //     'max_daily_matching' => 14,
            //     'banner_img' => 'sapphire_package.jpg',
            // ],

            // [
               
            //     'title' => 'Diamond Package',
            //     'description' => 'This is the highest investment package, the ultimate investment package',
            //     'reg_fee' => '50000',
            //     'grade' => 7,
            //     'points' => 25000,
            //     'dr_commission' => 40,
            //     'match_bonus' => 400,
            //     'max_daily_matching' => 16,
            //     'banner_img' => 'diamond_package.jpg' ,
            // ],
            
            
        ]);
            

    }
}
