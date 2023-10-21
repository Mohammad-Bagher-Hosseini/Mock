<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit AP</title>
</head>
<body>
    <form action="{{route('admin.edit.post_AP')}}" method="post">
        name : <br>
        <input type="text" name="name" value="{{$ap->name}}"><br><br>
        point : <br>
        <select name="point_id">
            @foreach (App\Models\Point::all() as $point)
                @if ($ap->point->id == $point->id)
                    <option value="{{$point->id}}" selected>{{$point->name}}</option>
                @endif
                <option value="{{$point->id}}">{{$point->name}}</option>
            @endforeach
        </select><br><br>
        <input type="submit" value="edit">
    </form>
</body>
</html>
