<html>
<head>
    <title>Create Table</title>
</head>
<body>
    <form method="POST" action="/create-table">
        @csrf
        <label for="name">Table Name:</label>
        <input type="text" id="name" name="name">
        <button type="submit">Create Table</button>
    </form>
</body>
</html>