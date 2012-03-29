<h1><?php echo $title_for_layout; ?></h1>

<?php echo $this->element('navigation'); ?>

<table class="vertical-label-tb">
    <tbody>
        <tr>
            <td>
                Alias
            </td>
            
            <td>
                <?php echo $picklist['Picklist']['alias']; ?>
            </td>
        </tr>
        
        <tr>
            <td>
                Name
            </td>

            <td>
                <?php echo $picklist['Picklist']['name']; ?>
            </td>
        </tr>

        <tr>
            <td>
                Description
            </td>

            <td>
                <?php echo $picklist['Picklist']['description']; ?>
            </td>
        </tr>
        
        <tr>
            <td>
                Active
            </td>

            <td>
                <?php echo ($picklist['Picklist']['active'])? 'Yes': 'No'; ?>
            </td>
        </tr>
    </tbody>
</table>

<div>
    <h2 style="display: inline-block;">Picklist Options</h2>
    <a href="/admin/picklist_manager/picklists/add_option/<?php echo $picklist['Picklist']['id']; ?>"
       title="Add new picklist option to this picklist">Add picklist option</a>
</div>

<?php if(!empty($picklist['PicklistOption'])): ?>
    <table>
        <thead>
            <tr>
                <th>Category</th>
                <th>Group</th>

                <th>List Key</th>
                <th>List Value</th>

                <th>Active</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($picklist['PicklistOption'] as $tempPicklistOption): ?>
                <tr>
                    <td><?php echo $tempPicklistOption['category']; ?></td>

                    <td><?php echo $tempPicklistOption['group']; ?></td>

                    <td>
                        <a href="/admin/picklist_manager/picklists/edit_option/<?php echo $tempPicklistOption['id']; ?>"
                            title="Edit picklist option">
                            <?php echo $tempPicklistOption['pl_key']; ?>
                        </a>
                    </td>

                    <td><?php echo $tempPicklistOption['pl_value']; ?></td>

                    <td><?php echo ($tempPicklistOption['active'])? 'Yes': 'No'; ?></td>

                    <td>
                        <a href="/admin/picklist_manager/picklists/edit_option/<?php
                            echo $tempPicklistOption['id']; ?>"
                            title="Edit picklist option">Edit</a>
                        /
                        <a href="/admin/picklist_manager/picklists/delete_option/<?php
                            echo $tempPicklistOption['id']; ?>"
                            title="Delete picklist option"
                            class="delete-confirm">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <div style="text-align: center;">
        <h3>No picklist options created</h3>
        <a href="/admin/picklist_manager/picklists/add_option/<?php echo $picklist['Picklist']['id']; ?>"
            title="Add new picklist option to this picklist">Add picklist option</a>
    </div>
<?php endif; ?>