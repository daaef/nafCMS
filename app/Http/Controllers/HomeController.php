<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Home\HomeContract;
use App\Repositories\Menu\MenuContract;
use DB;
use App\Menu;

class HomeController extends Controller {
	
	protected $repo;
	protected $menuRepo;

	public function __construct(HomeContract $homeContract, MenuContract $menuContract) {
		$this->repo = $homeContract;
		$this->menuRepo = $menuContract;
	}
	
	public function index() {
		// $menus = $this->menuRepo->findall();
		$menus = Menu::with('submenus')->get();

		// $users = DB::table('users')
		// ->join('posts', 'users.id', '=', 'posts.user_id')
		// ->select('users.*', 'posts.descrption')
		// ->get();

		// $menus = DB::table('menus')
		// ->join('sub_menus', 'menus.id', '=', 'sub_menus.menu_id')
		// ->select('menus.*', 'sub_menus.*')
		// ->get();
		// dd($menus);
		return view('welcome')->with('menus', $menus);
	}
}
