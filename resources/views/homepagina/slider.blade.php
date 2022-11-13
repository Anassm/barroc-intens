<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>   
    * {
            box-sizing: border-box;
        }

        body {
            font-family: Verdana, sans-serif;
        }

        .mySlides {
            display: none;
        }

        .photo {
            vertical-align: middle;
            border-radius: 30px;
            height:600px;
            /* margin-bottom:20px; */
            /* margin-top:80px; */
           box-shadow:  #212121 0px 10px 38px;
           background-color: #212121;
        }

        /* Slideshow container */
        .slideshow-container {
            /* margin-top:80px; */
            width:70%;
            margin-left: 15%;
           
        }

        .active {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .text {
                font-size: 11px
            }
        }</style>
</head>
<main>
<body>
@foreach($products as $product)
    <section class="bg-amber-100 text-black body-font">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
          <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-black">{{$product->name}}
            </h1>
            <p class="mb-8 leading-relaxed">{{$product->description}}</p>
            <div class="flex justify-center space-x-4 ">
                <a href="/enkelpagina/{{$product->id}}"><button class="  hover:text-gray-800 inline-flex text-white bg-gray-800 border-0 py-2 px-6 focus:outline-none hover:bg-gray-400 rounded text-lg">Product</button></a>
                <a href="/contact"><button class=" hover:text-gray-800 inline-flex text-white bg-gray-800 border-0 py-2 px-6 focus:outline-none hover:bg-gray-400 rounded text-lg">offerte aanvragen </button></a>
            </div>
          </div>
          <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
            <img class="object-cover object-center rounded" alt="hero" src="{{ asset('images/' . $product->image_path) }}">
          </div>
        </div>
      </section>
@endforeach
</body>
        </main>
</html>