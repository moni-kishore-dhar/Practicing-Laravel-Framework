<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('author_book', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('book_id');
            $table->unsignedBigInteger('author_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('author_book');
    }
}





//Command to create:
//php artisan make:migration create_author_book_table







/*


In Many-to-Many relation between two tables, we need to create a migration. This migration will track the relation between two tables/models.

The name of this migration need to be: 
Two tables need to arrange in alphabetical order. And those tables have to be in their singular form.

Migration Name:  <The singular form of the Table1 Name>_<The singular form of the Table2 Name>



The columns name of this migration need to be :

Column 1:  <The singular form of the Table1 Name>_id
Column 2:  <The singular form of the Table2 Name>_id



*/