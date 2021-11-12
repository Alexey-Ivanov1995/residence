<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamps();
        });

        $data = [
                    [
                        'title' => 'One-bedroom',
                    ],
                    [
                        'title' => 'Two-bedroom',
                    ],
                    [
                        'title' => 'Three-bedroom',
                    ],
                ];

        foreach ($data as $single){
            \App\Models\Apartment::create($single);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apartments');
    }
}
