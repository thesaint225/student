<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update menbers</title>
</head>
<body>
    <h1>edit Menbers</h1>
        <form action="/contact/{{$contact->id}}" method="post">
            @method('PUT')
            @csrf
            <input type="text" name="name" placeholder="name" value="{{$contact->name}}"  id=""><br><br>
            <input type="text" name="email" placeholder="email" value="{{$contact->email}}" id=""><br><br>
            <input type="text" name="service" placeholder="service" value="{{$contact->service}}" id=""><br><br>
            <input type="text" name="description" placeholder="description" value="{{$contact->description}}" id=""><br><br>
            <input type="text" name="phone_number" placeholder="phone_number" value="{{$contact->phone_number}}" id=""><br><br>
            <button type="submit">update</button>
    </form>
</body>
</html>