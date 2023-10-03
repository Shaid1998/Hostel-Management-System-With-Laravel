<?php

namespace App\Http\Controllers;

use App\Models\ContactForGuest;
use App\Models\note;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function UserDashboard(){

        return view('userPart.user_index');

    } // End Mehtod 

    public function UserInformation(){
        $id = Auth::user()->id;
        $userData = User::find($id);
        return view('userPart.user.user_information',compact('userData'));

    } // End Mehtod 


    public function UserLogin(){
        return view('userPart.user_login');
    } // End Mehtod 

    public function UserAddNote(){
        return view('userPart.Notes.add_note');
    } // End Mehtod 


    public function UserDestroy(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/user/login');
    } // End Mehtod 


    public function UserProfile(){

        $id = Auth::user()->id;
        $userData = User::find($id);
        return view('userPart.user_profile_view',compact('userData'));

    } // End Mehtod 

    public function UserHostelContact(){
        $serviceall = ContactForGuest::all();
        return view('userPart.hostel_contact',compact('serviceall'));
    }//End Method

    public function UserNotesList(){
        $username = Auth::user()->username;
        $note = note::where('username',$username)->latest()->get();
        return view('userPart.Notes.notes',compact('note'));
    }//End Method

    public function UserProfileStore(Request $request){

        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address; 


        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/user_images/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user_images'),$filename);
            $data['photo'] = $filename;
        }

        $data->save();

        $notification = array(
            'message' => 'User Profile Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } // End Mehtod 


    public function WorkerChangePassword(){
        return view('userPart.user_change_password');
    } // End Mehtod 


    public function WorkerUpdatePassword(Request $request){
        // Validation 
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed', 
        ]);

        // Match The Old Password
        if (!Hash::check($request->old_password, auth::user()->password)) {
            return back()->with("error", "Old Password Doesn't Match!!");
        }

        // Update The new password 
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)

        ]);
        return back()->with("status", " Password Changed Successfully");

    } // End Mehtod 

    public function NoteStore(Request $request){
        $username = Auth::user()->username;
        note::insert([
            'username' => $username,
            'note_title' => $request->note_title,
            'note_text' =>$request->note_text,
        ]);

       $notification = array(
            'message' => 'New Note Added Successfully',
            'alert-type' => 'success'
        );

            return redirect()->route('user.notes.list')->with($notification);
    }//End Method


    public function UserNoteView($id){
        $note = note::findOrFail($id);
        return view('userPart.Notes.view_note',compact('note'));
    } // End Mehtod

    public function UserNoteEdit($id){
        $note = note::findOrFail($id);
        return view('userPart.Notes.edit_note',compact('note'));
    } // End Mehtod
    public function NoteUpdate(Request $request){
        $username = Auth::user()->username;

        $id = $request->id;

        note::findOrFail($id)->update([
            'username' => $username,
            'note_title' => $request->note_title,
            'note_text' =>$request->note_text,
        ]);

       $notification = array(
            'message' => 'Note Updated Successfully',
            'alert-type' => 'success'
        );

            return redirect()->route('user.notes.list')->with($notification);
    }//End Method

    public function UserNoteDelete($id){

        note::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Note Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 

    }// End Method
}
