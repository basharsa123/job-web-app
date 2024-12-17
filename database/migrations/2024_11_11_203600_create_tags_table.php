<?php

use App\Models\job_listing;
use App\Models\tag;
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
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('job_listing_tag', function (Blueprint $table) 
        {
            $table->id();
            $table->foreignIdFor(job_listing::class , 'job_listing_id')->constrained()->cascadeOnDelete();
            $table->foreignIdFor(tag::class )->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /** 
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tags');
        Schema::dropIfExists('job_listing_tag');
    }
};
