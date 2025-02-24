<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: index.html");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head><title>Dashboard</title>
<link rel="stylesheet" type="text/css"  href="styles.css">
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION["username"]; ?></h1>
    <a href="logout.php"
    class="logout"
    >Logout</a>
</div>
</body>
</html>