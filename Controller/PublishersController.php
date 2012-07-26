<?php
class PublishersController extends AppController
{
	public function beforeFilter()
	{
		$this->start = microtime(true);
	}

	public function beforeRender()
	{
		$this->set('spent', microtime(true) - $this->start);
	}

	public function index()
	{
		$publishers = $this->Publisher->find('all');
		$this->set(compact('publishers'));
	}
}

