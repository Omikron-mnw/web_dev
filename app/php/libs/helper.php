<?php
function get_param($key, $default_val, $is_post = true)
{

    $arry = $is_post ? $_POST : $_GET;
    return $arry[$key] ?? $default_val;
}

function redirect($path)
{

    if ($path === GO_HOME) {

        // $path = get_url('');
        $path = '/poll/';
    } else if ($path === GO_REFERER) {

        $path = $_SERVER['HTTP_REFERER'];
    } else {

        $path = get_url($path);
    }

    header("Location: {$path}");

    die();
}

function the_url($path = null)
{
    echo get_url($path);
}

function get_url($path)
{
    // var_dump(BASE_CONTEXT_PATH);
    // var_dump(SOURCE_BASE . trim($path, '/'));
    // var_dump(trim($path, '/'));

    return BASE_CONTEXT_PATH . trim($path, '/');
}

function is_alnum($val)
{

    return preg_match("/^[a-zA-Z0-9]+$/", $val);
}

function escape($data)
{
    if (is_array($data)) {

        foreach ($data as $prop => $val) {
            $data[$prop] = escape($val);
        }

        return $data;
    } elseif (is_object($data)) {

        foreach ($data as $prop => $val) {
            $data->$prop = escape($val);
        }

        return $data;
    } else {

        return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');

    }
}
