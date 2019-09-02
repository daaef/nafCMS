<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Dashboard\DashboardContract;
use App\Repositories\User\UserContract;
use App\Repositories\News\NewsContract;

use Sentinel;

class DashboardController extends Controller {

	protected $repo;
	protected $userRepo;
	protected $newRepo;

	public function __construct(
		DashboardContract $dashboardContract, 
		UserContract $userContract,
		NewsContract $newsContract
	) {
		$this->repo = $dashboardContract;
		$this->userRepo = $userContract;
		$this->newRepo = $newsContract;
	}
	
	public function index() {
		if(!Sentinel::check()){
			return redirect()->route('auth.login.get');
		}
		else{
			$users = $this->userRepo->findAll();
			$news = $this->newRepo->findAll();
			// dd($users);
			return view('dashboard.index')->with('users', $users)->with('news', $news);
		}
	}
	
	public function create()
	{
		//
	}
	
	public function store(Request $request)
	{
		//
	}
	
	public function show($id)
	{
		//
	}
	
	public function edit($id)
	{
		//
	}
	
	public function update(Request $request, $id)
	{
		//
	}
	
	public function delete($id)
	{
		//
	}
}
