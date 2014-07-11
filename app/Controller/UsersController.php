<?php
App::uses('AppController', 'Controller');
/**
 * Usuarios Controller
 *
 * @property Usuario $Usuario
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

	public function index(){
		if($this->request->is( array('post', 'put') ) ):
			$this->User->create();
			if($this->User->save($this->request->data)):
				$this->Session->setFlash("Usuário salvo com sucesso");
				return $this->redirect(array('action' => 'index'));
			endif;

			$this->Session->setFlash("Usuário não pode ser salvo");
			return $this->redirect(array('action' => 'index'));

		endif;
	}

	public function login(){
		if($this->request->is( array('post', 'put') ) ):
			if($this->Auth->login()):
				return $this->redirect($this->Auth->redirect());
			endif;

			$this->Session->setFlash(__('Usuário e/ou senha incorreto(s)'));
			return $this->redirect(array('action' => 'index'));

		endif;
	}

	public function logout(){
		if($this->Auth->logout()):
			return $this->redirect($this->Auth->redirect());
		endif;
	}

	public function beforeFilter() {
		$this->Auth->allow(array('action'=>'index'));
	}
}
