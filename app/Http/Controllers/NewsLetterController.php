<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\NewsLetter\NewsLetterContract;
use Sentinel;

class NewsLetterController extends Controller {

	protected $repo;
	public function __construct(NewsLetterContract $newsLetterContract) {
		$this->repo = $newsLetterContract;
	}
	
	public function index()
	{
		//
	}
	
	public function create() {
		
	}
	
	public function store(Request $request) {
		if(!Sentinel::check()){
			return redirect()->route('auth.login.get');
		}
		else{
			$this->validate($request, [
				'email' => 'required',
			]);
	
			try {
				$user = $this->repo->create($request);
	
				$notification = array(
					'message' => "You have successfully subscribed to our News Letter",
					'alert-type' => 'success'
				);		
	
				if($user->id) {
					return redirect()->back()->with($notification);
				} else {
					return back()->withInput()->with('error', 'Could not subscribe. Try again!');
				}
			} catch (QueryException $e) {
				
				$error = array(
					'message' => "Email $request->email already exists!",
					'alert-type' => 'error'
				);
	
				$errorCode = $e->errorInfo[1];
				if($errorCode == 1062){
					return redirect()->back()->withInput()->with($error);
				}
			}
		}
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
