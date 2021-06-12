<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->text('address');
            $table->string('mobile');
            $table->string('office');
            $table->string('email');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('linkedin');
            $table->string('google_plus');
            $table->timestamps();
        });

        DB::table('settings')->insert([
            'address' => 'test address',
            'mobile'=> '+3129595959',
            'office'=> '+3129234425235',
            'email'=> 'admin@admin.com',
            'facebook'=> 'facebook.com',
            'twitter'=>'twitter.com',
            'linkedin'=> 'twitter.com',
            'google_plus'=> 'google_plus.com',

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
