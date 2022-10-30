<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class=" justify-center my-3.5  shadow-gray-800">
        <div class="justify-center">
        @foreach($categories->products as $product)
            {{$product->name}}
            {{$product->description}}
            <img src="{{ asset('images/' . $product->image_path) }}" alt="" style="height: 200px">
            {{$product->price}}
        </div>
        </a>
        @endforeach
    </div>

</body>
</html>