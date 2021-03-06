<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePendaftaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
	public function up()
	{
		Schema::create('pendaftarans', function(Blueprint $table) {
			$table->increments('id');
			$table->string('user_id');
			$table->integer('kegiatan_id');
			$table->dateTime('tanggal_pendaftaran')->nullable();
			$table->string('sekolah_id')->nullable();
			$table->string('nomor_un')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
	public function down()
	{
		Schema::drop('pendaftarans');
	}
}
