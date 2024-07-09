<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::unprepared('
        CREATE TRIGGER set_tanggal_kembali BEFORE INSERT ON transaction_loans
        FOR EACH ROW
        BEGIN
            SET NEW.tanggal_kembali = DATE_ADD(NEW.tanggal_pinjam, INTERVAL 3 DAY);
        END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP TRIGGER IF EXISTS set_tanggal_kembali');
    }
};
