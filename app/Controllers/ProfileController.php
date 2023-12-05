<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\EtariaModel;

class ProfileController extends Controller
{
    public function index()
    {
        $session = session();
        $saudacao = "Olá ".$session->get('name');
        echo view('common/header');
        echo view('profile',["sessao" => $saudacao]);
        return view('common/footer');
    }

    public function store()
    {
        helper(['form']);
        $rules = [
            'idade' => 'required|min_length[2]|max_length[50]'
        ];
                
        if($this->validate($rules)){
            $etariaModel = new EtariaModel();
            $data = [
                'idade'     => $this->request->getVar('idade'),
                'situacao'    => $this->request->getVar('situacao')
            ];
            $etariaModel->save($data);

            return redirect()->to('mensagem')->with('mensagem',[
                'mensagem' => 'Sua pesquisa de idade foi enviada com sucesso',
                'tipo' => 'success'
            ]);
        }else{
            $data['validation'] = $this->validator;
            echo view('profile', $data);
        }
          
    }
}