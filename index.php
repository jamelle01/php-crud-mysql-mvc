<?php

// Include the configuration file
require_once 'config.php';

// Include the PostController and PostModel files
require_once 'controllers/PostController.php';

// Initialize the PostModel with the database connection
$model = new PostModel($db);

// Create a new instance of the PostController and pass the PostModel to it
$controller = new PostController($model);

// Check the action parameter in the URL to determine the route
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

// Route to the appropriate controller method based on the action
switch ($action) {
    case 'index':
        $controller->index();
        break;
    case 'create':
        $controller->create();
        break;
    case 'edit':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $controller->edit($id);
        } else {
            header('Location: index.php');
        }
        break;
    case 'delete':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $controller->delete($id);
        } else {
            header('Location: index.php');
        }
        break;
    default:
        header('Location: index.php');
        break;
}
