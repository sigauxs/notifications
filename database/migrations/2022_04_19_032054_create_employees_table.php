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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('identification_type_id');
            $table->integer('identification');
            $table->string('first_name');
            $table->string('last_name');
            $table->decimal('salary')->default(0);
            $table->unsignedBigInteger('center_cost_id');
            $table->boolean('status')->default(1);
            $table->timestamps();

            $table->foreign('identification_type_id')
                   ->references('id')->on('identification_types');

            $table->foreign('center_cost_id')
            ->references('id')->on('center_costs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
