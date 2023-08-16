<?php
namespace controller\login;

use lib\Auth;
use lib\Msg;
use model\UserModel;

function get() {

    \view\login\index();

}

function post() {

    $id = get_param('id', '');
    $pwd = get_param('pwd', '');

    if(Auth::login($id, $pwd)) {

        $user = UserModel::getSession();
        Msg::push(Msg::INFO, "{$user->nickname}さん、ようこそ。");
        // header( "HTTP/1.1 301 Moved Permanently" );
        header("Location: https://www.yahoo.co.jp/", true, 301);
        // header("Location: /poll/", true, 301);
        // redirect(GO_HOME);
        // redirect('/');
        exit();

    } else {

        redirect(GO_REFERER);

    }
}