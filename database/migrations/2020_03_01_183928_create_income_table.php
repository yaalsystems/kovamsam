<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomeTable extends Migration
{
     
    public function up()
    {
        
        Schema::create('income', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100)->unique();         
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('income');
    }
}
