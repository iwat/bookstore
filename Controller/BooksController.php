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
}

