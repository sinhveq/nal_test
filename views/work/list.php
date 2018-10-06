
<table width="70%" style="margin:auto" border="1px">
    <th>id</th>
    <th>Work Name</th>
    <th>Status</th>
    <th>Starting Date</th>
    <th>Ending Date</th>
    <th></th>
    <th></th>
    <th></th>
    <?php

    foreach($data as $key)
    {
        ?>
        <tr>
            <td><?php echo $key['id'] ?></td>
            <td><?php echo $key['work_name'] ?></td>
            <td><?php echo $key['status'] ?></td>
            <td><?php echo $key['starting_date'] ?></td>
            <td><?php echo $key['ending_date'] ?></td>
            <td>
                <a href="<?php echo BASEURL ?>index.php?controller=work&action=add">add</a>
            </td>
            <td>
                <a href="<?php echo BASEURL ?>index.php?controller=work&action=edit&id=<?php echo $key['id'] ?>">edit</a>
            </td>
            <td>
                <a href="<?php echo BASEURL ?>index.php?controller=work&action=del&id=<?php echo $key['id'] ?>">delete</a>
            </td>
        </tr>
    <?php } ?>
</table>
<a href="<?php echo BASEURL ?>index.php?controller=work&action=add"><h1>Add New</h1></a>



