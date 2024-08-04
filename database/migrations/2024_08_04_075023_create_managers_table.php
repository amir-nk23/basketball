<?php

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
        Schema::create('managers', function (Blueprint $table) {
            $table->id();
            $table->string('fullname')->unique();
            $table->string('national_code')->unique();
            $table->string('mobile');
            $table->string('team_name');
            $table->string('password');
            $table->timestamps();
        });

        \App\Models\Manager::query()->create([

            'fullname'=>'امیرحسین',
            'national_code'=>'4580458648',
            'mobile'=>'0395439774',
            'team_name'=>'شاهین',
            'password'=>bcrypt('123456')


        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('managers');
    }
};
