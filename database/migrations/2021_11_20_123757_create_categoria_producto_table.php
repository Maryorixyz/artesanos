<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriaProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria_producto', function (Blueprint $table) {

            $table->foreignId('categoria_id') 
                ->constrained('categorias')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreignId('producto_id') 
                ->constrained('productos')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->primary(['categoria_id', 'producto_id']);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categoria_producto');
    }
}
