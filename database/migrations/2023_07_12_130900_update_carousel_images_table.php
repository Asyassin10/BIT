<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCarouselImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('carousel_images', function (Blueprint $table) {
            //
            $table->string("carousel_title");
            $table->string("carousel_desc");
            $table->string("carousel_footer");
            $table->string("carousel_footer_link");
            $table->string("carousel_image_logo_fullname_webp");
            $table->string("carousel_image_logo_fullname");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('carousel_images', function (Blueprint $table) {
            //
        });
    }
}
