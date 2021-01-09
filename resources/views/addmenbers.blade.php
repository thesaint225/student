<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menbers Forms</title>
</head>
<body>
    <h1>MENBERS FORMS</h1>
    <form action="/menber" method="post">
        @csrf
        <input type="text" name="name" placeholder="name"  id=""><br><br>
        <input type="text" name="email" placeholder="email" id=""><br><br>
        <input type="text" name="service" placeholder="service" id=""><br><br>
        <input type="text" name="description" placeholder="description" id=""><br><br>
        <input type="text" name="phone_number" placeholder="phone_number" id=""><br><br>
        <button type="submit">save</button>
       
    </form>
   
</body>
</html>