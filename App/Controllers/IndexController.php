<?php

namespace App\Controllers;

use MF\Controller\Action;
use MF\Model\Container;

use App\Models\Produto;
use App\Models\Info;



class indexController extends Action{

    

    public function index() {
        
        $produto = Container::getModel('Produto');

        $produtos = $produto->getProdutos();
        
        $this->view->dados = $produtos;

        $this->render('index', 'layout1');

        //require_once "../App/Views/index/index.phtml";
    }

    public function sobreNos() {
        
        $info = Container::getModel('Info');
        
        $informacoes = $info->getInfo();

        $this->view->dados = $informacoes;
        $this->render('sobreNos', 'layout1');

        //require_once "../App/Views/index/sobreNos.phtml";
    }

    
};

?>