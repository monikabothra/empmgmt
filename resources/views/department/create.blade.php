<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Add a Department</h1>
    <form method="POST" action="/department" >
        @csrf
        <label for="department">Department:</label><br>
        <input type="text" id="dept" name="name"><br><br>
        <input type="submit" value="Submit">
      </form>
</body>
</html>