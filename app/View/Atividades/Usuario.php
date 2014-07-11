<?php
/**
 *
 *
 * @copyright     Copyright (c) Okupo Soluções Empresarias LTDA
 * @link          http://okupo.com.br
 * @package       app.View.Layouts
 * @since         jobyou v 2.0
 */

App::uses('AuthComponent', 'Controller/Component');

class Usuario extends AppModel{
	public $name = 'Usuario';

	public $validate = array(
        /*'title' => array(
            'rule' => 'notEmpty'
        ),
        'body' => array(
            'rule' => 'notEmpty'
        )*/
        'username' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A username is required'
            )
        )
    );

    public $hasOne = array(
        'Fisica' => array(
            'className' => 'Fisica',
            'type' => 'LEFT'),
        'Juridica' => array(
            'className' => 'Juridica',
            'type' => 'LEFT'),
        'Atividade' => array( 
            'className' => 'Atividade', 
            'foreignkey' => 'usuario_id', 
            'type' => 'RIGHT',
            'order' => 'dt_envio DESC')
        /*'Comunidades' => array( 
            'className' => 'Comunidade_part', 
            'foreignkey' => 'usuario_id', 
            'type' => 'RIGHT',)*/
    );

 /*public $hasOne = array( //Alias do relacionamento, geralmente usamos o nome do model 
        'Fisica' => array( //nome do model a ser relacionado 
            'className' => 'Fisica', 
            //condições para a recuperação 
            //'conditions' => array('Atividade.id' => 'Usuario.id'), 
            //quando setado para true e o metodo delete() é chamado com //cascaded igual a true todas as dependências serão excluídas também ‘
            //'dependent' => false, 
            //Array com o nome dos campos que deve ser recuperados 
            //'fields' => array('Fisica.nome'), //campo da chave estrangeira, por padrão esse campo deve ser o //model mais _id 
            //'foreignkey' => 'usuario_id', 
            //'limit'         => '1'
            //array com a ordem ‘order’ => array(‘Perfil.nome’=>’asc’) ,
            'type' => 'INNER'),
        'Atividade' => array( //nome do model a ser relacionado 
            'className' => 'Atividade', 
            //condições para a recuperação 
            //'conditions' => array('Atividade.usuario_id' => 'Fisica.usuario_id'),
            //'conditions' => array('Atividade.usuario_id' => 'Usuario.id'), 
            //quando setado para true e o metodo delete() é chamado com //cascaded igual a true todas as dependências serão excluídas também ‘
            //'dependent' => false, 
            //Array com o nome dos campos que deve ser recuperados 
            //'fields' => array('Fisica.nome'), //campo da chave estrangeira, por padrão esse campo deve ser o //model mais _id 
            'foreignkey' => 'usuario_id', 
            //'limit'         => '1',
            //array com a ordem ‘order’ => array(‘Perfil.nome’=>’asc’) ,
            'type' => 'LEFT')

    );*/
}

