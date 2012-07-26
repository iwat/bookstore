<?php
class UsersController extends AppController
{
	public function login()
	{
		if ($this->request->is('post'))
		{
			if ($this->Auth->login())
			{
				$this->redirect($this->Auth->redirect());
			}
			else
			{
				$this->Session->setFlash('Your username or password was incorrect.');
			}
		}
	}

	public function logout()
	{
		$this->redirect($this->Auth->logout());
	}
}
