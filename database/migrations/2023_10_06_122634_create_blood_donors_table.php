<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blood_donors', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('first_name');
            $table->string('last_name');
            $table->date('birthday');
            $table->enum('gender',['Male','Female']);
            $table->integer('body_weight');
            $table->string('email');
            $table->string('address');
            $table->string('country');
            $table->string('city');
            $table->bigInteger('contact');
            $table->enum('voluntary_group',['A+','A-','B+','B-','AB+','AB-','O+','O-']);
            $table->enum('new_donor',['Yes','No']);
            $table->boolean('status')->default(true);
            $table->text('donor_image');


            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blood_donors');
    }
};
