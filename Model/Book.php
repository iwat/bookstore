<?php
class Book extends AppModel
{
	public $belongsTo = array('Publisher');
	public $hasAndBelongsToMany = array('Author');
}
