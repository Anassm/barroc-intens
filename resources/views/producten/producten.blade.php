
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
h1{
    text-shadow: 2px 2px 5px grey ;
    font-size: 40px;
    text-align: center;
}
</style>
<body class="bg-white">
<h1>{{$categories->name}}</h1>
<hr/>
<div class="grid grid-cols-3 w-full justify-items-center">
      @foreach($categories->products as $product)
      
      <div class="shadow-2xl shadow-gray-900 my-4 max-w-sm bg-white rounded-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class=" h-80 rounded-t-lg" src="{{ asset('images/' . $product->image_path) }}" alt=""  />
        </a>
        <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-800 dark:text-white">{{$product->name}}</h5>
            </a>
            <a href="/contact" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-gray-800 bg-blue-700 rounded-lg hover:bg-amber-300 focus:ring-4 focus:outline-none focus:ring-amber-300 dark:bg-amber-300 dark:hover:bg-amber-300 dark:focus:ring-amber-300">
              Offerte aanvragen
              <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </a>
            <a href="/enkelpagina/{{$product->id}}" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-gray-800 bg-blue-700 rounded-lg hover:bg-amber-300 focus:ring-4 focus:outline-none focus:ring-amber-300 dark:bg-amber-300 dark:hover:bg-amber-300 dark:focus:ring-amber-300">
                Read more
                <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
    </div>
  @endforeach
  </div>
</body>
</html>