<?php
echo $this->Form->create('User', array('action' => 'login'));
echo $this->Form->inputs(array(
	'legend' => 'Login',
	'username',
	'password'
));
echo $this->Form->end('Login');
