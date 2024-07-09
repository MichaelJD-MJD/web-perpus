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
            CREATE TRIGGER set_denda BEFORE INSERT ON transaction_returns
            FOR EACH ROW
            BEGIN   
                DECLARE loan_date DATE;

                SELECT tanggal_kembali INTO loan_date
                FROM transaction_loans
                WHERE id = NEW.id_peminjaman;

                IF NEW.tanggal_pengembalian > loan_date THEN
                    SET NEW.denda = DATEDIFF(NEW.tanggal_pengembalian, loan_date) * 2000;
                ELSE
                    SET NEW.denda = 0;
                END IF;
            END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP TRIGGER IF EXISTS set_denda');
    }
};
