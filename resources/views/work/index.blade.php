<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Works</h1>
    <a href="{{ route('work.create') }}">Add New Work</a>

    <table>
        <tr>
            <th>ID</th>
            <th>WorkName</th>
            <th>Department</th>
            <th>action</th>
        </tr>
        @foreach ($work as $works)
        <tr>

            <td>{{ $works->id }}</td>
            <td>{{ $works->workname }}</td>
            <td> {{ $works->department['name']??''}}</td>
             {{-- @dd($works->department['name']) --}}
            {{-- <td>{{$works->department['name']}}</td> --}}
            {{-- <td>{{ $works->find($works->department_id)->get('name')}}</td> --}}

            <td>
                <form action="{{ route('work.destroy',$works->id) }}" method="POST">
                    {{-- <a class="btn btn-info" href="{{ route('posts.show',$post->id) }}">Show</a> --}}
                    <a href="{{ route('work.edit',$works->id) }}">Edit</a>
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