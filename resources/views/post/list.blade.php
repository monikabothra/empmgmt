<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        {{-- @dd($post); --}}
   
    <h1>List of Posts</h1>
    <?php 
    $sno = 0;
    ?>
    
    <table>
        <tr>
            <th>s.no</th>
            <th>Title</th>
            <th>Body</th>
            
        </tr>
        @foreach($arr_body as $posts)
        <?php 
    $sno++;
    ?>
            <tr >
                <td>{{$sno}}</td>
                <td>{{ $posts->title}}</td>
                <td>{{ $posts->body}}</td>
                
            </tr>
        @endforeach
    </table>
</body>
</html>