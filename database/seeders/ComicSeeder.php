<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use App\Models\Comic;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comics')->truncate();

        $comics = config('comics');
        var_dump($comics);
        foreach ($comics as $item) {
            $comic = new Comic();
            $comic->title = $item['title'];
            $comic->description = $item['description'];
            $comic->thumb = $item['thumb'];
            $comic->series = $item['series'];
            $comic->sale_date = $item['sale_date'];
            $comic->type = $item['type'];

            $comic->save();

        }
    }
}
