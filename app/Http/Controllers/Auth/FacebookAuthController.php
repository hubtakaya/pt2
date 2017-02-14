<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

// 追加
use Illuminate\Http\Request;
use App\Http\Requests;

// use Laravel\Socialite\Contracts\Factory as Socialite;
use Socialite;

class FacebookAuthController extends Controller
{
/**


/**
 * http://qiita.com/zaburo/items/6f7c072795e99fd98a75


    //
    protected $socialite;

    // コンストラクタ
    public function __construct(Socialite $socialite)
    {
        $this->socialite = $socialite;
    }

    // ログイン
    public function facebookLogin()
    {
        // facebook へリダイレクト
        return $this->socialite->driver('facebook')->redirect();
    }

    // コールバック
    protected function facebookCallback()
    {
        // ユーザー情報を取得
        $fuser = $this->socialite->driver('facebook')->user();

        if($fuser)
        {
            dd($user);
            // OAuth Two Providers
            $token = $fuser->token;
            $refreshToken = $fuser->refreshToken;
            $expiresIn = $fuser->expiresIn;

            // All Providers
            $fuser->getId();
            $fuser->getName();
            $fuser->getEmail();
            $fuser->getAvatar();
        }
        return $fuser->getEmail();
    }
**/

/**
 * http://qiita.com/bohebohechan/items/421f30e0112f6b7a566b
 */

    // ログイン
    public function facebookLogin()
    {
        return Socialite::driver('facebook')->redirect();
    }

    // コールバック
    protected function facebookCallback()
    {
        try{
                $user = Socialite::driver('facebook')->user();

                if($user){
                    dd($user);
                    // OAuth Two Providers
                    $token = $user->token;
                    $refreshToken = $user->refreshToken; // not always provided
                    $expiresIn = $user->expiresIn;

                    // All Providers
                    $user->getId();
                    $user->getNickname();
                    $user->getName();
                    $user->getEmail();
                    $user->getAvatar();

                }
            }catch(Exception $e){
                return redirect("/books");
            }

            // $user->token;
    }
}
