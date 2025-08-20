<?php

use App\Models\Address;
use App\Models\Category;
use App\Models\City;
use App\Models\Country;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('housings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->integer('price');
            // $table->integer('currency');
            $table->integer('number_rooms')->nullable();
            $table->integer('number_salons')->nullable();
            $table->integer('number_toilets')->nullable();
            $table->integer('number_kitchens')->nullable();
            $table->enum('status', ['available', 'unavailable', 'reserve'])->default('available');
            $table->string('image');
            $table->foreignIdFor(Category::class)->nullable()->constrained()->cascadeOnDelete();
            $table->foreignIdFor(User::class)->nullable()->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Address::class)->nullable()->constrained()->cascadeOnDelete();
            $table->foreignIdFor(City::class)->nullable()->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Country::class)->nullable()->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('housings');
        Schema::dropForeignIdFor(Category::class);
        Schema::dropForeignIdFor(User::class);
        Schema::dropForeignIdFor(Address::class);
        Schema::dropForeignIdFor(City::class);
        Schema::dropForeignIdFor(Country::class);
    }
};
