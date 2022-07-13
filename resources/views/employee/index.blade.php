<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- @dd($employee); --}}
    <h1>Employees List</h1>
    <a href="{{ route('employee.create') }}">Add New Employee</a>

    <table border="1">
        <tr>
            <th>name</th>
            <th>number</th>
            <th>email</th>
            <th>address</th>
            <th>date of birth</th>
            <th>qualifications</th>
            <th>keyskills</th>
            <th>employee status</th>
            <th>father/husband name</th>
            <th>his contact </th>
            <th>date of joinning</th>
            <th>branch</th>
            <th>field</th>
            <th>department</th>
            <th>position</th>
            <th>salary</th>
            <th>office in time</th>
            <th>office out time</th>
            <th>photo</th>
            <th>remarks</th>
            <th>action</th>



            
        </tr>
        @foreach ($employee as $employee)
        <tr>

            <td>{{ $employee->empname }}</td>
            <td>{{ $employee->empnumber }}</td>
            <td>{{ $employee->empemail }}</td>
            <td>{{ $employee->empaddress }}</td>
            <td>{{ $employee->empdob }}</td>
            <td>{{ $employee->empqualification }}</td>
            <td>{{ $employee->empkeyskills }}</td>
            <td>{{ $employee->empstatus }}</td>
            <td>{{ $employee->fhname }}</td>
            <td>{{ $employee->hisnumber }}</td>
            <td>{{ $employee->empdoj }}</td>
            <td>{{ $employee->empbranch }}</td>
            <td>{{ $employee->empfield }}</td>
            <td>{{ $employee->empdpt }}</td>
            <td>{{ $employee->empposition }}</td>
            <td>{{ $employee->empsalary }}</td>
            <td>{{ $employee->empin }}</td>
            <td>{{ $employee->empout }}</td>
            <td>{{ $employee->photo }}</td>
            <td>{{ $employee->remarks}}</td>
             
            <td>
                <form action="{{ route('employee.destroy',$employee->id) }}" method="POST">
                    {{-- <a class="btn btn-info" href="{{ route('posts.show',$post->id) }}">Show</a> --}}
                
                    <a href="{{ route('employee.edit',$employee->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>