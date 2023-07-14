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
        Schema::table('users', function (Blueprint $table) {
            $table->integer('rc')->nullable()->after('email');
            $table->string('patent')->nullable()->after('email');
            $table->integer('tel_sté')->nullable()->after('email');
            $table->string('role')->default('client')->after('password');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('rc');
            $table->dropColumn('patent');
            $table->dropColumn('tel_sté');
            $table->dropColumn('role');
        });
    }
};
