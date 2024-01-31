<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit Product  </h1>
    <div>
        @if ($errors->any())
            <ul>
             @foreach ( $errors->all() as $error )
                 <li>{{ $error}}</li>
             @endforeach
            </ul>            
        @endif
        @if (session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
  
    <form method="post" action="{{route('products.update', ['product'=>$product])}}">
        @csrf
        @method('put')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{$product->name}}"><br><br>
      
        <label for="qty">Quantity:</label>
        <input type="text" id="qty" name="qty"  value="{{$product->qty}}"><br><br>
      
        <label for="price">Price:</label>
        <input type="text" id="price" name="price"  value="{{$product->price}}"><br><br>
      
        <label for="description">Description:</label>
        <input id="description" name="description"  value="{{$product->description}}"><br><br>
      
        <input type="submit" value="Update">
      </form>
      
</body>
</html>