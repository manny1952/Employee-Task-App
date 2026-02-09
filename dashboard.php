<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

// Get user information from session
$user_name = $_SESSION['name'];
$user_role = $_SESSION['role'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Task App - Dashboard</title>
    <link rel="stylesheet" href="dashboard-styles.css">
</head>
<body>
    <div class="dashboard-container">
        <header>
            <h1>Employee Task Dashboard</h1>
            <div class="user-info">
                <span class="welcome-text">Welcome, <?php echo htmlspecialchars($user_name); ?>!</span>
                <span class="role-badge"><?php echo htmlspecialchars($user_role); ?></span>
                <a href="logout.php" class="logout-btn">Logout</a>
            </div>
        </header>
        
        <main>
            <div class="dashboard-content">
                <h2>Dashboard Overview</h2>
                <p>This is where your task management features will be displayed.</p>
                
                <div class="info-cards">
                    <div class="card">
                        <h3>Tasks</h3>
                        <p class="card-number">0</p>
                        <p class="card-label">Active Tasks</p>
                    </div>
                    
                    <div class="card">
                        <h3>Completed</h3>
                        <p class="card-number">0</p>
                        <p class="card-label">Tasks Done</p>
                    </div>
                    
                    <div class="card">
                        <h3>Pending</h3>
                        <p class="card-number">0</p>
                        <p class="card-label">Awaiting Review</p>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
