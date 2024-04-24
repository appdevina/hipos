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
        Schema::create('m_users', function (Blueprint $table) {
            $table->id();
            $table->string('nik')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->foreignId('role_id')->nullable();
            $table->foreignId('division_id')->nullable();
            $table->integer('manager_id')->nullable();
            $table->string('profile_picture')->nullable();
            $table->string('address')->nullable();
            $table->rememberToken();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->timestamps();
            $table->datetime('last_login')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_users');
    }
};
