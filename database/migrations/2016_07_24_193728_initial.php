<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Initial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function ($table) {
            $table->increments('id');
            $table->string('email', 100);
            $table->string('username', 100)->nullable();
            $table->string('name', 100);
            $table->timestamps();
            $table->rememberToken();
        });

        Schema::create('user_social_account', function ($table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('provider_user_id');
            $table->string('provider');
            $table->timestamps();
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
        });
        Schema::create('messages', function ($table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('parent_id')->unsigned()->nullable();
            $table->text('content')->nullable();
            $table->boolean('its_comment')->default(false);
            $table->timestamps();
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
        });

       /* Schema::create('password_resets', function ( $table) {
            $table->string('email')->index();
            $table->string('token')->index();
            $table->timestamp('created_at');
        });*/

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('messages', function ($table) {

            $table->dropForeign('messages_user_id_foreign');
        });
        Schema::table('user_social_account', function ($table) {

            $table->dropForeign('user_social_account_user_id_foreign');
        });

        /*Schema::drop('password_resets');*/
        Schema::drop('messages');
        Schema::drop('user_social_account');
        Schema::drop('users');
    }
}
