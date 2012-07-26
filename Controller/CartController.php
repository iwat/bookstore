<?php
class CartController extends AppController
{
	public $uses = array('Book');

	public function beforeFilter()
	{
		$this->Auth->allow('*');
	}

	public function index()
	{
		$booksInCart = $this->Session->read('Cart.books');
		$books = $this->Book->findAllById(array_keys($booksInCart));
		$summary = array('amount' => 0, 'total' => 0);

		foreach ($books as &$book)
		{
			$amount = $booksInCart[$book['Book']['id']];
			$total = $amount * $book['Book']['price'];

			$book['Book']['amount'] = $amount;
			$book['Book']['total'] = $total;

			$summary['amount'] += $amount;
			$summary['total'] += $total;
		}

		$this->set(compact('books', 'summary'));
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
