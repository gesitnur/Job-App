<?php

namespace App\Http\Controllers;

use DB;
use App\lamaran;
use App\Job;
use App\User;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Taggable;
use contains;
use Illuminate\Database\Query\Builder;

class LamaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $id=$request->id;
        // $a = DB::table('lamarans')->where(array(['id_jobs','9'],['id_user',Auth::user()->id]));
        // if($a == null){
        //     Lamaran::create($request->all()); 
        //    Session::flash("notice", "Article success created");
        //    return redirect()->route("job.index");
        // }else{
        //     Session::flash("error","anda sudan melamar di pekerjaan ini");
        //     return redirect()->route("job.index");
            
        // }
        // $hasil = lamaran::where('status','unread')->get();
            // $id='10';
        // $job = Lamaran::where('id',$request->id)->get();
        $job = Job::find(1);
        $user = User::find(Auth::User()->id);

        if(!$job->users->contains($user)){
            $job->users()->attach(Auth::User()->id);
// DB::table('lamarans')->where(array(['job_id',6],['user_id',Auth::user()->id]))->update(['status' => 'unread']);
            // Lamaran::create($request->all()); 
           Session::flash("notice", "Lamaran success created");
           return redirect()->route("job.index");
        }else {
            Session::flash("error", "Anda sudah mengirim lamaran ke pekerjaan ini");
            return redirect()->route("job.index");
        }
        }

    public function apply_job($id)
    {
        $job = Job::find($id);
        $user = User::find(Auth::User()->id);
        if($user->address == null OR $user->no_ktp == null OR $user->cv == null){
            Session::flash("error", "Harap Lengkapi Data Untuk Melamar");
            return redirect()->route("job.index");
        }


        elseif(!$job->users->contains($user)){
            $job->users()->attach(Auth::User()->id);
    Session::flash("notice", "Lamaran success created");
           return redirect()->route("job.index");
        }else {
            Session::flash("error", "Anda sudah mengirim lamaran ke pekerjaan ini");
            return redirect()->route("job.index");
        }    
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\lamaran  $lamaran
     * @return \Illuminate\Http\Response
     */
    public function show(lamaran $lamaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\lamaran  $lamaran
     * @return \Illuminate\Http\Response
     */
    public function edit(lamaran $lamaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lamaran  $lamaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        lamaran::find($id)->update($request->all()); 
        Session::flash("notice", "lamaran success updated"); 
        return redirect()->route("admin-home");
    }

    public function apply($id)
    {
        $lamaran = lamaran::find($id);
        return view('admin.apply')->with('lamaran', $lamaran);
        
    }
    public function reject($id)
    {
        $lamaran = lamaran::find($id);
        return view('admin.reject')->with('lamaran', $lamaran);
        
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lamaran  $lamaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(lamaran $lamaran)
    {
        //
    }
}
