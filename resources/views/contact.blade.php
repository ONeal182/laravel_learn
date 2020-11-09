<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>
<body>
<form action="{{route('contact')}}" method="post">
        {{-- {{ csrf_field() }} --}}
        {{-- {{method_field('PUT')}} --}}
        @method('PUT')
        @csrf
        <input type="text" name="name" id="">
        <input type="email" name="email" id="">
        <input type="submit" value="submit">
    </form>
</body>
</html>