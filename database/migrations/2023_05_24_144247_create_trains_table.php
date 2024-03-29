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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('holding_name', 200);
            $table->string('departure_station', 200);
            $table->string('arrival_station', 200);
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->smallInteger('number_carriages')->unsigned(); // il campo può contenere solo valori positivi
            $table->boolean('train_on_time');
            $table->integer('delay')->default(0)->unsigned(); // default(0) indica che se non viene specificato alcun valore per delay durante l'inserimento di una nuova riga nella tabella, il valore predefinito sarà 0
            $table->boolean('cancelled_train');
            $table->string('train_type', 200);
            $table->decimal('price', 8, 2);
            $table->unsignedInteger('seats');
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
        Schema::dropIfExists('trains');
    }
};
