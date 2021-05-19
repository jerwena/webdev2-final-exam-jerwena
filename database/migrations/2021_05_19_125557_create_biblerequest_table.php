<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiblerequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biblerequest', function (Blueprint $bstable) {
            $bstable->id();
            $bstable->timestamps();
            $bstable->string('complete_name');
            $bstable->string('email_address');
            $bstable->string('contact_number');
            $bstable->date('birthdate');
            $bstable->string('religous_affiliation');
            $bstable->date('bible_study_date');
            $bstable->time('bible_study_time');
            $bstable->string('bible_study_address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biblerequest');
    }
}
