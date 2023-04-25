<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="css/setquestion.css">
    </head>
    <body>
        <a href="{{ url('dashboard') }}" class="dashboard-button">Dashboard</a>
        <button class="preview-button">Preview</button>


        <div id="AddQuestion" class="content">
            <h3>Add Question</h3>
                @yield('form')
            <br>
            <h3>Added Questions:</h3>
            <div class="">
                @yield('questions')
            </div>
        </div>
    </body>
</html>
