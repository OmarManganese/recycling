<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\RecyclingMaterial;

class CreateRecyclingMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recycling_materials', function (Blueprint $table) {
            $table->id();
            $table->string('material');
        });

        $materials = [
            'Organic',
            'Plastic',
            'Paper',
            'Glass'
        ];

        $materialsInTable = 
            array_map(
                function($material){
                    return ['material' => $material];
                }, 
                $materials
            );

        RecyclingMaterial::insert($materialsInTable);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recycling_materials');
    }
}
