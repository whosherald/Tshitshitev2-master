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
        // Schema::dropIfExists('sales_representative');
        // Schema::table('sales_representative', function (Blueprint $table) {
        //     // $table->increments("sales_rep_id");
        //     // $table->string("sales_rep_code");
        //     // $table->string("name");
        //     // $table->string("branch_name");
        //     // $table->string("email");
        //     // $table->integer("policy_number");
        //     // $table->integer("agent_number");
        //     // $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
