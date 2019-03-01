<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{action("PollController@store")}}" method="POST">
        @csrf
        
        <label for="">Enter your Question</label>
        <input type="text" name="title">

        <button type="submit">Add Question</button>
        
    
    </form>
    
</body>
</html>