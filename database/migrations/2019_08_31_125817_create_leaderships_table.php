<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeadershipsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('leaderships', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('name');
			$table->string('rank');
			$table->string('slug');
			$table->text('bio');
			$table->string('profile_image');

			$table->biginteger('cas_id')->unsigned();
			// $table->foreign('cas_id')->refernces('id')->on('cas');

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
		Schema::dropIfExists('leaderships');
	}
}
