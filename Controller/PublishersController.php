<?php
class PublishersController extends AppController
{
	public $paginate = array(
		'limit' => 5,
		'order' => array('Publisher.name' => 'asc')
	);

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
		$publishers = $this->paginate('Publisher');
		$this->set(compact('publishers'));
	}
}
