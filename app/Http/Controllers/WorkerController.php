<?php

namespace App\Http\Controllers;
use App\Models\Task;
use App\Models\ContactForGuest;
use App\Models\GenarelMessage;
use App\Models\Notice;
use App\Models\Payment;
use App\Models\User;
use App\Models\UserPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Image;


class WorkerController extends Controller
{
    public function WorkerDashboard(){
        $username = Auth::user()->username;
        $payment = Payment::where('username',$username)->latest()->get();
        return view('worker.worker_index',compact('payment'));

    } // End Mehtod 

    public function WorkerInformation(){
        $id = Auth::user()->id;
        $workerData = User::find($id);
        return view('worker.worker_information',compact('workerData'));

    } // End Mehtod 

    public function ImportantContact(){
        $serviceall = ContactForGuest::all();
        return view('worker.other.important_contact',compact('serviceall'));

    } // End Mehtod 


    public function WorkerLogin(){
        return view('worker.worker_login');
    } // End Mehtod 


    public function WorkerDestroy(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/worker/login');
    } // End Mehtod 


    public function WorkerProfile(){

        $id = Auth::user()->id;
        $workerData = User::find($id);
        return view('worker.worker_profile_view',compact('workerData'));

    } // End Mehtod 

    public function WorkerProfileStore(Request $request){

        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address; 


        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/worker_images/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/worker_images'),$filename);
            $data['photo'] = $filename;
        }

        $data->save();

        $notification = array(
            'message' => 'Worker Profile Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } // End Mehtod 


    public function WorkerChangePassword(){
        return view('worker.worker_change_password');
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



    public function AllWorker(){
        $alladminuser = User::where('role','worker')->latest()->get();
        return view('backend.admin.all_admin',compact('alladminuser'));
    }// End Mehtod 



    public function WorkerAddTask(){
        return view('worker.Task.add_task');
    } // End Mehtod 

    public function WorkerTaskList(){
        $username = Auth::user()->username;
        $task = Task::where('username',$username)->latest()->get();
        return view('worker.Task.Task',compact('task'));
    }//End Method

    public function WorkerTaskView($id){
        $task = Task::findOrFail($id);
        return view('worker.Task.view_task',compact('task'));
    } // End Mehtod

    public function WorkerTaskEdit($id){
        $task = Task::findOrFail($id);
        return view('worker.Task.edit_task',compact('task'));
    } // End Mehtod

    public function WorkerAddTaskStore(Request $request){
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

        return redirect()->route('worker.task.list')->with($notification);
    }//End Method

    public function WorkerTaskUpdate(Request $request){
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

            return redirect()->route('worker.task.list')->with($notification);
    }//End Method

    public function WorkerTaskDelete($id){

        Task::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Task Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 

    }// End Method

    public function WorkerNoticeHome(){
        $notice = Notice::where( function($query) {
            $query->where('notice_for','all')
                ->orWhere('notice_for','worker');
        })->latest()->get();
        
        return view('worker.Notice.user_notice_view',compact('notice'));
    }//End Method

    public function WorkerAddPhotoGallary(){
        return view('worker.PhotoGallary.add_photo');
    } // End Mehtod 

    public function WorkerPhotoGallaryEdit($id){
        $photo = UserPhoto::findOrFail($id);
        return view('worker.PhotoGallary.edit_photo',compact('photo'));
    } // End Mehtod

    public function WorkerPhotoGallaryDelete($id){

        UserPhoto::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Photo Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 

    }// End Method

    public function WorkerOwnPhotoGallary(){
        $username = Auth::user()->username;
        $photo = UserPhoto::where('username',$username)->latest()->get();
        return view('worker.PhotoGallary.user_photo',compact('photo'));
    }//End Method

    public function WorkerAddPhotoGallaryStore(Request $request){
        $image = $request->file('photo');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('upload/worker_images/uploaded/'.$name_gen);
        $save_url = 'upload/worker_images/uploaded/'.$name_gen;

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

            return redirect()->route('worker.own.photo.galary')->with($notification);
    }//End Method

    public function WorkerPhotoGallaryUpdate(Request $request){
        $id = $request->id;
        $old_img = $request->old_image;
        $username = Auth::user()->username;

        if ($request->file('photo')) {

        $image = $request->file('photo');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('upload/worker_images/uploaded/'.$name_gen);
        $save_url = 'upload/worker_images/uploaded/'.$name_gen;

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

            return redirect()->route('worker.own.photo.galary')->with($notification);
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
            return redirect()->route('worker.own.photo.galary')->with($notification); 
       }
    } // End Mehtod 

    public function WorkerSendMessage(){
        return view('worker.Message.add_message');
    } // End Mehtod 

    public function WorkerSendMessageHome(){
        $username = Auth::user()->username;
        $message = GenarelMessage::where('username',$username)->latest()->get();
        return view('worker.Message.messages_view',compact('message'));
    }//End Method

    public function WorkerSendMessageStore(Request $request){
        $username = Auth::user()->username;
        GenarelMessage::insert([
            'username' => $username,
            'message' => $request->message,
        ]);

       $notification = array(
            'message' => 'Message Send  Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('worker.send.message.home')->with($notification);
    }//End Method

    public function WorkerDeleteMessage($id){

        GenarelMessage::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Message Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 

    }// End Method

}

