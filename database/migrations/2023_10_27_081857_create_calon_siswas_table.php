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
        Schema::create('calon_siswas', function (Blueprint $table) {
            $table->id()->comment("no pendaftaran");
            $table->string("nama");
            $table->string("alamat");
            $table->date("tgl_lahir");
            $table->char("jenis_kelamin");
            $table->string("asal_sekolah");
            $table->integer("agama_id")->comment("1=islam, 2=protestan, 3=katholik");
            $table->decimal("nilai_ind", 8, 2)->comment("bahasa indonesia");
            $table->decimal("nilai_ipa", 8, 2)->comment("ipa");
            $table->decimal("nilai_mtk", 8, 2)->comment("bahasa matika");
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
        Schema::dropIfExists('calon_siswas');
    }
};
