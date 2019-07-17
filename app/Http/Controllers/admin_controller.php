<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use App\job;
use Session;
use App\lamaran;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests\JobRequest ;

class admin_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
     {
          $this->middleware('auth'); 
          $this->middleware('role:admin');
         }
    public function index()
    {
        // $users = User::find(Auth::user()->id)->jobs()->get();
    // return view('user.lamaran_user',['users'=>$users]);
    
    // $hasil = User::with('jobs')->get();
    // return view('admin.index_admin',['hasil'=>$hasil]);

        $hasil = lamaran::where('status','unread')->paginate(5);
        // $hasil = User::with('jobs')->paginate(5);

        // $hasil = User::with('jobs')->paginate(5);
        // $hasil = User::has('jobs')->with('jobs')->get();
        
        return view('admin.index_admin',['hasil'=>$hasil]);
    
    }

    public function indexx(){
        $hasil = User::with('roles')->get();
        return view('admin.list_user',['liat'=>$hasil]);
   }


    public function list_user()
    {
        return view('admin.list_user');
    }

    public function master()
    {
        return view('layout.master');
    }
    public function list_job()
    {
        $hasil = job::paginate(5);
        return view('admin.list_job',['hasil'=>$hasil]);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create_job');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobRequest $request)
    {
        job::create($request->all()); 
        Session::flash("notice", "Job success created"); 
        return redirect()->route("list_job");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_user)
    {
        $userr = User::find($id_user);
        return view('admin.detail_user')->with('userr', $userr);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job = Job::find($id); 
        return view('admin.edit_job')->with('job', $job);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(JobRequest $request, $id)
    {
        Job::find($id)->update($request->all()); 
        Session::flash("notice", "Job success updated"); 
        return redirect()->route("list_job");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        job::destroy($id);
         Session::flash("notice", "Job Success Deleted");
          return redirect()->route("list_job");
    }
}
