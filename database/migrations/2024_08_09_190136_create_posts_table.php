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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->text('image')->nullable();
            $table->unsignedBigInteger('like')->nullable();
            $table->boolean('is_published')->default(1);
            $table->timestamps();

            
            //add 
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};


// php artisan make:migration    add_colum_discription_to_posts_table

// php artisan migrate   залить міграцію

// php artisan migrate:rollback  відкотити міграцію

// php artisan make:migration    delete_colum_discription_to_posts_table  дробнуть міграцію