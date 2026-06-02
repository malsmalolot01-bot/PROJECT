<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            background-color: white;
            font-family: Arial, sans-serif;
            display: flex;
        }
        
        .sidebar {
            width: 250px;
            background-color: black;
            height: 100vh;
            padding: 30px 20px;
            position: fixed;
            left: 0;
            top: 0;
        }
        
        .sidebar h2 {
            color: white;
            font-size: 1.5em;
            margin-bottom: 40px;
            text-align: center;
        }
        
        .sidebar-menu {
            list-style: none;
        }
        
        .sidebar-menu li {
            margin-bottom: 20px;
        }
        
        .sidebar-menu a {
            color: white;
            text-decoration: none;
            font-size: 1em;
            display: flex;
            align-items: center;
            padding: 12px;
        }
        
        .sidebar-menu i {
            margin-right: 12px;
            width: 20px;
        }
        
        .main-content {
            margin-left: 250px;
            width: calc(100% - 250px);
            padding: 40px 20px;
        }
        
        h1 {
            text-align: center;
            margin-bottom: 50px;
            color: black;
            font-size: 2.5em;
        }
        
        .icons-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 40px;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .icon-item {
            text-align: center;
        }
        
        .icon-item i {
            font-size: 3em;
            color: red;
            display: block;
            margin-bottom: 15px;
        }
        
        .icon-label {
            font-size: 1em;
            color: black;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Menu</h2>
        <ul class="sidebar-menu">
            <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="#"><i class="fas fa-user"></i> Profile</a></li>
            <li><a href="#"><i class="fas fa-cog"></i> Settings</a></li>
            <li><a href="#"><i class="fas fa-envelope"></i> Messages</a></li>
            <li><a href="#"><i class="fas fa-bell"></i> Notifications</a></li>
            <li><a href="#"><i class="fas fa-question-circle"></i> Help</a></li>
            <li><a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </ul>
    </div>
    
    <div class="main-content">
        <h1>Font Awesome Icons</h1>
        
        <div class="icons-grid">
            <div class="icon-item">
                <i class="fas fa-user"></i>
                <div class="icon-label">User</div>
            </div>
            
            <div class="icon-item">
                <i class="fas fa-home"></i>
                <div class="icon-label">Home</div>
            </div>
            
            <div class="icon-item">
                <i class="fas fa-cog"></i>
                <div class="icon-label">Settings</div>
            </div>
            
            <div class="icon-item">
                <i class="fas fa-trash"></i>
                <div class="icon-label">Delete</div>
            </div>
            
            <div class="icon-item">
                <i class="fas fa-search"></i>
                <div class="icon-label">Search</div>
            </div>
            
            <div class="icon-item">
                <i class="fas fa-bell"></i>
                <div class="icon-label">Notifications</div>
            </div>
            
            <div class="icon-item">
                <i class="fas fa-envelope"></i>
                <div class="icon-label">Email</div>
            </div>
            
            <div class="icon-item">
                <i class="fas fa-heart"></i>
                <div class="icon-label">Favorites</div>
            </div>
            
            <div class="icon-item">
                <i class="fas fa-edit"></i>
                <div class="icon-label">Edit</div>
            </div>
            
            <div class="icon-item">
                <i class="fas fa-download"></i>
                <div class="icon-label">Download</div>
            </div>
        </div>
    </div>
</body>
</html>