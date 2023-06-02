<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Review;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Review::create([
            "user_id" => 1,
            "stars" => "4",
            "name" => "Kilian",
            "title" => "Goeie pokkoe",
            "comment" => "Topper",
        ]);

        Review::create([
            "user_id" => 1,
            "stars" => "5",
            "name" => "Jaap Kanbier",
            "title" => "10/10",
            "comment" => "3EC's",
        ]);

        Review::create([
            "user_id" => 1,
            "stars" => "5",
            "name" => "God",
            "title" => "Perfectie",
            "comment" => "Ook 3EC's.",
        ]);

        Review::create([
            "user_id" => 2,
            "name" => "User 2",
            "stars" => "3",
            "title" => "Dingen",
            "comment" => "Test comment",
        ]);

        Review::create([
            "user_id" => 3,
            "name" => "User 2",
            "stars" => "3",
            "title" => "Dingen",
            "comment" => "Test comment",
        ]);

        Review::create([
            "user_id" => 4,
            "name" => "User 2",
            "stars" => "3",
            "title" => "Dingen",
            "comment" => "Test comment",
        ]);
    }
}
