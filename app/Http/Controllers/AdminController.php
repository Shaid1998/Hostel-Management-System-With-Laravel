<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Role;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\ContactForGuest;
use App\Models\HomeTopic;
use App\Models\User;
use App\Models\Message;
use App\Models\Notice;
use App\Models\PhotoGallary;
use App\Models\Service;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Image;

class AdminController extends Controller
{
    public function AdminDashboard(){

        return view('admin.index');

    } // End Mehtod 

    public function UserInformation(){
        $alluser = User::where('role','user')->latest()->get();
        return view('admin.user.user_information',compact('alluser'));

    } // End Mehtod 

    public function WorkerInformation(Request $request){
        $search =$request['search'] ?? "";

        if ($search != "") {
            $all = User::where('name','LIKE','%$search%')->get()->all();
        }else{
            
        }
        $all = User::where('role','worker')->get()->all();
        
        return view('admin.worker.worker_information',compact('all'));

    } // End Mehtod

    
    public function AddNew(){
        return view('admin.new_add');

    } // End Mehtod


    public function AdminLogin(){
        return view('admin.admin_login');
    } // End Mehtod 


    public function AdminDestroy(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    } // End Mehtod 


    public function AdminProfile(){

        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('admin.admin_profile_view',compact('adminData'));

    } // End Mehtod 

    public function EditUser($id){
        $user = User::findOrFail($id);
        return view('admin.admin_User_Information_Edit',compact('user'));

    } // End Mehtod

    public function EditWorker($id){
        $user = User::findOrFail($id);
        return view('admin.admin_User_Information_Edit',compact('user'));

    } // End Mehtod

    public function NewStore(Request $request){
        $image = $request->file('photo');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('upload/user_images/'.$name_gen);
        $save_url = 'upload/user_images/'.$name_gen;


        User::insert([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' =>Hash::make($request->password),
            'phone' => $request->phone,
            'address' => $request->address,
            'status' => $request->status,
            'role' => $request->role,
            'payment_info' => $request->payment_info,
            'photo' => $save_url
        ]);

       $notification = array(
            'message' => 'New People Added Successfully',
            'alert-type' => 'success'
        );

            return redirect()->route('admin.dashobard')->with($notification);
    }//End Method
    
