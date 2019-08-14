<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('pages', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('name');
			$table->text('description')->nullable();
			$table->text('page_content')->nullable();
			$table->text('feature_image')->nullable();
			$table->string('banner_image')->nullable();
			$table->text('banner_text')->nullable();
			$table->text('banner_description')->nullable();
			$table->string('slug')->unique();

			$table->bigInteger('page_type_id')->nullable()->unsigned();
			$table->foreign('page_type_id')->references('id')->on('page_types');
			
			$table->integer('user_id')->nullable()->unsigned();
			$table->foreign('user_id')->references('id')->on('users');

			$table->enum('published',['No', 'Yes', 'Draft'])->default('No');
			$table->integer('page_score')->default(0);

			$table->bigInteger('menu_id')->unsigned()->nullable();
      $table->foreign('menu_id')->references('id')->on('menus');       

			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('pages');

		Schema::table('pages', function (Blueprint $table) {
			$table->dropSoftDeletes();
		});
	}

}
