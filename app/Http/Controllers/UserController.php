<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\SympRequest;
use Illuminate\Http\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

use App\User;

class UserController extends Controller
{
    // public function uploadUserAvatar(Request $request)      
    // {  
    //     dd(User::uploadAvatar($request->image));

    //     if($request->hasfile('image')) :
    //         User::uploadAvatar($request->image);

    //         return redirect()->back()->with('message', 'Image Uploaded Successfully');
    //     endif;
        
    //     return redirect()->back()->with('error', 'Image not Uploaded Successfully');
    // }


    public function index()
    {
        /**
         * 
         * Using Eloquent Method of Querying
         * 
         * Create an Object in a facade way D::
         * 
         */
        $user = new User();

        // $user->name = 'Jude';
        // $user->password = bcrypt("password");
        // $user->email = 'jude@gmail.com';
        // $user->save();
                /**
                 * *****************
                 *      OR
                 * *****************
                 */
            $data = [
                'name' => "John",
                'email' => 'john@gmail.com',
                'password' => 'password',
            ];

            // User::create($data);
        // return "$user row affected<br>Success";
        
        $user = User::where('id', 8)->update(['password' => bcrypt('password')]);
        
        return $user;

        $user = User::all();

        // $user = User::where('id', 3)->delete();

        // User::where('id', 4)->update(['name' => 'Adejoy']);

        // return "This is the User Controller Page";
        // Use a facade DB Class for Raw SQL Querying
    
        // $user = DB::insert("insert into users (name, email, password) values (?, ?, ?)", ['John', 'john@gmail.com', 'john'] );
        
        // $user = DB::select("select * from users");
        
        // $user = DB::update('update users set name = ? where id = 1', ['Joy']); 

        // $user = DB::delete('delete from users where id = 1');
        // return $user;
        return view('home');
    }

    public function testing(Request $request)
    {   
        // dd($request->firstname);
        User::where(['id' => auth()->user()->id])
            ->update([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'username' => $request->username,
                'email' => $request->email
            ]);

        return redirect()->back();
    }

    public function uploadAvatar(Request $request)
    {
        $filename = $request->file('image')->getClientOriginalName();
        // $filename = "Uploaded";
        (new self())->removeOldImage();
        $request->file('image')->storeAs('images', $filename, 'public');
        auth()->user()->update(['avatar' => $filename]);
    }
    
    protected function removeOldImage()
    {
        $filename_db = Auth::user()->avatar;
        if ($filename_db) :
            Storage::delete("public/images/$filename_db");           
            auth()->user()->update(['avatar' => null]);
            redirect()->back()->with('message', "DP successfully removed!");
        else :
            redirect()->back()->with('message', "DP successfully removed!");
        endif;
    }
}
