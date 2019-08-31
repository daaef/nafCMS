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
		// $menus = Menu::with('submenus')->get();
		// $posts = $this->newsRepo->findAll();
		// // dd($posts);
		// $latest = MyNews::orderBy('created_at', 'desc')->first();
		// return view('welcome')->with('menus', $menus)->with('posts', $posts)->with('latest', $latest);
		return view('welcome');
	}

	public function history(){
		return view('history');
	}

	public function leadership(){
		return view('leadership');
	}


}
