
    <section class=text-gray-600 body-font overflow-hidden">
      <div class="container px-5 py-24 mx-auto">
        <div class="lg:w-4/5 mx-auto flex flex-wrap">
          <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="{{ asset('images/' . $products->image_path) }}">
          <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
            <h2 class="text-sm title-font text-gray-500 tracking-widest">Barroc-intens</h2>
            <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{$products->name}}</h1>
            <div class="flex mb-4">
              <a class="flex-grow text-gray-400 border-b-2 border-gray-400 py-2 text-lg px-1">Description</a>
            </div>
            <p class="leading-relaxed">{{$products->description}}</p>
            <div class="flex">
              <a href="/contact"><button class="mt-7 flex ml-auto hover:text-gray-800 text-white bg-gray-800 border-0 py-2 px-6 focus:outline-none hover:bg-gray-400 rounded">Offerte aanvragen</button></a>
              <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
            </svg>
          </button>
        </div>
          </div>
        </div>
      </div>
    </section>