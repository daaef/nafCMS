<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Repositories\News\NewsContract;

class NewsController extends Controller
{
    protected $repo;
    public function __construct(NewsContract $NewsContract) {
		$this->repo = $NewsContract;
    }

    public function index() {
        $news = $this->repo->findAll();
        return view('news.index')->with('news', $news);
    }
}
