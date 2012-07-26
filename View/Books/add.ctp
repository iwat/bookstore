<?php
echo $this->Form->create();
echo $this->Form->input('publisher_id');
echo $this->Form->input('title');
echo $this->Form->input('released');
echo $this->Form->input('isbn13');
echo $this->Form->input('price');
echo $this->Form->end('Add');
