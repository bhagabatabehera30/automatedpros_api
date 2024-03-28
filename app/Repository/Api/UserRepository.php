<?php
namespace App\Repository\Api;

use App\Repository\Api\RepositoryInterface\UserRepositoryInterface;
use App\Helper\CommonHelper;
use App\Models\User;
use Hash;

//use Illuminate\Support\Facades\Redis;


class UserRepository implements UserRepositoryInterface{
	public function registerUser($request){
        $userArr=[
          'first_name'=>$request->first_name,
          'last_name'=>$request->last_name,
          'mobile'=>$request->mobile,
          'email'=>$request->email,
          'password'=>Hash::make($request->password)
        ];
        return $user=User::create($userArr);
	}

    public function getUserAfterLoggedIn($user) {
        return $user; 
    }

	
}
?>