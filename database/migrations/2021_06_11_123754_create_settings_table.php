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
            $table->text('address')->nullable();
            $table->string('mobile')->nullable();
            $table->string('office')->nullable();
            $table->string('email')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('google_plus')->nullable();
            $table->string('do_ghazal')->nullable();
            $table->string('happy_cow_cheese')->nullable();
            $table->string('dutso')->nullable();
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
