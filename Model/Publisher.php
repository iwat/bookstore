<?php
class Publisher extends AppModel
{
	public $hasMany = array('Book');

	public $validate = array(
		'name' => array(
			'rule-1' => array(
				'rule' => 'notEmpty',
				'message' => 'This field must not be empty.'
			),
			'rule-2' => array(
				'rule' => 'isUnique',
				'message' => 'This field must be unique.'
			)
		)
	);
}

