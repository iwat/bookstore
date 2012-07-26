<div class="index">
	<?php
	echo $this->Form->create('Book', array('action' => 'index', 'type' => 'get'));
	echo $this->Form->input('q', array('label' => 'Query'));
	echo $this->Form->end('Search');
	?>
</div>
<div class="actions">
	<h3>Actions</h3>
	<ul>
		<li><?= $this->Html->link('New Book', array('action' => 'add')); ?></li>
		<li><?= $this->Html->link('Search', array('action' => 'search')); ?></li>
	</ul>
</div>
