<?php
define('CURRENT_URI', $_SERVER['REQUEST_URI']);
// var_dump($match);
// var_dump(CURRENT_URI);
if(preg_match("/(.*)/", CURRENT_URI, $match)) {
    define('BASE_CONTEXT_PATH', $match[0]);
    // define('BASE_CONTEXT_PATH', '/');
}

define('BASE_IMAGE_PATH', BASE_CONTEXT_PATH . 'images/');
define('BASE_JS_PATH', BASE_CONTEXT_PATH . 'js/');
define('BASE_CSS_PATH', BASE_CONTEXT_PATH . 'css/');
define('SOURCE_BASE', __DIR__ . '/php/');

define('GO_HOME', 'home');
define('GO_REFERER', 'referer');

define('DEBUG', true);