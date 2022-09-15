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
        Schema::create('product_others_infos', function (Blueprint $table) {
            $table->id();

            $table->string('proid')->nullable();
            $table->string('accessories_planning')->nullable();
            $table->string('main_label')->nullable();
            $table->string('care_label')->nullable();
            $table->string('size_label')->nullable();
            $table->string('flag_label')->nullable();
            $table->string('patch_label')->nullable();
            $table->string('hang_tag')->nullable();
            $table->string('hang_tag_string')->nullable();
            $table->string('draw_string')->nullable();
            $table->string('eyelet')->nullable();
            $table->string('elastic')->nullable();
            $table->string('zipper')->nullable();
            $table->string('poly')->nullable();
            $table->string('gum_tape')->nullable();
            $table->string('carton')->nullable();
            $table->string('others')->nullable();

            $table->string('yarn_planning')->nullable();
            $table->string('yarn_start')->nullable();
            $table->string('yarn_finish')->nullable();
            $table->string('knitting_planning')->nullable();
            $table->string('knitting_start')->nullable();
            $table->string('knitting_finish')->nullable();
            $table->string('dyeing_planning')->nullable();
            $table->string('dyeing_start')->nullable();
            $table->string('dyeing_finish')->nullable();
            $table->string('deliver_cutting_planning')->nullable();
            $table->string('deliver_cutting_received')->nullable();

            $table->string('cutting_planning')->nullable();
            $table->string('cutting_start')->nullable();
            $table->string('cutting_finish')->nullable();
            $table->string('printing_start')->nullable();
            $table->string('printing_finish')->nullable();
            $table->string('sewing_planning')->nullable();
            $table->string('sewing_start')->nullable();
            $table->string('sewing_finish')->nullable();
            $table->string('finishing_start')->nullable();
            $table->string('finishing_finish')->nullable();
            $table->string('shipment_planning')->nullable();
            $table->string('shipment_start')->nullable();
            $table->string('shipment_finish')->nullable();
            $table->string('remarks')->nullable();

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
        Schema::dropIfExists('product_others_infos');
    }
};
