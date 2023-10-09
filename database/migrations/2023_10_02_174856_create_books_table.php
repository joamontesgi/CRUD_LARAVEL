<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->unsignedBigInteger("author_id")->comment("ID del autor");
            $table->foreign("author_id")->references("id")->on("authors");
            $table->string("name")->comment("Nombre del libro");
            $table->string("editorial")->comment("Editorial del libro");
            $table->string("edition")->comment("Edición del libro");
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
        Schema::dropIfExists('books');
    }
}
