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
        // membuat ada kolom apa saja dalam 1 row
        Schema::create('karyawans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('address');
            $table->enum('job_position', [
                'Golongan IA',
                'Golongan IB',
                'Golongan IC',
                'Golongan ID',
                'Golongan IIA',
                'Golongan IIB',
                'Golongan IIC',
                'Golongan IID',
                'Golongan IIIA',
                'Golongan IIIB',
                'Golongan IIIC',
                'Golongan IIID',
                'Golongan IVA',
                'Golongan IVB',
                'Golongan IVC',
                'Golongan IVD',
                'Golongan IVE'
            ]);
            $table->enum('gender', [
                'male',
                'female',
                'other'
            ]);
            $table->date('join_date');
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
        Schema::dropIfExists('karyawans');
    }
};
