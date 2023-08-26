<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users\UpdateRequest;
use App\Models\User;

class UserController extends Controller
{


    public function update_view(){
        $info_user = User::all()->where('id',auth()->user()->id)->first();
        return view('users.update', compact('info_user'));
    }

    public function UpdateUserInfo(UpdateRequest $updateRequest){
        $updateRequest->updateinfo();
        return redirect()->back()->with('success','Updated Successfully');
    }

}
