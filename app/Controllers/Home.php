<?php

namespace App\Controllers;
use \App\Models\EtariaModel;

class Home extends BaseController
{
    //public function index(): string
    public function index() 
    {
        //Popular tabela etarias;
        $db = \Config\Database::connect();
        $countO = $db->query(" SELECT * FROM etarias WHERE situacao ='Obrigatorio' ");
        $countF = $db->query(" SELECT * FROM etarias WHERE situacao ='Facultativo' ");
        $countM = $db->query(" SELECT * FROM etarias WHERE situacao ='Menor de idade' ");

        $countObrigatorio = $countO->getNumRows();
        $countFacultativo = $countF->getNumRows();
        $countMenorIdade = $countM->getNumRows();

        //$table = new \CodeIgniter\View\Table();
        // $query = $db->query('SELECT * FROM etarias');
        // $template = [
        //     'table_open' => '<table id="tableClients" class="table table-bordered table-light">',
        // ];
        // $table->setTemplate($template);
        // $table->setHeading('id','idade', 'situacao', 'created_at');
        // $json = $table->generate($query);
        // //$json = json_encode($table->generate($query));

        echo view('common/header');
        echo view('home',['countObrigatorio'=> $countObrigatorio , 'countFacultativo'=> $countFacultativo , 'countMenorIdade'=> $countMenorIdade]);
        return view('common/footer');
    }
}
