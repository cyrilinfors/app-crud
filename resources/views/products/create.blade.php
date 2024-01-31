<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Product Create</h1>
    <div>
        @if ($errors->any())
            <ul>
             @foreach ( $errors->all() as $error )
                 <li>{{ $error}}</li>
             @endforeach
            </ul>            
        @endif
    </div>
    <form method="post" action="{{route('products.store')}}">
        @csrf
        @method('post')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>
      
        <label for="qty">Quantity:</label>
        <input type="text" id="qty" name="qty"><br><br>
      
        <label for="price">Price:</label>
        <input type="text" id="price" name="price"><br><br>
      
        <label for="description">Description:</label>
        <textarea id="description" name="description"></textarea><br><br>
      
        <input type="submit" value="Submit">
      </form>
      
</body>
</html>