<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="@yield('css', 'css/setquestion.css')">
    <!-- Add any necessary meta tags and stylesheets -->
</head>
<body>
    <nav>
        <!-- Add any navigation links and menus -->
    </nav>
    
    <div class="container">
        @yield('content')
    </div>
    
    <footer>
        <!-- Add any footer content and links -->
    </footer>
    
    <!-- Add any necessary scripts -->
</body>
</html>
