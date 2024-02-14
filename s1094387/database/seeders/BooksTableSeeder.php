<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            "owner_id" => "1",
            "current_owner_id" => "1",
            "name" => "Lord of the Rings",
            "writer" => "J.R.R. Tolkien",
            "img" => "books/the_lord_of_the_rings.jpg",
            "genre" => "Fantasy",
            "return_date" => "2024-07-10",
            "description" => "The Lord of the Rings is an epic high-fantasy novel by J.R.R. Tolkien.",
        ]);
        Book::create([
            "owner_id" => "1",
            "current_owner_id" => "1",
            "name" => "It",
            "writer" => "Stephen King",
            "img" => "books/It.jpg",
            "genre" => "Horror",
            "return_date" => "2024-06-15",
            "description" => "It is a horror novel written by Stephen King.",
        ]);
        Book::create([
            "owner_id" => "1",
            "current_owner_id" => "2",
            "name" => "The Thing",
            "writer" => "John W. Campbell Jr.",
            "genre" => "Horror",
            "return_date" => "2024-08-15",
            "description" => "The Thing is a science fiction horror novella by John W. Campbell Jr.",
        ]);
        Book::create([
            "owner_id" => "1",
            "current_owner_id" => "2",
            "name" => "The Call of Cthulhu",
            "writer" => "H.P. Lovecraft",
            "genre" => "Horror",
            "return_date" => "2024-11-21",
            "description" => "The Call of Cthulhu is a horror short story by H.P. Lovecraft.",
        ]);
        Book::create([
            "owner_id" => "2",
            "current_owner_id" => "2",
            "name" => "The Necronomicon",
            "writer" => "H.P. Lovecraft",
            "genre" => "Horror",
            "return_date" => "2024-09-05",
            "description" => "The Necronomicon is a fictional grimoire appearing in the stories of H.P. Lovecraft.",
        ]);
        Book::create([
            "owner_id" => "2",
            "current_owner_id" => "2",
            "name" => "World War Z",
            "writer" => "Max Brooks",
            "genre" => "Horror",
            "return_date" => "2024-07-10",
            "description" => "World War Z is a apocalyptic horror novel by Max Brooks.",
        ]);
        Book::create([
            "owner_id" => "2",
            "current_owner_id" => "3",
            "name" => "Gone Girl",
            "writer" => "Gillian Flynn",
            "genre" => "Mystery",
            "return_date" => "2024-10-15",
            "description" => "Gone Girl is a psychological thriller novel by Gillian Flynn.",
        ]);
        Book::create([
            "owner_id" => "2",
            "current_owner_id" => "3",
            "name" => "Sherlock Holmes",
            "writer" => "Arthur Conan Doyle",
            "genre" => "Mystery",
            "return_date" => "2024-06-20",
            "description" => "Sherlock Holmes is a fictional detective created by Arthur Conan Doyle.",
        ]);
        Book::create([
            "owner_id" => "3",
            "current_owner_id" => "3",
            "name" => "The Sign of the Four",
            "writer" => "Arthur Conan Doyle",
            "genre" => "Mystery",
            "return_date" => "2024-09-05",
            "description" => "The Sign of the Four is a detective novel by Arthur Conan Doyle featuring Sherlock Holmes.",
        ]);
        Book::create([
            "owner_id" => "3",
            "current_owner_id" => "3",
            "name" => "Lord of the Flies",
            "writer" => "William Golding",
            "img" => "books/lord_of_the_flies.jpg",
            "genre" => "Other",
            "return_date" => "2024-07-20",
            "description" => "Lord of the Flies is a novel by Nobel Prize-winning author William Golding.",
        ]);
        Book::create([
            "owner_id" => "3",
            "current_owner_id" => "4",
            "name" => "The Great Gatsby",
            "writer" => "F. Scott Fitzgerald",
            "genre" => "Mystery",
            "return_date" => "2024-10-15",
            "description" => "The Great Gatsby is a novel by F. Scott Fitzgerald.",
        ]);
        Book::create([
            "owner_id" => "4",
            "current_owner_id" => "4",
            "name" => "Catch-22",
            "writer" => "Joseph Heller",
            "genre" => "Other",
            "return_date" => "2024-06-20",
            "description" => "Catch-22 is a satirical novel by Joseph Heller.",
        ]);
        Book::create([
            "owner_id" => "5",
            "current_owner_id" => "5",
            "name" => "Adventures of Huckleberry Finn",
            "writer" => "Mark Twain",
            "genre" => "Adventure",
            "return_date" => "2024-09-05",
            "description" => "Adventures of Huckleberry Finn is a novel by Mark Twain.",
        ]);
        Book::create([
            "owner_id" => "3",
            "current_owner_id" => "3",
            "name" => "Watership Down",
            "writer" => "Richard Adams",
            "img" => "books/watership_down.jpg",
            "genre" => "Adventure",
            "return_date" => "2024-04-05",
            "description" => "Watership Down is an adventure novel by Richard Adams.",
        ]);
        Book::create([
            "owner_id" => "2",
            "current_owner_id" => "2",
            "name" => "Goldfinger",
            "writer" => "Ian Fleming",
            "img" => "books/Goldfinger.jpg",
            "genre" => "Mystery",
            "return_date" => "2024-09-18",
            "description" => "Goldfinger is the seventh novel in Ian Fleming's James Bond series.",
        ]);
        Book::create([
            "owner_id" => "3",
            "current_owner_id" => "3",
            "name" => "The Ultimate Hitchhiker's Guide",
            "writer" => "Douglas Adams",
            "img" => "books/hitchhikers_guide.jpg",
            "genre" => "Sci-Fi",
            "return_date" => "2024-06-30",
            "description" => "The Ultimate Hitchhiker's Guide to the Galaxy is a comedic science fiction series by Douglas Adams.",
        ]);
        Book::create([
            "owner_id" => "3",
            "current_owner_id" => "3",
            "name" => "Neuromancer",
            "writer" => "William Gibson",
            "img" => "books/neuromancer.jpg",
            "genre" => "Sci-Fi",
            "return_date" => "2024-03-12",
            "description" => "Neuromancer is a science fiction novel by William Gibson, known for popularizing the cyberpunk subgenre.",
        ]);
        Book::create([
            "owner_id" => "2",
            "current_owner_id" => "2",
            "name" => "Dune",
            "writer" => "Frank Herbert",
            "img" => "books/dune.jpg",
            "genre" => "Sci-Fi",
            "return_date" => "2024-11-30",
            "description" => "Dune is a science fiction novel by Frank Herbert.",
        ]);
        Book::create([
            "owner_id" => "2",
            "current_owner_id" => "2",
            "name" => "A Game of Thrones",
            "writer" => "George R.R. Martin",
            "genre" => "Fantasy",
            "return_date" => "2024-11-05",
            "description" => "A Game of Thrones is the first novel in the epic fantasy series 'A Song of Ice and Fire' by George R.R. Martin.",
        ]);
        Book::create([
            "owner_id" => "5",
            "current_owner_id" => "6",
            "name" => "Milioenen Nota",
            "writer" => "De Roverheid",
            "genre" => "Other",
            "return_date" => "2024-04-05",
            "description" => "Daar gaat je stufi amice!",
        ]);
        Book::create([
            "owner_id" => "6",
            "current_owner_id" => "6",
            "name" => "Scriptie",
            "writer" => "Koning Pils",
            "genre" => "Fantasy",
            "return_date" => "2024-04-05",
            "description" => "Ik heb een 10 en dat hoef je niet te checken vrint.",
        ]);
    }
}
