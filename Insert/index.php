<html> 
<header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</header>
<body>
<div class="container mt-3">
    <h1 class="display-1">Test</h1>
    <form action="insert.php" method="post">
        <table class="table">
            <tr>
                <td>Name: </td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>nachname: </td>
                <td><input type="text" name="nachname"></td>
            </tr>
        </table>
        <input class="btn btn-primary" type="submit" value="Submit">
    </form> 
    <br>
    </div>
</body>
</html>
