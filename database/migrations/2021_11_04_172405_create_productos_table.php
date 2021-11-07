<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();

            $table->string('nombre')->nullable(); // Mascara de Negrito
            $table->string('descripcion')->nullable(); // Mascara ancha con bordados
            $table->string('medidas')->nullable();
            $table->decimal('precio', 12,2)->default(0)->nullable(); // 80.52
            $table->bigInteger('stock')->default(0); // 10 


            $table->string('colores')->nullable(); //! agregar tabla para relacionar 


            $table->unsignedBigInteger('user_id')->nullable(); // 10 


            
            $table->foreign('user_id') //  campo en la tabla actual (de la tabla productos)
                ->references('id') // campo con el que se relaciona (de la tabla user)
                ->on('users') // tabla con la cual se realaciona
                ->onUpdate('cascade')  // Quitar mas adelante
                ->onDelete('cascade'); // Quitar mas adelante


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
        Schema::dropIfExists('productos');
    }
}
