<?php
class PublishersController extends AppController
{
	public $paginate = array(
		'limit' => 5,
		'order' => array('Publisher.name' => 'asc'),
		'contain' => false
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

	public function add()
	{
		if ($this->request->data)
		{
			if ($this->Publisher->save($this->request->data))
			{
				$this->flash('Added Successfully', array('action' => 'index'));
			}
		}
	}

	public function edit($publisherId)
	{
		if ($this->request->data)
		{
			if ($this->Publisher->save($this->request->data))
			{
				$this->flash('Edited Successfully', array('action' => 'index'));
			}
		}
		else
		{
			$this->request->data = $this->Publisher->findById($publisherId);
		}
	}
}
