<h1><?php echo $title_for_layout; ?></h1>

<?php echo $this->element('navigation'); ?>

<?php
echo $this->Form->create('PicklistOption', array(
    'url' => $this->here,
    'class'=>'responsive'
));

echo $this->Form->input('picklist_id', array(
    'type' => 'hidden',
    'value' => $picklist_id
));

echo $this->Form->input('pl_key', array(
    'label' => 'Picklist Option Key'
));

echo $this->Form->input('pl_value', array(
    'label' => 'Picklist Option Value'
));

echo $this->Form->input('category');

echo $this->Form->input('group');

echo $this->Form->input('active', array(
    'checked' => true
));

echo $this->Form->submit('Add');
echo $this->Form->end();

?>