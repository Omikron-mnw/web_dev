<?php
define('CURRENT_URI', $_SERVER['REQUEST_URI']);
// var_dump($match);
// var_dump(CURRENT_URI);
if(preg_match("/(.*)/", CURRENT_URI, $match)) {
    define('BASE_CONTEXT_PATH', $match[0] . '');
    // define('BASE_CONTEXT_PATH', '/poll');
}
// var_dump(BASE_CONTEXT_PATH);

define('BASE_IMAGE_PATH', '/poll/images/');
define('BASE_JS_PATH', '/poll/js/');
define('BASE_CSS_PATH', '/poll/css/');
define('SOURCE_BASE', __DIR__ . '/php/');

define('GO_HOME', 'home');
define('GO_REFERER', 'referer');

define('DEBUG', true);