<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoliciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('policies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->integer('branch');
            $table->string('policy');
            $table->string('document_ref')->nullable();
            $table->integer('agent')->nullable();
            $table->integer('product_id')->nullable();
            $table->string('premium')->nullable();
            $table->string('approved')->nullable();
            $table->string('approval_id')->nullable();
            $table->boolean('paid')->default(false);
            $table->boolean('approved_by')->nullable();
            $table->dateTime('approval_date')->nullable();
            $table->dateTime('eff_time')->nullable();
            $table->dateTime('eff_date')->nullable();
            $table->dateTime('exp_date')->nullable();
            $table->boolean('active')->default(true);
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
        Schema::dropIfExists('policies');
    }
}
