<?php

namespace src\controllers;

use core\Controller;
use src\models\Usuario;

class UsuarioController extends Controller
{
    public function add()
    {
        $this->render('add');
    }

    public function addAction()
    {
        $nome = filter_input(INPUT_POST, 'nome');
        $email = filter_input(INPUT_POST, 'email');

        if ($nome && $email) {
            # se o email não existir no banco
            if (!Usuario::select()->where('email', $email)->execute()) {
                # inserir registro
                Usuario::insert([
                    'name' => $nome,
                    'email' => $email
                ])->execute();

                $this->redirect('/');
                exit;
            }    
        }

        $this->redirect('/novo');
    }

    public function edit($args)
    {
        # recuperar o usuario pelo id
        // $usuario = Usuario::select()->where('id', $args['id'])->first();
        $usuario = Usuario::select()->find($args['id']);
        # mandar para o formulario de editar
        $this->render('edit', ['usuario' => $usuario]);
    }

    public function editAction($args)
    {
        # dados do formulario
        $nome = filter_input(INPUT_POST, 'nome');
        $email = filter_input(INPUT_POST, 'email');

        # atualizar o usuario
        Usuario::update()
                ->set('name', $nome)
                ->set('email', $email)
                ->where('id', $args['id'])
                ->execute();

        # voltar para home
        $this->redirect('/');
    }

    public function del($args)
    {
        # recupera o usuario pelo id e exclui o registro
        Usuario::delete()
            ->where('id', $args['id'])
        ->execute();
        # volta para home
        $this->redirect('/');
    }
}