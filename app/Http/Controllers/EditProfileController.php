<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\ProfileRequest;

class EditProfileController extends Controller
{
    public function index($id)
    {
        $user = User::findOrFail($id);
        return view('edit_profile', compact('user'));
    }

    public function update(ProfileRequest $request, $id)
    {
        try
        {
            $input = $request->except('_token', '_method');
            $nameAvatar = $request->oldProfile;
            if($request->has('avatar'))
            {
                $file = $request->avatar;
                $nameAvatar = time().'-'.$file->getClientOriginalName();
                $file->storeAs('public/image/avatar', $nameAvatar);
            }
            $input['avatar'] = $nameAvatar;
            User::findOrFail($id)->update($input);

            return back()->with(trans('message.success'), trans('message.successfull'));
        } catch (Exception $e) {
            return back()->with(trans('message.fail', trans('message.action_fail')));
        }
    }
}
