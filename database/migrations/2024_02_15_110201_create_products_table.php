<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /** Run the migrations.*/
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            //Category ID
            $table->foreignId('category_id')->constrained('categories');
            //name
            $table->string('name');
            //Description
            $table->text('description')->nullable();
            //Image
            $table->string('image')->nullable();
            //Price
            $table->decimal('price', 10, 2);
            //Stock
            $table->integer('stock');
            //status
            $table->boolean('status')->default(1);
            //IsFavorite
            $table->boolean('is_favorite')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
