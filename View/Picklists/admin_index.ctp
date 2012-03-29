<h1><?php echo $title_for_layout; ?></h1>

<?php echo $this->element('navigation'); ?>

<?php if(!empty($picklists)): ?>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Alias</th>
                <th>Active</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($picklists as $tempPicklist): ?>
                <tr class="top">
                    <td>
                        <a href="/admin/picklist_manager/picklists/view/<?php echo $tempPicklist['Picklist']['id']; ?>"
                           title="View picklist">
                            <?php echo $tempPicklist['Picklist']['name']; ?>
                        </a>
                    </td>
                    
                    <td>
                        <?php echo $tempPicklist['Picklist']['alias']; ?>
                    </td>

                    <td>
                        <?php echo ($tempPicklist['Picklist']['active'])? 'Yes': 'No'; ?>
                    </td>
                </tr>
                <tr class="bottom">
                    <td colspan="3">
                        <a href="/admin/picklist_manager/picklists/delete/<?php echo $tempPicklist['Picklist']['id']; ?>"
                           title="Delete picklist"
                           class="delete-confirm">Delete</a>
                        /
                        <a href="/admin/picklist_manager/picklists/edit/<?php echo $tempPicklist['Picklist']['id']; ?>"
                           title="Edit picklist">Edit</a>
                        /
                        <a href="/admin/picklist_manager/picklists/test/<?php echo $tempPicklist['Picklist']['id']; ?>"
                           title="Test picklist HTML in grouped and flat versions">Test</a>
                        
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

<?php else: ?>

    <h3>No picklists created 
    <a href="/admin/picklist_manager/picklists/create"
       title="Create a new picklist">Create one</a></h3>

<?php endif; ?>
