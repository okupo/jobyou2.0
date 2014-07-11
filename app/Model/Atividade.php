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

App::uses('AppModel', 'Model');
/*App::import('Model', 'Usuario');

    // We need to load the class
    $Users = new Usuario();*/

class Atividade extends AppModel{
	public $name = 'Atividade';

    

    public $belongsTo = array(
        'Usuario' => array( 'className' => 'User', 'foreignKey' => 'user_id')
    );


  

	//public $validate = array(
        /*'title' => array(
            'rule' => 'notEmpty'
        ),
        'body' => array(
            'rule' => 'notEmpty'
        )*/
        /*'username' => array(
            'required' => array(
                'rule' => 'notEmpty',
                'message' => 'A username is required'
            )
        )*/
    //);

     public $validate = array(
        'mensagem' => array(
            'rule'     => 'notEmpty',
            //'required' => true,
            'message'  => "Letters and numbers only"
        )
    );

    /*public function beforeSave($options = array()) {
        if (isset($this->data[$this->alias]['password'])) {
            $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
        }
        return true;
    }*/



    //Query do sorteio: SELECT u.id, display_name FROM wp_bp_activity a INNER JOIN wp_users u ON u.ID = a.user_id WHERE `item_id` = 200465 ORDER BY u.display_name;
}