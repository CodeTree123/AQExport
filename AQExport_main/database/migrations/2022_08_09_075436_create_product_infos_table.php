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
        Schema::create('product_infos', function (Blueprint $table) {
            $table->id();
            $table->string('buyer_id')->nullable();
            $table->string('order_no')->nullable();
            $table->string('style')->nullable();
            $table->string('mail_p_ids')->nullable();
            $table->string('product_name')->nullable();
            $table->string('image')->nullable();
            $table->string('po_issue_date')->nullable();
            $table->string('shipment_date')->nullable();
            $table->string('febric_details')->nullable();
            $table->string('gsm')->nullable();
            $table->string('description')->nullable();
            $table->string('size')->nullable();
            $table->string('quantity')->nullable();
            $table->string('factory_name')->nullable();
            $table->string('random')->nullable();
            $table->boolean('status')->default(0);


            $table->string('plannig_lab')->nullable();
            $table->string('lab_received')->nullable();
            $table->string('color_way')->nullable();
            $table->string('print_stricke_offs')->nullable();
            $table->string('comments_received')->nullable();

            $table->string('style_approval')->nullable();
            $table->string('style_comments')->nullable();
            $table->string('plannig_sample')->nullable();
            $table->string('sample_received')->nullable();
            $table->string('pp_sample')->nullable();
            $table->string('pp_comments')->nullable();
            $table->string('production_sample')->nullable();
            $table->string('production_comments')->nullable();
            
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
        Schema::dropIfExists('product_infos');
    }
};
