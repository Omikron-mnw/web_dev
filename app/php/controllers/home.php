<?php
namespace controller\home;

use db\TopicQuery;

// var_dump($_SERVER);

function get() {

    $topics = TopicQuery::fetchPublishedTopics();
    \view\home\index($topics);

}
