<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello world</title>
</head>
<body>
    <h1>hello world</h1>
    <p><?=$res;?></p>
    {{ $res }}
    {{ $name }}
    {{route('post',['id'=>3])}}
    {{route('admin.post',['id'=>3])}}
</body>
</html>