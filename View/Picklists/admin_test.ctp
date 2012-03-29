<h1><?php echo $title_for_layout; ?></h1>

<?php echo $this->element('navigation'); ?>

<h3><u>Picklist Name</u>: <?php echo $picklist['Picklist']['name']; ?></h3>

<div style="display: inline-block; margin: 10px; padding: 30px; border: 1px solid #aaa;">
    <h1>Picklist Grouped</h1>
    <?php
    echo $this->Form->create();
    echo $this->Form->select('Picklist', $picklist_grouped, array(
        'empty' => false
    ));
    //echo $this->Form->submit();
    echo $this->Form->end();
    ?>
</div>

<div style="display: inline-block; margin: 10px; padding: 30px; border: 1px solid #aaa;">
    <h1>Picklist Flat</h1>
    <?php
    echo $this->Form->create();
    echo $this->Form->select('Picklist', $picklist_flat, array(
        'empty' => false
    ));
    //echo $this->Form->submit();
    echo $this->Form->end();
    ?>
</div>