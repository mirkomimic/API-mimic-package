<?php

namespace App\Controllers\Auth;

use App\Mimic\Auth;
use App\Database\DB;
use App\Http\Request;
use App\Models\User;
use App\Http\Response;
use App\Models\Session;
use App\Utilities\Query;
use App\Http\Requests\LoginRequest;

class SessionController
{

  public function login()
  {
  }

  public function logout()
  {
  }

  public static function check(string $token): bool
  {
    $user = Auth::user();

    if (isset($user) && $user->token() !== null && $user->token() == $token && ($user->tokenExpiryTime() > time()))
      return true;
    else {
      return false;
    }
  }

  public function getUserByEmail(string $email)
  {
    $user = Query::select()->table('users')->where('email', '=', $email)->getModel();

    return $user;
  }
}
