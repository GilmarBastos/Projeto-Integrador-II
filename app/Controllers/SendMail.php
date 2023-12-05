<?php 
namespace App\Controllers;
use App\Models\FormModel;
use CodeIgniter\Controller;
class SendMail extends Controller
{
    public function index() 
	{
        echo view('common/header');
        echo view('mailview');
        return view('common/footer');
    }

    function enviarEmail() { 
        $to = $this->request->getVar('mailTo');
        // $subject = $this->request->getVar('subject');
        // $message = $this->request->getVar('message');
        $nome = $this->request->getVar('nome');
        $created_at = $this->request->getVar('created_at');
        $sim_funcionou = $this->request->getVar('sim_funcionou');
        $nao_funcionou = $this->request->getVar('nao_funcionou');
        $nao_implementou = $this->request->getVar('nao_implementou');

        $subject = 'Teste Webaplication censo.iasocial.com.br';
        $message = "Nome: $nome<br><br>
        Data do teste: $created_at<br>
        O que testou e funcionou:<br>
        $sim_funcionou<br><br>
        O que testou e não funcionou – O que deve ser corrigido:<br>
        $nao_funcionou<br><br>
        Funcionalidade não testada (faltou ou não foi implementada):<br>
        $nao_implementou
        <br><br>
        Grato pela sua contribuição, estamos trabalhando para melhorar o site.<br>
        Atenciosamente<br>
        Gilmar Bastos<br>
        Graduando de Engenharia de Sofware<br>
        Univerisade Cruzeiro do Sul<br>
        ";

        $email = \Config\Services::email();
        $email->setFrom('maz.bst@gmail.com', 'Gilmar');
        $email->setCC('maz.bst@gmail.com');
        //$email->setBCC('teste@example.com');
        $email->setTo($to);
        
        
        $email->setSubject($subject);
        $email->setMessage($message);
        if ($email->send()) 
		{
            return redirect()->to('mensagem')->with('mensagem',[
                'mensagem' => 'Email enviado com sucesso',
                'tipo' => 'success'
            ]);
        } 
		else 
		{
            return redirect()->to('mensagem')->with('mensagem',[
                'mensagem' => 'Erro ao tentar enviar Email, tente mais tarde...',
                'tipo' => 'danger'
            ]);
            // $data = $email->printDebugger(['headers']);
            // print_r($data);
        }
    }
}