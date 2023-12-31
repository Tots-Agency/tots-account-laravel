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
        Schema::create('tots_account', function (Blueprint $table) {
            $table->id();
            $table->string('title', 150);
            $table->text('caption')->nullable(true);
            $table->tinyInteger('status')->nullable(false)->default(0)->comment('0 = Inactive, 1 = Active, 2 = Deleted, 3 = Non-Payment');
            $table->timestamps();

            $table->index('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tots_account');
    }
};
