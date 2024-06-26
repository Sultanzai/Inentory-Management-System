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
        Schema::create('tbl_refund', function (Blueprint $table) {
            $table->id();
            $table->integer("R_Amount");
            $table->string("R_Description");
            $table->date("R_Date");
            $table->unsignedBigInteger("Order_ID");
            $table->unsignedBigInteger("Customer_ID");
            $table->foreign('Order_ID')->references("id")->on("tbl_orders")->onDelete("cascade");
            $table->foreign('Customer_ID')->references("id")->on("tbl_customer")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_refund');
    }
};
