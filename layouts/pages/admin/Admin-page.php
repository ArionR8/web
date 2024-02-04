<?php include(__DIR__ . "/Admin-navigator.php");  ?>

<div class="display-box-dashboart">
        <div class="Numbers-of-users">
                <p>The number of users<br><?= $totalUsers; ?></p>
        </div>
        <div class="Numbers-of-reports">
                <p>The number of reports<br><?= $totalReports; ?></p>
        </div>
        <div class="Numbers-of-books">
                <p>The number of books<br><?= $totalBooks; ?></p>
        </div>  
</div>
<?php include(__DIR__ . "/Admin-footer.php");  ?>