<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Request;

class RequestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Request::create([
            "user_id" => 2,
            "owner_id" => 1,
            "book_id" => 1,
            "name" => "Kilian",
            "return_date" => "2024-06-05",
            "email" => "Kilian@gmail.com",
            "phone_number" => "0612345678",
            "comment" => "Stuur boek 1",
        ]);

        Request::create([
            "user_id" => 5,
            "owner_id" => 1,
            "book_id" => 2,
            "name" => "Admin",
            "return_date" => "2024-06-05",
            "email" => "admin@gmail.com",
            "phone_number" => "0612345678",
            "comment" => "Seed test reuquest.",
        ]);

        Request::create([
            "user_id" => 1,
            "owner_id" => 2,
            "book_id" => 5,
            "name" => "Admin",
            "return_date" => "2024-06-05",
            "email" => "admin@mgka.ovka",
            "phone_number" => "0622222222",
            "comment" => "Gun boek 5.",
        ]);

        Request::create([
            "user_id" => 5,
            "owner_id" => 1,
            "book_id" => 2,
            "name" => "Mark Rutte",
            "return_date" => "2024-06-05",
            "email" => "Markie@gmail.com",
            "phone_number" => "0633333333",
            "comment" => "Stuur boek 2.",
        ]);
    }
}
