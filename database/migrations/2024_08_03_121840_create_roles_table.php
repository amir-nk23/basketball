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
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        \App\Models\Role::query()->create([

            'name'=>'مدیر فنی'

        ]);

        \App\Models\Role::query()->create([

            'name'=>'سرپرست'

        ]);

        \App\Models\Role::query()->create([

            'name'=>'سرمربی'

        ]);

        \App\Models\Role::query()->create([

            'name'=>'مربی'

        ]);

        \App\Models\Role::query()->create([

            'name'=>'انالیزور'

        ]);

        \App\Models\Role::query()->create([

            'name'=>'بدنساز'

        ]);

        \App\Models\Role::query()->create([

            'name'=>'تدارکات'

        ]);

        \App\Models\Role::query()->create([

            'name'=>'بازیکن'

        ]);

    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
