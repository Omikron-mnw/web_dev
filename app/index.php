<?php

require_once 'config.php';

// var_dump(SOURCE_BASE);
// var_dump($_SERVER);

// Library
require_once SOURCE_BASE . 'libs/helper.php';
require_once SOURCE_BASE . 'libs/auth.php';
require_once SOURCE_BASE . 'libs/router.php';

// Model
require_once SOURCE_BASE . 'models/abstract.model.php';
require_once SOURCE_BASE . 'models/user.model.php';
require_once SOURCE_BASE . 'models/topic.model.php';
require_once SOURCE_BASE . 'models/comment.model.php';

// Message
require_once SOURCE_BASE . 'libs/message.php';

// DB
require_once SOURCE_BASE . 'db/datasource.php';
require_once SOURCE_BASE . 'db/user.query.php';
require_once SOURCE_BASE . 'db/topic.query.php';
require_once SOURCE_BASE . 'db/comment.query.php';

// Partials
require_once SOURCE_BASE . 'partials/topic-list-item.php';
require_once SOURCE_BASE . 'partials/topic-header-item.php';
require_once SOURCE_BASE . 'partials/header.php';
require_once SOURCE_BASE . 'partials/footer.php';

// View
require_once SOURCE_BASE . 'views/home.php';
require_once SOURCE_BASE . 'views/login.php';
require_once SOURCE_BASE . 'views/register.php';
require_once SOURCE_BASE . 'views/topic/archive.php';
require_once SOURCE_BASE . 'views/topic/detail.php';
require_once SOURCE_BASE . 'views/topic/edit.php';

use function lib\route;

session_start();

try {

    // header("Location: https://www.yahoo.co.jp/", true, 301);
    //////////* このheaderがあるため、リダイレクトが効かないことがわかった *//////////
    \partials\header();

    $url = parse_url(CURRENT_URI);
    // $rpath = str_replace(BASE_CONTEXT_PATH, '', $url['path']);
    // var_dump(CURRENT_URI);
    // var_dump($url);
    // var_dump(BASE_CONTEXT_PATH);
    $rpath = str_replace('/poll/', '', $url['path']);
    $method = strtolower($_SERVER['REQUEST_METHOD']);

    // var_dump($url);
    // var_dump(BASE_CONTEXT_PATH);
    // var_dump($rpath, $method);
    route($rpath, $method);

    \partials\footer();

} catch(Throwable $e) {

    die('<h1>何かが凄くおかしいようです。</h1>');

}

