<?php 
namespace lib;

use Throwable;
use Error;

function route($rpath, $method) {
    try {
        // var_dump($_SERVER);
        var_dump($rpath);

        if($rpath === '') {
            $rpath = 'home';
        }

        var_dump($rpath);

        $targetFile = SOURCE_BASE . "controllers/{$rpath}.php";
        var_dump($targetFile);
        var_dump($_SERVER['REQUEST_URI']);

        if(!file_exists($targetFile)) {
            require_once SOURCE_BASE . "views/404.php";
            return;
        }

        require_once $targetFile;

        $rpath = str_replace('/', '\\', $rpath);
        $fn = "\\controller\\{$rpath}\\{$method}";

        var_dump($rpath);
        var_dump($fn);

        $fn();

    } catch (Throwable $e) {

        Msg::push(Msg::DEBUG, $e->getMessage());
        Msg::push(Msg::ERROR, '何かがおかしいようです。。');
        redirect('404');

    }

}