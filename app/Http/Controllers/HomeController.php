<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Home\HomeContract;
use App\Repositories\Menu\MenuContract;
use App\Repositories\News\NewsContract;
use App\Repositories\Leadership\LeadershipContract;
use App\Repositories\Cas\CasContract;

use DB;
use App\Menu;
use App\MyNews;
use App\Mission;
use App\Vision;

class HomeController extends Controller {
	
	protected $repo;
	protected $menuRepo;
	protected $newsRepo;
	protected $casRepo;
	protected $leadershipRepo;

	public function __construct(
		HomeContract $homeContract, 
		MenuContract $menuContract,
		NewsContract $newsContract,
		LeadershipContract $leadershipContract, 
		CasContract $casContract
	) {
		$this->repo = $homeContract;
		$this->menuRepo = $menuContract;
		$this->newsRepo = $newsContract;
		$this->casRepo = $casContract;
		$this->leadershipRepo = $leadershipContract;
	}
	
	public function index() {
		$posts = MyNews::orderBy('id', 'desc')->take(2)->get();
		$latest = MyNews::orderBy('id', 'desc')->first();
		$mission = Mission::where('id', 1)->first();
		$vision = Vision::where('id', 1)->first();
		return view('welcome')->with('posts', $posts)->with('latest', $latest)->with('mission', $mission)->with('vision', $vision);
	}

	public function history(){
		return view('history');
	}

	public function leadership(){
		$leaders = $this->leadershipRepo->findAll();
    $cases = $this->casRepo->findAll();
		return view('leadership')->with('leaders', $leaders)->with('cases', $cases);
	}

	public function career(){
		return view('career');
	}

	public function news(){
		$news = $this->newsRepo->findAll();
		return view('news')->with('news', $news);
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
		$mission = Mission::where('id', 1)->first();
		$vision = Vision::where('id', 1)->first();
		return view('mission_vision')->with('mission', $mission)->with('vision', $vision);
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

	public function apply() {
		return view('applynow');
	}

	public function dssc() {
		return view('dssc');
	}

}
