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
        Schema::create('dosens', function (Blueprint $table) {
            $table->id();
            $table->char('nip', 8)->unique();
            $table->string('nama', 50);
            $table->char('jenis_kelamin', 1);
            $table->date('tanggal_lahir');
            $table->string('email')->unique();
            $table->string('telepon', 15)->nullable();
            $table->string('jurusan');
            $table->string('jabatan');
            $table->string('pendidikan');
            $table->text('alamat')->nullable();
            $table->enum('status', ['aktif', 'nonaktif']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dosens');
    }
};
