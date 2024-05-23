<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;
class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $comicsArray=config("comic");

        foreach($comicsArray as $Singlecomic){
            $newComic= new Comic();
            $newComic->title=$Singlecomic['title'];
            $newComic->description=$Singlecomic['description'];
            $newComic->image=$Singlecomic['thumb'];
            $newComic->price=$Singlecomic['price'];
            $newComic->series=$Singlecomic['series'];
            $newComic->date=$Singlecomic['sale_date'];
            $newComic->type=$Singlecomic['type'];
           $newComic->save();

        }
    }
}
