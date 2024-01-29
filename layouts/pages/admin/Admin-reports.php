<?php include(__DIR__ . "/Admin-navigator.php");  ?>

    <table>
        <tr>
            <th>Username</th>
            <th>The error report</th>
        </tr> 
            <?php for ($i = 0; $i < count($getAllReports); $i++) { ?>
        <tr>
            <td><?php echo $getAllReports[$i]->Username; ?></td>
            <td><?php echo $getAllReports[$i]->text; ?></td>
        </tr>
    <?php } ?>
</table> 

<?php include(__DIR__ . "/Admin-footer.php");  ?>