<?php
require_once 'Model.php';
require_once 'View.php';
require_once 'Controller.php';
 
// Criar instancias
$model = new Model();
$controller = new Controller($model);
$view = new View($model);
 
// Verificar a ação e executra
 
if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'somar':
            $controller->somar();
            break;
        case 'subtrair':
            $controller->subtrair();
            break;
        case 'multiplicar':
            $controller->multiplicar();
            break;
        case 'dividir':
            $controller->dividir();
            break;
 
    }
}
 
// Exibe na tela
 
echo $view->output();
