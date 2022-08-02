<?php

namespace App\Http\Controllers\User;


use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $data['orders'] = Order::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();

        return view('user.dashboard', $data);
    }

    public function editprofile()
    {
        return view('user.editprofile');
    }

    public function updateprofile(Request $request, $id)
    {


        $user = User::where('id', $id)->first();
        $request->validate([
            'profilepic' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            // 'username' => 'required:string|max:25|unique:users,username',
            'name' => 'required',
            //'phone' => 'required|unique:users,phone',
            'fathersname' => 'required',
            'occupation' => 'required',
            'village' => 'required',
            'gender' => 'required',
            'bloodgroup' => 'required',
            'sscyear' => 'required',
            // 'email' => 'required|unique:users,email',
        ]);




        if ($request->hasFile('profilepic')) {
            @unlink('profile/' . $user->profilepic);
            $file = $request->file('profilepic');
            $extension = $file->getClientOriginalExtension();
            $image = $request->username . time() . rand() . '.' . $extension;
            $file->move('profile/', $image);

            $user->profilepic = $image;
        }

        $user->name = $request->name;
        $user->username = $request->username;
        $user->fathersname = $request->fathersname;
        $user->mathersname = $request->mathersname;
        $user->village = $request->village;
        $user->occupation = $request->occupation;
        $user->phone = $request->phone;
        $user->alterphone = $request->alterphone;
        $user->gender = $request->gender;
        $user->bloodgroup = $request->bloodgroup;
        $user->sscyear = $request->sscyear;
        $user->facebook = $request->facebook;
        $user->email = $request->email;
        $user->save();


        Session::flash('success', 'Profile updated successfully!');
        return redirect()->back();
    }


    public function change_password()
    {
        return view('user.change-password');
    }

    public function update_password(Request $request, $id)
    {

        $user = User::where('id', $id)->first();



        $messages = [
            'password.required' => 'The new password field is required',
            'password.confirmed' => "Password does'nt match"
        ];
        $validator = Validator::make($request->all(), [
            'old_password' => 'required',
            'password' => 'required|confirmed'
        ], $messages);

        if (Hash::check($request->old_password, $user->password)) {
            $oldPassMatch = 'matched';
        } else {
            $oldPassMatch = 'not_matched';
        }
        if ($validator->fails() || $oldPassMatch == 'not_matched') {
            if ($oldPassMatch == 'not_matched') {
                $validator->errors()->add('oldPassMatch', true);
            }
            return redirect()->route('user.change_password')
                ->withErrors($validator);
        }


        $user->password = bcrypt($request->password);
        $user->save();



        Session::flash('success', 'User password updated successfully!');
        return redirect()->back();
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('front.index');
    }


    public function orderDetails($id)
    {
        $order = Order::findOrFail($id);
        return view('user.order.details', compact('order'));
    }

    public function product_order()
    {

        $orders = Order::where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->get();

        return view('user.order.index', compact('orders'));
    }

    public function downloadable()
    {

        $orders = Order::where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->get();

        return view('user.downloadable', compact('orders'));
    }
}