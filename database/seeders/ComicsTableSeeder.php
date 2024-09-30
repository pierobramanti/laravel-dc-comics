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
        //recuperiamo il contenuto del file comics posizionato nella cartella config

        $comics=config('comics');

        foreach($comics as $comic){

            $new_comic = new Comic();

            $new_comic->title = $comic['title'];
            $new_comic->description = $comic['description'];
            $new_comic->thumb = $comic['thumb'];
            $price = preg_replace('/[^\d.]/', '', $comic['price']);
            $new_comic->price = floatval($price);
            $new_comic->sale_date = $comic['sale_date'];
            $new_comic->type = $comic['type'];

            $artist_string = implode(', ', $comic['artists']);
            $writers_string = implode(', ', $comic['writers']);

            $new_comic->artists = $artist_string; 
            $new_comic->writers = $writers_string;  

            $new_comic->save();

        }
    }
}
