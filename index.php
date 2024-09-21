<?php


$view = isset($_GET['view']) ? $_GET['view'] : 'search';


$viewPath = 'public/views/' . $view . '.php';


if (file_exists($viewPath)) {
    include $viewPath;
} else {

    http_response_code(404);
    echo "404 Not Found";
}

?>