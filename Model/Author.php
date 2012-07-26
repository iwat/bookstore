<?php
class Author extends AppModel
{
	public $hasAndBelongsToMany = array('Book');
}
