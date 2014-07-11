<?php
/**
 *
 *
 * @copyright     Copyright (c) Okupo Soluções Profissionais LTDA
 * @link          http://okupo.com.br
 * @package       app.View.Layouts
 * @since         jobyou v 2.0
 */

class AtividadesController extends AppController{
    public $helpers    = array('Html', 'Form');
    public $name       = 'Atividades';
    public $components = array('Session');

    

    /*function beforeFilter(){  
        //Set Authentication System 
        $this->initAuth(); 
    }  
      
     * Setup Authentication Component 
    
    protected function initAuth(){ 
       $this->Auth->sessionKey = 'SomeRandomStringValue'; 
       $this->set('authSessionKey', $this->Auth->sessionKey); 
    }  

    */
    public function index(){
        $this->set('atividades', $this->Atividade->Usuario->find('all', array(
            'fields' => array(
                'Atividade.id', 'Atividade.mensagem', 'Atividade.user_id', 'Usuario.username', 'Fisica.name', 'Atividade.created', 'Usuario.avatar', 'Juridica.nome_contato', 'Usuario.role'
            )
        )));
    }
    public function postar(){
        if ($this->request->is('post')) {
            if($this->request->data['Atividade']['mensagem']){
                if ($this->Atividade->save($this->request->data)) {
                    $this->Session->setFlash('Post efetuado com sucesso');
                    $this->redirect(array('action' => 'index'));
                }
            }
            else{
                $this->Session->setFlash('Quer postar sem digitar nada? Vai ficar querendo');
            }
        }
    }

    public function excluir($id) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Atividade->delete($id)) {
            $this->Session->setFlash('Post excluído com sucesso');
            $this->redirect(array('action' => 'index'));
        }
    }

    function comentar($id) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Atividade->delete($id)) {
            //$this->Session->setFlash('The post with id: ' . $id . ' has been deleted.');
            $this->redirect(array('action' => 'index'));
        }
    }

    function favoritar($id) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Atividade->delete($id)) {
            //$this->Session->setFlash('The post with id: ' . $id . ' has been deleted.');
            $this->redirect(array('action' => 'index'));
        }
    }

    function compartilhar($id) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Atividade->delete($id)) {
            //$this->Session->setFlash('The post with id: ' . $id . ' has been deleted.');
            $this->redirect(array('action' => 'index'));
        }
    }
}


    /*public function add(){
        $this->Usuario->save($this->request->data);
        if ($this->request->is('post')) {
            if ($this->Usuario->save($this->request->data)){
                echo "<br><br><br>Nada nada<br><br><br>";
                $this->Session->setFlash('Your post has been saved.');
                $this->redirect(array('action' => 'index'));
            }
        }   
    }

    public function login(){
        echo "me ajude deus;";
        $this->Usuario->save($this->request->data);
    }

    /*

    /*public function beforeFilter(){
        parent:beforeFilter();
        $this->Auth->allow('login');
    }

	public function login() {
	    if ($this->Auth->login()) {
	        $this->redirect($this->Auth->redirect());
	    } else {
	        $this->Session->setFlash(__('Usuario e senha inválido, tente novamente!'));
	    }
	}

	public function logout() {
	    $this->redirect($this->Auth->logout());
	}*/
?>