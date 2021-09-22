<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Auth;

class ProfileController extends Controller
{
   /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
    	$pageTitle = 'Update Password';
        return view('admin.profile.edit', compact('pageTitle'));
    }

    public function updatePassword(Request $request){
        $this->validate($request,[
            'old_password' => 'required',
            'password' => 'required|confirmed',
        ]);
		$admin = Admin::find(Auth::guard('admin')->id());
        $hashedPassword = $admin->password;;
        if (Hash::check($request->old_password,$hashedPassword))
        {
            if (!Hash::check($request->password,$hashedPassword))
            {
                $admin = Admin::find(Auth::guard('admin')->id());
                $admin->password = Hash::make($request->password);
                $admin->save();
                Auth::guard('admin')->logout();
			    $request->session()->invalidate();
			    return redirect()->route('admin.login');
            } else {
            	return back()->with('error', 'New password cannot be the same as old password.');
            }
        } else {
        	return back()->with('error', 'Current password not match.');
        }
    }

}
