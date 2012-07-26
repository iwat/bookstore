<?php
class PublishersController extends AppController
{
	public function index()
	{
		$publishers = $this->Publisher->find('all');
		$this->set(compact('publishers'));
	}
}

