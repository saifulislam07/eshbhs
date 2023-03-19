<?php

namespace App\Http\Controllers;

use App\Models\registration2023;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Registration2023Controller extends Controller
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

    public function registerMembers2023()
    {
        $allregisters = registration2023::orderBy('id', 'desc')->get();
        return view('user.register.registerMembers2023', compact('allregisters'));
    }

    public function approved(request $request)
    {
        registration2023::where('id', $request->id)
            ->update([
                'status' => 'Confirm',
                'approved_by' => Auth::user()->id
            ]);

        return redirect()->back()->with('message', 'Approved the member payment status');
    }

    public function onlineregistration2023()
    {

        return view('user.twentytwentythree');
    }


    public function register2023(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name' => 'required:string|max:190',
            'email' => 'required',
            'phone' => 'required',
            'occupation' => 'required',
            'fathersname' => 'required',
            'village' => 'required',
            'gender' => 'required',
            'sscyear' => 'required',
            'frombkash' => 'required',
            'tobkash' => 'required',
            'transectionId' => 'required|unique:registration2023s,transectionId',
            'amount' => 'required',
            'total_members' => 'required',
        ]);



        $calculateAmount = 510 * $request->total_members;
        if ($calculateAmount > $request->amount) {
            // dd($calculateAmount);
            return redirect()->back()->with('amountError', 'Please input the valid amount');
        }
        //   dd($calculateAmount);

        $user = new registration2023();
        $user->name = $request->name;
        $user->fathersname = $request->fathersname;
        $user->mathersname = $request->mathersname;
        $user->village = $request->village;
        $user->yearofregistration = $request->yearofregistration;
        $user->occupation = $request->occupation;
        $user->phone = $request->phone;
        $user->alterphone = $request->alterphone;
        $user->gender = $request->gender;
        $user->sscyear = $request->sscyear;
        $user->email = $request->email;
        $user->frombkash = $request->frombkash;
        $user->tobkash = $request->tobkash;
        $user->transectionId = $request->transectionId;
        $user->amount = $request->amount;
        $user->total_members = $request->total_members;
        $user->save();

        return redirect()->back()->with('success', 'Your information will be checked and confirmation will be given by call or message.');
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
     * @param  \App\Models\registration2023  $registration2023
     * @return \Illuminate\Http\Response
     */
    public function show(registration2023 $registration2023)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\registration2023  $registration2023
     * @return \Illuminate\Http\Response
     */
    public function edit(registration2023 $registration2023)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\registration2023  $registration2023
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, registration2023 $registration2023)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\registration2023  $registration2023
     * @return \Illuminate\Http\Response
     */
    public function destroy(registration2023 $registration2023)
    {
        //
    }
}
