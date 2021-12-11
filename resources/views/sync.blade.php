<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    <title>Index</title>
</head>
<body>

<div class="container">
    <div class="row">
        <form action="{{ route('sync.store') }}" method="POST">
            @csrf      
            <input type="text" name="name">
            <input type="email" name="email">
            <input type="password" name="password">
            <input type="submit" name="" id="">
        </form>
        <hr>
        <table class="table table-dark table-hover">
            @foreach ($for as $foo)
                <tr>
                    <td>{{ $foo->id }}</td>
                    <td>{{ $foo->name }}</td>
                    <td>{{ $foo->email }}</td>
                    <td>{{ $foo->password }}</td>
                </tr>
            @endforeach
           
        </table>
    </div>
</div>
</body>
</html>