<?php $base='/de/';

$uri=str_replace($base,'/',$_SERVER['REQUEST_URI']);
header('HTTP/1.1 301 Moved Permanently');
header('Location: '.$uri);

