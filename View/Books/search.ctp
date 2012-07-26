<div class="index">
	<?php
	echo $this->Form->create('Book', array('action' => 'index', 'type' => 'get'));
	echo $this->Form->input('q', array('label' => 'Query'));
	echo $this->Form->end('Search');
	?>
</div>
<?= $this->element('Books/actions'); ?>
