<?php include(__DIR__ . "/Admin-navigator.php");  ?>

    <table>
        <tr>
            <th>Full name</th>
            <th>Emails</th>
            <th>User name</th>
        </tr> 
        <?php for ($i = 0; $i < count($getUsers); $i++) { ?>
        <tr>
            <td><?php echo $getUsers[$i]->fullname; ?></td>
            <td><?php echo $getUsers[$i]->email; ?></td>
            <td><?php echo $getUsers[$i]->username; ?></td>
        </tr>
    <?php } ?>
</table> 

<?php include(__DIR__ . "/Admin-footer.php");  ?>