<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Use of Font Awesome</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background-color: white;
            font-family: Arial, sans-serif;
            padding: 40px;
        }
        
        h1 {
            text-align: center;
            margin-bottom: 40px;
        }
        
        .icons-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 30px;
            max-width: 1000px;
            margin: 0 auto;
        }
        
        .icon-item {
            text-align: center;
        }
        
        .icon-item i {
            font-size: 2.5em;
            color: #333;
            display: block;
            margin-bottom: 10px;
        }
        
        .icon-label {
            font-size: 0.9em;
            color: #666;
        }
    </style>
</head>
<body>
    <h1>use of font awesome</h1>
    
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
            <i class="fas fa-download"></i>
            <div class="icon-label">Download</div>
        </div>
        
        <div class="icon-item">
            <i class="fas fa-upload"></i>
            <div class="icon-label">Upload</div>
        </div>

    </div>
</body>
</html>