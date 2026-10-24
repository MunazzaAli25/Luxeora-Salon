<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * This migration fixes schema drift between the original migrations
     * and what the Admin blade views / controllers actually expect
     * (clients, staff, services, appointments).
     */
    public function up(): void
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->string('first_name')->nullable()->after('id');
            $table->string('last_name')->nullable()->after('first_name');
            $table->date('date_of_birth')->nullable()->after('address');
            $table->text('notes')->nullable()->after('date_of_birth');
            $table->foreignId('preferred_stylist_id')->nullable()->after('notes')
                ->constrained('staff')->nullOnDelete();

            $table->string('name')->nullable()->change();
            $table->string('phone')->nullable()->change();
        });

        Schema::table('staff', function (Blueprint $table) {
            $table->string('status')->default('active')->after('commission_rate');
        });

        Schema::table('services', function (Blueprint $table) {
            $table->string('gender')->nullable()->change();
        });

        Schema::table('appointments', function (Blueprint $table) {
            $table->dateTime('start_time')->nullable()->after('staff_id');
            $table->text('notes')->nullable()->after('status');

            $table->string('appointment_date')->nullable()->change();
            $table->string('appointment_time')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('appointments', function (Blueprint $table) {
            $table->dropColumn(['start_time', 'notes']);
        });

        Schema::table('clients', function (Blueprint $table) {
            $table->dropConstrainedForeignId('preferred_stylist_id');
            $table->dropColumn(['first_name', 'last_name', 'date_of_birth', 'notes']);
        });

        Schema::table('staff', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
