<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Admin",
            "email" => "admin@gmail.com",
            "password" => bcrypt("laravel"),
            "phone_number" => "0612345678",
            "description" => "I'm a merciful god.",
            "role" => "Admin",
            "profile_picture" => "users/user_default.png",
            "registered" => true
        ]);

        User::create([
            "name" => "Kilian van Embden",
            "email" => "kilianvanembden@gmail.com",
            "password" => bcrypt("laravel"),
            "phone_number" => "0612345678",
            "description" => "Ruil boeken voor EC's.",
            "role" => "Owner",
            "profile_picture" => "users/kilian.png",
            "registered" => true,
        ]);

        User::create([
            "name" => "Test gebruiker",
            "email" => "test@gmail.com",
            "password" => bcrypt("laravel"),
            "phone_number" => "0612345678",
            "description" => "I like spamming people.",
            "blocked" => true,
            "profile_picture" => "users/random.jpg",
            "registered" => true,
        ]);

        User::create([
            "name" => "John Doe",
            "email" => "JD@gmail.com",
            "password" => bcrypt("laravel"),
            "phone_number" => "0612345678",
            "description" => "Niet aan mijn hond komen broer.",
            "role" => "Owner",
            "profile_picture" => "users/John_Doe.jpg",
            "registered" => true,
        ]);

        User::create([
            "name" => "Mark Rutte",
            "email" => "torrentje@2ekamer.nl",
            "password" => bcrypt("laravel"),
            "phone_number" => "0612345678",
            "description" => "Ik ben je baas",
            "role" => "Owner",
            "profile_picture" => "users/Mark_ratte.jpg",
            "registered" => true,
        ]);

        User::create([
            "name" => "Willem (Willie) Alexander",
            "email" => "Koning@nederland.nl",
            "password" => bcrypt("laravel"),
            "phone_number" => "0612345678",
            "description" => "Niet mijn scriptie lezen heh!",
            "role" => "Owner",
            "profile_picture" => "users/user_default.png",
            "registered" => true,
        ]);

        User::create([
            "name" => "Jaap Kanbier",
            "email" => "JK@hsleiden.nl",
            "password" => bcrypt("laravel"),
            "phone_number" => "0612345678",
            "description" => "Hipper dan jij",
            "role" => "Owner",
            "profile_picture" => "users/user_default.png",
            "registered" => true,
        ]);

        User::create([
            "name" => "Jeroen Rijsdijk",
            "email" => "JR@hsleiden.nl",
            "password" => bcrypt("laravel"),
            "phone_number" => "0612345678",
            "description" => "Maker van de Shushi website",
            "role" => "Owner",
            "blocked" => true,
            "profile_picture" => "users/user_default.png",
            "registered" => true,
        ]);
    }
}
