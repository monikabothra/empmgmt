<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('work.update',$work->id) }}" method="POST">
        @csrf
    
        @method('PUT')
        <input type="hidden" name="id" value = "{{$work->id}}">
        <label for="name">work name:</label>
                <input type="text" name ="workname" id = "name" value = "{{$work->workname}}"><br>
                <label for="dept">Department:</label>
             <select name="department_id">
              <option value="">--- Select Department ---</option>
              @foreach ($dept as $dept)
                  <option value="{{ $dept->id }}" name="{{'department_id'}}">{{ $dept->name }}</option>
              @endforeach
              <input type="submit" value="Submit">
        </form>
</body>
</html>
