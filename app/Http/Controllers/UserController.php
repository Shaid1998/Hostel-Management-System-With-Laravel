<?php

namespace App\Http\Controllers;

use App\Models\ContactForGuest;
use App\Models\note;
use App\Models\Task;
use App\Models\User;
use App\Models\UserPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Image;

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

    public function UserAddTask(){
        return view('userPart.ToDoList.add_task');
    } // End Mehtod 

    public function UserAddPhotoGallary(){
        return view('userPart.PhotoGallary.add_photo');
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

    public function UserTaskList(){
        $username = Auth::user()->username;
        $task = Task::where('username',$username)->latest()->get();
        return view('userPart.ToDoList.Task',compact('task'));
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

    public function UserTaskEdit($id){
        $task = Task::findOrFail($id);
        return view('userPart.ToDoList.edit_task',compact('task'));
    } // End Mehtod

    public function UserPhotoGallaryEdit($id){
        $photo = UserPhoto::findOrFail($id);
        return view('userPart.PhotoGallary.edit_photo',compact('photo'));
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

    public function UserPhotoGallaryDelete($id){

        UserPhoto::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Photo Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 

    }// End Method

    public function UserOwnPhotoGallary(){
        $username = Auth::user()->username;
        $photo = UserPhoto::where('username',$username)->latest()->get();
        return view('userPart.PhotoGallary.user_photo',compact('photo'));
    }//End Method

    public function UserAddPhotoGallaryStore(Request $request){
        $image = $request->file('photo');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('upload/user_images/uploaded/'.$name_gen);
        $save_url = 'upload/user_images/uploaded/'.$name_gen;

        $username = Auth::user()->username;
        UserPhoto::insert([
            'username' => $username,
            'photo_title' => $request->photo_title,
            'photo_text' => $request->photo_text,
            'photo' => $save_url
        ]);

       $notification = array(
            'message' => 'New Photo Added Successfully',
            'alert-type' => 'success'
        );

            return redirect()->route('user.own.photo.galary')->with($notification);
    }//End Method

    public function UserPhotoGallaryUpdate(Request $request){
        $id = $request->id;
        $old_img = $request->old_image;
        $username = Auth::user()->username;

        if ($request->file('photo')) {

        $image = $request->file('photo');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('upload/user_images/uploaded/'.$name_gen);
        $save_url = 'upload/user_images/uploaded/'.$name_gen;

        if (file_exists($old_img)) {
           unlink($old_img);
        }

        

        UserPhoto::findOrFail($id)->update([
            'username' => $username,
            'photo_title' => $request->photo_title,
            'photo_text' => $request->photo_text,
            'photo' => $save_url
        ]);

       $notification = array(
            'message' => 'Photo Updated Successfully',
            'alert-type' => 'success'
        );

            return redirect()->route('user.own.photo.galary')->with($notification);
        }else {

            UserPhoto::findOrFail($id)->update([
                'username' => $username,
                'photo_title' => $request->photo_title,
                'photo_text' => $request->photo_text,
                'photo' => $save_url,
            ]);
           $notification = array(
                'message' => 'Photo And PhotoInformation Updated Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('user.own.photo.galary')->with($notification); 
       }
    } // End Mehtod 

    public function UserAddTaskStore(Request $request){
        $username = Auth::user()->username;
        Task::insert([
            'username' => $username,
            'task_title' => $request->task_title,
            'task' =>$request->task,
            'set_date' =>$request->set_date,
        ]);

       $notification = array(
            'message' => 'New Task Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('user.task.list')->with($notification);
    }//End Method

    public function UserTaskUpdate(Request $request){
        $username = Auth::user()->username;

        $id = $request->id;

        Task::findOrFail($id)->update([
            'username' => $username,
            'task_title' => $request->task_title,
            'task' =>$request->task,
            'set_date' =>$request->set_date,
        ]);

       $notification = array(
            'message' => 'Task Updated Successfully',
            'alert-type' => 'success'
        );

            return redirect()->route('user.task.list')->with($notification);
    }//End Method
}
