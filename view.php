<?php
 
// View: exibe os números e as operações
 
class View {
    private $model;
 
    public function __construct(Model $model) {
        $this->model = $model;
    }
 
    public function output() {
        return "
        <h1>Calculadora MVC</h1>
        <p>Número 1: {$this->model->numero1}</p>
        <p>Número 2: {$this->model->numero2}</p>
        <p><strong>Resultado:</strong> {$this->model->resultado}</p>
 
        <a href='index.php?action=somar'>Somar</a>
        <a href='index.php?action=subtrair'>Subtrair</a>
        <a href='index.php?action=multiplicar'>Multiplicar</a>
        <a href='index.php?action=dividir'>Dividir</a>
        ";
    }
}
