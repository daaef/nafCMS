<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up(){
		Schema::create('menus', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('slug')->unique();
			$table->string('name');
			$table->integer('page_score')->default(0);
			
			$table->timestamps();
			// $table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('menus');
		Schema::table('menus', function (Blueprint $table) {
			$table->dropSoftDeletes();
		});
	}
}
