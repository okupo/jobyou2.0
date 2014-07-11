<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property Parceiro $Parceiro
 * @property Arquivo $Arquivo
 * @property Atividade $Atividade
 * @property ComunidadePart $ComunidadePart
 * @property Curriculo $Curriculo
 * @property Fisica $Fisica
 * @property Juridica $Juridica
 * @property RedesAmigo $RedesAmigo
 */

App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {

	public $validate = array(
        'role' => array(
            'valid' => array(
                'rule' => array('inList', array('fisica', 'juridica') ),
                'allowEmpty' => false
            )
        ),

       'username' => array(
            'rule'       => 'alphaNumeric',
            'required'   => true,
            'allowEmpty' => false,
        ),

        'email' => array(
            'rule'       => 'email',
            'required'   => true,
            'allowEmpty' => false,
        ),

        'password' => array(
            'rule'       => 'alphaNumeric',
            'required'   => true,
            'allowEmpty' => false,
            'minLength'  => 5,
        )
    );


	/**
	 * beforeSave callback
	 *
	 * @param $options array
	 * @return boolean
	 */
		public function beforeSave( $options = array() ) {
			if(isset($this->data[$this->alias]['password'])):
				$passwordHasher = new SimplePasswordHasher();
				$this->data[$this->alias]['password'] = $passwordHasher->hash($this->data[$this->alias]['password']);
			endif;

			if($this->find('count', array(
				'conditions' => array(
					'User.username' => $this->data['User']['username'],
				)
			) ) == 0 || $this->find('count', array(
				'conditions' => array(
					'User.email'    =>	$this->data['User']['email']
				)
			) ) == 0 ) :
				return true;
			endif;

			return false;
		}


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Parceiro' => array(
			'className' => 'Parceiro',
			'foreignKey' => 'parceiro_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Arquivo' => array(
			'className' => 'Arquivo',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Atividade' => array(
			'className' => 'Atividade',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'ComunidadePart' => array(
			'className' => 'ComunidadePart',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Curriculo' => array(
			'className' => 'Curriculo',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Fisica' => array(
			'className' => 'Fisica',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Juridica' => array(
			'className' => 'Juridica',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'RedesAmigo' => array(
			'className' => 'RedesAmigo',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

public $hasOne = array(
        'Fisica' => array(
            'className' => 'Fisica',
            'type' => 'LEFT'
        ),

        'Juridica' => array(
            'className' => 'Juridica',
            'type' => 'LEFT'
        ),

        'Atividade' => array(
            'className' => 'Atividade',
            'foreignkey' => 'user_id',
            'type' => 'RIGHT',
            'order' => 'Atividade.created DESC'
        ),

        /*'Comunidades' => array(
            'className' => 'Comunidade_part',
            'foreignkey' => 'user_id',
            'type' => 'RIGHT'
        )*/
    );

}
