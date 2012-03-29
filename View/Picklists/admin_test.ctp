<h1><?php echo $title_for_layout; ?></h1>

<?php echo $this->element('navigation'); ?>

<h3><u>Picklist Name</u>: <?php echo $picklist['Picklist']['name']; ?></h3>

<div class="column-block">
    <div class="six columns alpha">
        <h3>Grouped</h3>

        <?php
        echo $this->Form->create('Picklist', array(
            'class'=>'responsive'
        ));

        echo $this->Form->select('Picklist', $picklist_grouped, array(
            'empty' => false
        ));
        //echo $this->Form->submit();
        echo $this->Form->end();
        ?>
    </div>

    <div class="six columns alpha">
        <h3>Flat</h3>

        <?php
        echo $this->Form->create('Picklist', array(
            'class'=>'responsive'
        ));

        echo $this->Form->select('Picklist', $picklist_flat, array(
            'empty' => false
        ));
        //echo $this->Form->submit();
        echo $this->Form->end();
        ?>
    </div>
</div>