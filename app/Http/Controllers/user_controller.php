<?php

namespace App\Http\Controllers;

use App\User;
use App\Job;
use App\Lamaran;
use Auth;
use Session;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\ProfilRequest;
use Illuminate\Support\Facades\File;

class user_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('register');
    }

    public function lengkapi($id)
    {
        $user = user::find($id);
        return view('lengkapi_data')->with('user', $user);
    }
    public function profil_user()
    {
        $userr = User::find(Auth::user()->id);
        return view('user.profil_user')->with('userr', $userr);
        
    }
    public function lamaran_user()
    {
        // $hasil = lamaran::with('jobs')->where('id_user',Auth::user()->id)->get();
        // return view('user.lamaran_user',['hasil'=>$hasil]);

        $users = User::find(Auth::user()->id)->jobs()->get();
        return view('user.lamaran_user',['users'=>$users]);
    }

    public function regis_berhasil()
    {
        return view('regis_berhasil');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id); 
        return view('lengkapi_data')->with('user', $user);
    }

    public function edit_profil()
    {
        $user = User::find(Auth::User()->id); 
        return view('user.edit_profil')->with('user', $user);
    }

    public function update_profil(ProfilRequest $request, $id)
    {
        
        $user = User::where('id',$id)->first();

        $user->name = $request->name;
        $user->email = $request->email; 
        $user->birth = $request->birth;
        $user->no_ktp = $request->no_ktp;
        $user->address = $request->address;

        $user->save();

        if($request->hasFile('cv')){
            $cv = $request->file('cv');
            $destination_path = "uploads/";
            $filename = str_random(6).'_'.$cv->getClientOriginalName();
            if(!$cv->move($destination_path, $filename)){
                return 'error moving file';
            }
            File::delete(public_path($user->cv));
            $user->cv = $destination_path.$filename;
            $user->save();
            Session::flash("notice", "Profil success updated"); 
            return redirect()->route("profil_user");
        }
        // User::find($id)->update($request->all()); 
        Session::flash("notice", "Profil success updated"); 
        return redirect()->route("profil_user");
    
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RegisterRequest $request, $id)
    {

        $user = User::where('id',$id)->first();

        $user->address = $request->address;
        $user->no_ktp = $request->no_ktp;
        $user->save();

        $cv = $request->file('cv'); 
        $destination_path = 'uploads/'; 
        $filename = str_random(6).'_'.$cv->getClientOriginalName();
        $cv->move($destination_path, $filename);
        
        $user->cv = $destination_path. $filename;
        $user->save();

        // User::find($id)->update($request->all()); 
        Session::flash("notice", "Profile success updated"); 
        return redirect()->route("job.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
         Session::flash("notice", "User Success Deleted");
          return redirect()->route("list_user");
    }
}
