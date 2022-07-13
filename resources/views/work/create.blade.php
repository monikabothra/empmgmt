<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Add work</h1>
    {{-- @dd($dept); --}}
    <form method="POST" action="/work" >
        @csrf
        <label for="dept">Department:</label><br>
         <select name="department_id">
          <option value="">--- Select Department ---</option>
          @foreach ($dept as $dept)
              <option value="{{ $dept->id }}" name="{{'department_id'}}">{{ $dept->name }}</option>
          @endforeach
          {{-- @foreach ($dept as $dept)
              <option value="{{ $dept->id }}">{{ $dept->name }}</option>
          @endforeach --}}
      </select>
        
         
        <label for="work">Work Name:</label>
        <input type="text" id="work" name="workname"><br><br>
        <input type="submit" value="Submit">
      </form>
</body>
</html>