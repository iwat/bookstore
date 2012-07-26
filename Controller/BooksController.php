<?php
class BooksController extends AppController
{
	public $paginate = array(
		'limit' => 5,
		'order' => array('Book.released' => 'desc')
	);

	public function index()
	{
		$books = $this->paginate('Book');
		$this->set(compact('books'));
	}

	public function add()
	{
		if ($this->request->data)
		{
			if ($this->Book->save($this->request->data))
			{
				$this->flash('Added Successfully', array('action' => 'index'));
			}
		}

		$authors = $this->Book->Author->find('list', array('order' => 'name'));
		$publishers = $this->Book->Publisher->find('list', array('order' => 'name'));
		$this->set(compact('authors', 'publishers'));
	}

	public function edit($bookId)
	{
		if ($this->request->data)
		{
			if ($this->Book->save($this->request->data))
			{
				$this->flash('Added Successfully', array('action' => 'index'));
			}
		}
		else
		{
			$this->request->data = $this->Book->findById($bookId);
		}

		$authors = $this->Book->Author->find('list', array('order' => 'name'));
		$publishers = $this->Book->Publisher->find('list', array('order' => 'name'));
		$this->set(compact('authors', 'publishers'));
	}
}
