<?php
class CartController extends AppController
{
	public $uses = array('Book');

	public function beforeFilter()
	{
		$this->Auth->allow('*');
	}

	public function addBook($bookId)
	{
		$booksInCart = $this->Session->read('Cart.books');

		if (isset($booksInCart[$bookId]))
			$booksInCart[$bookId]++;
		else
			$booksInCart[$bookId] = 1;

		$this->Session->write('Cart.books', $booksInCart);
		$this->flash('Added to Cart', $this->referer());
	}
}
