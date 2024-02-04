<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="/web/layouts/pages/admin/style-for-admin.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/web/layouts/pages/admin/style-for-admin-page-users.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/web/layouts/pages/admin/style-for-books.css?v=<?php echo time(); ?>">
</head>
<body>

<?php
    include './Users.php';
    $userCount = new Users();
    $totalUsers = $userCount->countUsers();
    $getUsers = $userCount->getAllUsers();
    $totalReports = $userCount->countReportsByUsers();
    $totalBooks = $userCount->countBooks();
    $getAllReports = $userCount->getAllReports();
?>

<div class="admin-container">
    <div class="admin-nav">
        <ul>
            <li><A href="./Admin-page.php" target="_self"><img src="/web/assets/images-home-library/white-house.png" class="home-image-nav"> Dashboard</A></li>
            <li><a href="./Admin-reports.php" target="_self">&#128195; Reports</a></li>
            <li><A href="./Add-books.php">&#128366; Books</A></li>
            <li><a>&#127869; Dishes</a></li>
            <li><A href="./Admin-page-users.php" target="_self"><img src="../../../assets/images-home-library/white-profile.png" class="home-image-nav"> Users</A></li>
            <li><A href="../../pages/Home-page.php" target="_self"><img src="/web/assets/images-home-library/logout.png" class="logout-img-nav"> Log out</A></li>
        </ul>
    </div>
<div class="admin-display-box">