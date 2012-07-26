<?php
class BooksController extends AppController
{
	public function index()
	{
		$books = $this->Book->find('all');
		$this->set(compact('books'));
	}
}

