<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title');// title ->string
            $table->text('description'); //description -> text
            $table->text('image');//thumb -> string
            $table->decimal('price',6,2);//price -> decimal
            $table->string('series');//series -> string
            $table->date('date');//sale_date -> date
            $table->string('type');//type ->string
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
        Schema::dropIfExists('comics');
    }
};
