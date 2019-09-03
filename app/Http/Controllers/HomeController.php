<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Home\HomeContract;
use App\Repositories\Menu\MenuContract;
use App\Repositories\News\NewsContract;
use DB;
use App\Menu;
use App\MyNews;

class HomeController extends Controller {
	
	protected $repo;
	protected $menuRepo;
	protected $newsRepo;

	public function __construct(
		HomeContract $homeContract, 
		MenuContract $menuContract,
		NewsContract $newsContract
	) {
		$this->repo = $homeContract;
		$this->menuRepo = $menuContract;
		$this->newsRepo = $newsContract;
	}
	
	public function index() {
		$posts = MyNews::orderBy('id', 'desc')->take(2)->get();
		$latest = MyNews::orderBy('id', 'desc')->first();
		return view('welcome')->with('posts', $posts)->with('latest', $latest);
		// return view('welcome');
	}

	public function history(){
		return view('history');
	}

	public function leadership(){
		return view('leadership');
	}

	public function career(){
		return view('career');
	}

	public function news(){
		return view('news');
	}

	public function newsDetails(){
		return view('news-detail');
	}

	public function commanders(){
		return view('commanders');
	}

	public function gallery(){
		return view('gallery');
	}

	public function missionVision(){
		return view('mission_vision');
	}

	public function organization(){
		return view('organization');
	}

	public function downloads(){
		return view('downloads');
	}

	public function videos(){
		return view('videos');
	}



}
