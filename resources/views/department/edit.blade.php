<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit Department</h1>
    <form action="/department/update" method = "post">
        @csrf
        
            <label for="name">Department name:</label>
            <input type="text" name ="name" id = "name" value = "{{$department->name}}">
        
        {{-- <div class="form-group">
            <label for="lastname">Lastname:</label>
            <input type="text" name = "lastname" id = "lastname" class="form-control" required value = "{{$employee->lastname}}">
        </div>
        <div class="form-group">
            <label for="department">Department:</label>
            <input type="text" name = "department" id = "department" class="form-control" required value = "{{$employee->department}}">
        </div>
        <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="text" name = "phone" id = "phone" class="form-control" required value = "{{$employee->phone}}">
        </div> --}}
        <input type="hidden" name="id" value = "{{$department->id}}">
        <button type = "submit">Submit</button>
    </form>
</body>
</html>