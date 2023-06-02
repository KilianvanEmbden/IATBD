<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('owner_id')->unsigned();
            $table->bigInteger('current_owner_id')->unsigned()->nullable();
            $table->string('name');
            $table->string('writer');
            $table->string('img')->default('books/empty_book_img.jpg');
            $table->string('genre')->default('Other');
            $table->date('return_date')->default(Carbon::now()->addMonth());
            $table->longText('description');


            $table->foreign('owner_id')->references('id')->on('users');
            $table->foreign('current_owner_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
