<?php

function loadPages() {
    $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_SPECIAL_CHARS);

    $page = (!$page) ? 'pages/home.php' : "pages/{$page}.php";

    if (!file_exists($page) || strpos(realpath($page), realpath('pages')) !== 0) {
        throw new Exception("A página solicitada não foi encontrada ou não é válida!");
    }

    return $page;
}
