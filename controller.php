<?php
 
class Controller {
    private $model;
 
    public function __construct(Model $model) {
        $this->model = $model;
    }
 
    public function somar() {
        $this->model->resultado = $this->model->numero1 + $this->model->numero2;
    }
 
    public function subtrair() {
        $this->model->resultado = $this->model->numero1 - $this->model->numero2;
    }
   
    public function multiplicar() {
        $this->model->resultado = $this->model->numero1 * $this->model->numero2;
    }
   
    public function dividir() {
        if ($this->model->numero2 != 0) {
            $this->model->resultado = $this->model->numero1 / $this->model->numero2;
        } else {
            $this->model->resultado = "Erro: divisão por zero";
        }
    }
}