    public function UpdateUser(Request $request){
        $id = $request->id;
        $old_img = $request->old_image;

        if ($request->file('photo')) {

        $image = $request->file('photo');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('upload/user_images/'.$name_gen);
        $save_url = 'upload/user_images/'.$name_gen;

        if (file_exists($old_img)) {
           unlink($old_img);
        }

        User::findOrFail($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'status' => $request->status,
            'payment_info' => $request->payment_info,
            'photo' => $save_url
        ]);

       $notification = array(
            'message' => 'Information Updated Successfully',
            'alert-type' => 'success'
        );

            return redirect()->back()->with($notification);
        }else {

            User::findOrFail($id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'status' => $request->status,
                'payment_info' => $request->payment_info,
            ]);
           $notification = array(
                'message' => 'Information Updated Successfully',
                'alert-type' => 'success'
            );
                return redirect()->back()->with($notification); 
       }
    } // End Mehtod 

    public function DeleteUser($id){

        User::findOrFail($id)->delete();

        $notification = array(
            'message' => 'User Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 

    }// End Method

    public function DeleteWorker($id){

        User::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Worker Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 

    }// End Method


    public function AdminProfileStore(Request $request){

        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address; 


        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/admin_images/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'),$filename);
            $data['photo'] = $filename;
        }
        $data->save();

        $notification = array(
            'message' => 'Admin Profile Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } // End Mehtod 


    public function AdminChangePassword(){
        return view('admin.admin_change_password');
    } // End Mehtod 


    public function AdminUpdatePassword(Request $request){
        // Validation 
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|numeric|confirmed|min:8', 
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

    public function AllAdmin(){
        $alladminuser = User::where('role','admin')->latest()->get();
        return view('backend.admin.all_admin',compact('alladminuser'));
    }// End Mehtod 

    public function AdminUserStore(Request $request){

        $user = new User();
        $user->username = $request->username;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->password = Hash::make($request->password);
        $user->role = 'admin';
        $user->status = 'active';
        $user->save();

        if ($request->roles) {
            $user->assignRole($request->roles);
        }

         $notification = array(
            'message' => 'New Admin User Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.admin')->with($notification);

    }// End Mehtod 

    public function AdminUserUpdate(Request $request,$id){


        $user = User::findOrFail($id);
        $user->username = $request->username;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address; 
        $user->role = 'admin';
        $user->status = 'active';
        $user->save();

        $user->roles()->detach();
        if ($request->roles) {
            $user->assignRole($request->roles);
        }

         $notification = array(
            'message' => 'New Admin User Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.admin')->with($notification);

    }// End Mehtod 


    public function DeleteAdminRole($id){

        $user = User::findOrFail($id);
        if (!is_null($user)) {
            $user->delete();
        }
 
         $notification = array(
            'message' => 'Admin User Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }// End Mehtod 

    public function AllIncomingMessage(){
        $messages = Message::all();
        return view('admin.messages',compact('messages'));
    }//End Method

    public function DeleteMessage($id){

        Message::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Message Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 

    }// End Method

    public function DeleteNotice($id){

        Notice::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Notice Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 

    }// End Method

    public function AdminNoticeHome(){
        $notice = Notice::all();
        return view('admin.notice.notice_view',compact('notice'));
    }//End Method

    public function AdminOtherHomeOption(){
        $home = HomeTopic::all();
        return view('admin.other.home_topic',compact('home'));
    }//End Method

    public function AdminAddNotice(){
        return view('admin.notice.add_new_notice');
    }//End Method

    public function NewNoticeStore(Request $request){
        Notice::insert([
            'notice_topic' => $request->notice_topic,
            'notice_details' => $request->notice_details,
            'notice_for' => $request->notice_for,
            'notice_Alart' => $request->notice_Alart,
        ]);

       $notification = array(
            'message' => 'New Notice Added Successfully',
            'alert-type' => 'success'
        );

            return redirect()->route('admin.notice.board')->with($notification);
    }//End Method
    public function AdminOtherOption(){
        return view('admin.other.other_index');
    }//End Method

    public function AdminOtherPhotoOption(){
        $data = PhotoGallary::all();
        return view('admin.other.image',compact('data'));
    }//End Method

    public function AdminOtherServiceOption(){
        $data = Service::all();
        return view('admin.other.services',compact('data'));
    }//End Method

    public function AdminOtherContactOption(){
        $data = ContactForGuest::all();
        return view('admin.other.contact',compact('data'));
    }//End Method

    public function AdminAddPhoto(){
        return view('admin.other.add_image');
    }//End Method

    public function AdminAddContact(){
        return view('admin.other.add_contact');
    }//End Method

    public function AdminAddService(){
        return view('admin.other.add_service');
    }//End Method

    public function NewPhotoStore(Request $request){
        $image = $request->file('photo');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('upload/admin_images/site/'.$name_gen);
        $save_url = 'upload/admin_images/site/'.$name_gen;


        PhotoGallary::insert([
            'photo_title' => $request->photo_title,
            'photo_credit' => $request->photo_credit,
            'photo_for' => $request->photo_for,
            'photo' => $save_url
        ]);

       $notification = array(
            'message' => 'New Photo Added Successfully',
            'alert-type' => 'success'
        );

            return redirect()->route('admin.other.photo.option')->with($notification);
    }//End Method

    public function NewServiceStore(Request $request){
        Service::insert([
            'service_name' => $request->service_name,
            'service_status' => $request->service_status,
            'service_cost' => $request->service_cost,
        ]);

       $notification = array(
            'message' => 'New Service Added Successfully',
            'alert-type' => 'success'
        );

            return redirect()->route('admin.other.service.option')->with($notification);
    }//End Method

    public function EditService($id){
        $service = Service::findOrFail($id);
        return view('admin.other.edit_service',compact('service'));

    } // End Mehtod

    public function EditGPhoto($id){
        $photo = PhotoGallary::findOrFail($id);
        return view('admin.other.edit_image',compact('photo'));

    } // End Mehtod

    public function AdminOtherHomeOptionEdit($id){
        $service = HomeTopic::findOrFail($id);
        return view('admin.other.edit_home_topic',compact('service'));

    } // End Mehtod

    public function UpdateService(Request $request){
        $id = $request->id;
       

        Service::findOrFail($id)->update([
            'service_name' => $request->service_name,
            'service_status' => $request->service_status,
            'service_cost' => $request->service_cost,
        ]);

       $notification = array(
            'message' => 'Service Information Updated Successfully',
            'alert-type' => 'success'
        );

            return redirect()->route('admin.other.service.option')->with($notification);
        
    } // End Mehtod 

    public function DeleteService($id){

        Service::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Service Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 

    }// End Method

    public function AdminOtherHomeOptionDelete($id){

        HomeTopic::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Home Text Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 

    }// End Method

    public function UpdateGPhoto(Request $request){
        $id = $request->id;
        $old_img = $request->old_image;

        if ($request->file('photo')) {

        $image = $request->file('photo');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('upload/admin_images/site/'.$name_gen);
        $save_url = 'upload/admin_images/site/'.$name_gen;

        if (file_exists($old_img)) {
           unlink($old_img);
        }

        PhotoGallary::findOrFail($id)->update([
            'photo_title' => $request->photo_title,
            'photo_credit' => $request->photo_credit,
            'photo_for' => $request->photo_for,
            'photo' => $save_url
        ]);

       $notification = array(
            'message' => 'Information Updated Successfully',
            'alert-type' => 'success'
        );

            return redirect()->route('admin.other.photo.option')->with($notification);
        }else {

            PhotoGallary::findOrFail($id)->update([
                'photo_title' => $request->photo_title,
                'photo_credit' => $request->photo_credit,
                'photo_for' => $request->photo_for,
                'photo' => $save_url,
            ]);
           $notification = array(
                'message' => 'Photo And PhotoInformation Updated Successfully',
                'alert-type' => 'success'
            );
                return redirect()->route('admin.other.photo.option')->with($notification); 
       }
    } // End Mehtod 

    public function DeleteGPhoto($id){

        PhotoGallary::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Gallary Photo Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 

    }// End Method

    public function NewContactStore(Request $request){
        $image = $request->file('photo');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('upload/user_images/'.$name_gen);
        $save_url = 'upload/user_images/'.$name_gen;


        ContactForGuest::insert([
            'name' => $request->name,
            'image' => $save_url,
            'email' => $request->email,
            'phone' => $request->phone,
            'position' => $request->position,
        ]);

       $notification = array(
            'message' => 'New Contact Added Successfully',
            'alert-type' => 'success'
        );

            return redirect()->route('admin.other.contact.option')->with($notification);
    }//End Method

    public function AdminOtherHomeOptionNew(){
        return  view('admin.other.add_home_topic');
    }//End Method

    public function AdminOtherHomeOptionNewStore(Request $request){
        HomeTopic::insert([
            'home_title' => $request->home_title,
            'home_sub_Title' => $request->home_sub_Title,
            'Home_button_1' => $request->Home_button_1,
            'home_button_2' => $request->home_button_2,
        ]);

       $notification = array(
            'message' => 'New Home Text Added Successfully',
            'alert-type' => 'success'
        );

            return redirect()->route('admin.other.home.option')->with($notification);
    }//End Method

    public function AdminOtherHomeOptionUpdate(Request $request){
        $id = $request->id;
       

        HomeTopic::findOrFail($id)->update([
            'home_title' => $request->home_title,
            'home_sub_Title' => $request->home_sub_Title,
            'Home_button_1' => $request->Home_button_1,
            'home_button_2' => $request->home_button_2,
        ]);

       $notification = array(
            'message' => 'Home Text Updated Successfully',
            'alert-type' => 'success'
        );

            return redirect()->route('admin.other.home.option')->with($notification);
        
    } // End Mehtod 

}
