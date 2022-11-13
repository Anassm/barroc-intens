<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @foreach($productsen as $product)
    <section class="text-gray-600 body-font overflow-hidden bg-amber-100">
        <div class="container px-5 py-24 mx-auto">
          <div class="lg:w-4/5 mx-auto flex flex-wrap">
            <div class="lg:w-1/2 w-full lg:pr-10 lg:py-6 mb-6 lg:mb-0">
              <h2 class="text-sm title-font text-gray-800 tracking-widest">Barroc-intens</h2>
              <h1 class="text-gray-800 text-3xl title-font font-medium mb-4">  {{$product->name}}</h1>
              <div class="flex mb-4">
                <a class="flex-grow text-gray-400 border-b-2 border-gray-400 py-2 text-lg px-1">Description</a>
              </div>
              <p class=" text-gray-800 leading-relaxed mb-4">{{$product->description}}</p>
              <div class="flex space-x-4">
                <a href="/enkelpagina/{{$product->id}}"><button class="flex ml-auto text-white hover:text-gray-800 bg-gray-800 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded">Product</button></a>
                <a href="/contact"><button class="flex ml-auto text-white hover:text-gray-800 bg-gray-800 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded">Offerte aanvragen </button></a>
                </button>
              </div>
            </div>
            <img alt="ecommerce" class=" lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="{{ asset('images/' . $product->image_path) }}">
          </div>
        </div>
      </section>
@endforeach
</body>

</html>