<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Repositories\NewsCategory\NewsCategoryContract;

class NewsCategoryController extends Controller
{
    protected $repo;
    public function __construct(NewsCategoryContract $NewsCategoryContract) {
		$this->repo = $NewsCategoryContract;
    }
    
    public function create() {
		return view('news_category.create');
	}
}
