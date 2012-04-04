<?php
/**
 * Copyright 2012, Zubin Khavarian (http://zubink.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2012, Zubin Khavarian (http://zubink.com)
 * @link http://zubink.com
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>

<h2><?php echo $title_for_layout; ?></h2>

<?php echo $this->element('navigation'); ?>

<?php

echo $this->Form->create('Picklist', array(
    'url' => $this->here,
    'class' => 'responsive'
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