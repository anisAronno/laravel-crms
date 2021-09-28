<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubsubcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subsubcategories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cat_id');
            $table->foreign('cat_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');
            $table->unsignedBigInteger('subcat_id');
            $table->foreign('subcat_id')
                ->references('id')
                ->on('subcategories')
                ->onDelete('cascade');
            $table->string('name',250)->nullable();
            $table->string('slug',250)->nullable();
            $table->text('details')->nullable();
            $table->string('seotitle',200)->nullable();
            $table->string('keywords',250)->nullable();
            $table->string('thumb',250)->nullable();
            $table->string('banner',250)->nullable();
            $table->integer('sequence')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->timestamps();
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
        Schema::dropIfExists('subsubcategories');
    }
}
