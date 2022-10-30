<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="my-5 border-solid rounded">
    <div class="grid justify-items-start">
        @foreach($categories->products as $product)
            {{$product->name}}
            {{$product->description}}
            <img src="{{ asset('images/' . $product->image_path) }}" alt="" style="height: 200px">
            {{$product->price}}
        @endforeach
    </div>
</div>
</body>
</html>