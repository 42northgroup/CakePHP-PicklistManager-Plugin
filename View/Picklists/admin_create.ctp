<h1><?php echo $title_for_layout; ?></h1>

<?php echo $this->element('navigation'); ?>

<h2>Picklist - Create</h2>

<?php

echo $this->Form->create('Picklist', array(
    'url' => $this->here,
    'class' => 'content'
));

echo $this->Form->input('alias');

echo $this->Form->input('name');

echo $this->Form->input('description', array(
    'type' => 'textarea'
));

echo $this->Form->input('active', array(
    'checked' => true
));

echo $this->Form->submit('Create');
echo $this->Form->end();

?>