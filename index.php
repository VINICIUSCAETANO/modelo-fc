<!DOCTYPE html>
<html lang='pt-br'>
    <header>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>teste</title>
        <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css' rel='stylesheet' />
        <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js'></script>
        <link type="text/css" href='src/model/css/style.css' rel="stylesheet"></link>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Signika:wght@300&display=swap" rel="stylesheet">   
    </header>
</html>
<body>
<?php
    require 'src/controller/Controller.php';
    require 'src/model/Model.php';
    require 'src/view/View.php';

    $model = new Model();
    $controller = new Controller($model);
    $view = new View($controller, $model);
    
    if (isset($_GET['action']) && !empty($_GET['action'])) {
        $controller->{$_GET['action']}();
    }
    
    echo $view->output();
?>
</body>