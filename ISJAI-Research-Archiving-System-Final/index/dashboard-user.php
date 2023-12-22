<!-- PHP Connection to database -->
<?php
session_start();
error_reporting(E_ERROR);
include('../php connect/connect.php');
include('../php functions/common_functions.php');
if(!isset($_SESSION['admin_name'])) {
    header('location: login.php');
}
?>

<!-- HTML Start -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | ISJAI Research Hub</title>
    <link rel="stylesheet" href="../css/dashboard-user.css?v=<?php echo time(); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400;500;600&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!-- Sidebar --> 
    <div class="sidebar">
        <div class="logo_details">
            <a href="./dashboard.php" class="logo"><img src="../images/logo.png" alt="ISJAI Logo"></a>
            <span class="logo_name">ISJAI</span>
        </div>
        <!-- Sidebar Links --> 
        <ul class="nav_links">
            <li><a href="dashboard.php" class="records"><i class='bx bxs-data'></i><span class="link_name">Student Records</span></a></li>
            <li><a href="dashboard-documents-strands.php" class="docs"><i class='bx bxs-file'></i><span class="link_name">Research Documents</span></a></li>
            <li><a href="add_stem.php" class="adding"><i class='bx bxs-file-plus'></i><span class="link_name">Add STEM Document</span></a></li>
            <li><a href="add_abm.php" class="adding"><i class='bx bxs-file-plus'></i><span class="link_name">Add ABM Document</span></a></li>
            <li><a href="add_humms.php" class="adding"><i class='bx bxs-file-plus'></i><span class="link_name">Add HUMSS Document</span></a></li>
            <li><a href="dashboard-user.php" class="user"><i class='bx bxs-user-circle'></i><span class="link_name">Admin</span></a></li>
            <li><a href="logout.php" class="log-out" onclick="return confirm('Are you sure you want to Log Out?')"><i class='bx bx-log-out'></i><span class="link_name">Logout</span></a></li>
        </ul>
    </div>
    <!-- Dashboard Section --> 
    <section class="dashboard">
        <nav>
            <div class="menu">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard-admin">USER DETAILS</span>
            </div>
        </nav>
        <!-- Admin Details --> 
        <div class="about-user">
            <h2 class="admin-name">Admin Name: <?php echo $_SESSION['admin_name']; ?></h2>
            <h2 class="admin-email">Email Address: <?php echo $_SESSION['admin_email']; ?></h2>
        </div>
    </section>
    <!-- Link to JavaScript --> 
    <script src="../js/sidebar.js"></script>
    
</body>
</html>
