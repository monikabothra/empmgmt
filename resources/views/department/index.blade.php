<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>List of Department</h1>
    <a href="{{ route('department.create') }}">Add New Department</a>

    <table>
        <tr>
            <th>ID</th>
            {{-- <th>First Name</th>
            <th>Last Name</th> --}}
            <th>Department</th>
            <th>Action</th>

            {{-- <th>Phone No.</th> --}}
        </tr>
        @foreach($department as $department)
            <tr >
                <td>{{ $department->id }}</td>
                {{-- <td>{{ $employee->firstname }}</td>
                <td>{{ $employee->lastname }}</td> --}}
                <td>{{ $department->name }}</td>
                {{-- <td>{{ $employee->phone }}</td> --}}
                <td><a href="{{route('department.edit',['id'=>$department->id])}}">Edit</a></td>
                <td><a href="{{route('department.destroy',['id'=>$department->id])}}">Delete</a></td>
                {{-- <td>Edit</a></td>
                <td>Delete</a></td> --}}
            </tr>
        @endforeach
    </table>
</body>
</html>