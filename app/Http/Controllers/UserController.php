<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// NOTE: add library login
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    public function getLogin() {
        return view('admin.login');
    }

    public function postLogin(Request $request)
    {
    	$this->validate($request, [
    		'user_name' => 'required',
    		'password' => 'required'
    	], [
    		'user_name.required' => 'Bạn chưa nhập username',
    		'password.required' => 'Bạn chưa nhập password'
    	]);

    	if(Auth::attempt(['user_name' => $request->user_name, 'password' => $request->password]))
    	{
    		return redirect('admin/dashboard');
    	}
    	else
    	{
    		return redirect('admin/login')->with('message', 'Đăng nhập không thành công');
    	}
    }

    public function getUser($idUserView = null)
    {
        if($idUserView == null)
        {
            $user = User::all();
            return view('admin.user.userList', ['user' => $user, 'number' => 0]);
        } else {
            $user = User::where('id', $idUserView)->get()[0];
            echo "<tr>";
                    echo "<td>Email:</td>";
                    echo "<td>$user->email</td>";
                echo "</tr>";

            // foreach ($user as $key => $value) {
            //     echo "<tr>";
            //         echo "<td></td>";
            //     echo "</tr>";
            // }
        }
    }

    public function postUser(Request $request)
    {
        $this->validate($request, [
            'userName' => 'required',
        ],[]);
    }
}
