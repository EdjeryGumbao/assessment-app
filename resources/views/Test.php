<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="website.css">
   
</head>
<body>

<div class="sidebar">
    <div class="top">
        <div class="logo">
            <i class="bx bxl-codepen"></i>
            <span>SideBar</span>
        </div>
        <i class="bx bx-menu" id="btn"></i>
    </div>
    <div class="user">
        <img src="https://assets.bonappetit.com/photos/5c62e4a3e81bbf522a9579ce/5:4/w_2815,h_2252,c_limit/milk-bread.jpg" alt="s" class="user-img">
        <div>
            <p class="bold">Bread Pan</p>
            <p>Admin</p>
        </div>
    </div> 
    <ul>
        <li>
            <a href="#">
                <i class="bx bxs-grid-alt"> </i>
                <span class="nav-item">Dashboard</span>
            </a>
            <span class="tooltip">Dashboard</span>
        </li>

        <li>
            <a href="#">
                <i class="bx bxs-user-account"> </i>
                <span class="nav-item">User account</span>
            </a>
            <span class="tooltip">User account</span>
        </li>        
        <li>
            <a href="#">
                <i class="bx bx-support"> </i>
                <span class="nav-item">Help and support</span>
            </a>
            <span class="tooltip">Help and support</span>
        </li>        
        <li>
            <a href="#">
                <i class="bx bxs-landmark"> </i>
                <span class="nav-item">Privacy policy</span>
            </a>
            <span class="tooltip">Privacy Policy</span>
        </li>       
         <li>
            <a href="#">
                <i class="bx bxs-wrench"> </i>
                <span class="nav-item">Data assessment tools</span>
            </a>
            <span class="tooltip">Data assessment tools</span>
        </li>       
         <li>
            <a href="#">
                <i class="bx bx-comment-detail"> </i>
                <span class="nav-item">Forums</span>
            </a>
            <span class="tooltip">Forums</span>
        </li>               
    </ul>
</div>

    <div class="main-content">
        <div class="container">
            <h1>holder</h1>
        </div>
    </div>

</body>

<script>
    let btn = document.querySelector('#btn')
    let sidebar = document.querySelector('.sidebar')

    btn.onclick = function () {
        sidebar.classList.toggle('active')
    };
</script>

</html>

