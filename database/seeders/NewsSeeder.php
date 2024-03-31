<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
       
        for( $i = 0; $i < 4; $i++ ) {

            $width = 640;             
            $height = 480; 

            $title = $faker->sentence(6);

            DB::table("news")->insert([
                'category_id'=>rand(1,7), //  ile 7 arasında random değer alsın
                'title'=> $title,
                'image'=> $faker->imageUrl($width, $height, 'cats',true,),
                'content'=> $faker->paragraph(4),
                'slug'=> Str::slug($title),
                'created_at'=>$faker->dateTime('now'),
                'updated_at'=>now(),

            ]);
        }
    }
}
