<style>
  .card{
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
  }
  .each{
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .h1{
    text-shadow: 2px 2px #212121;
    text-align: center;
    font-size: 250%;
    font-weight: bold;
    color: #ffd700;
  }
  hr{
    color:red !important;
    height: 50px;
    width: 500px;
    margin-left: 50px;
    margin-right: 50px;
    z-index: 999;
  }
  </style>
  <div class="h1">
  <h1>{{$categories->name}}</h1>
  </div>

  <div class="card">
    
    @foreach($categories->products as $product)
  <div class="each">
  <section class="text-gray-800 body-font">
    <div class="container px-5 py-24 mx-auto">
          <div class="h-full border-2 border-gray-500 border-opacity-60 rounded-lg overflow-hidden">
            <img class=" bg-amber-300 lg:h-48 md:h-36 w-full object-cover object-center" src="{{ asset('images/' . $product->image_path) }}" alt="blog">
            <div class="p-6 bg-white">
              <h1 class="title-font text-lg font-medium text-gray-800 mb-3">{{$product->name}}</h1>
              <p class="leading-relaxed mb-3">{{$product->description}}</p>
              <div class="flex items-center flex-wrap ">
                <a href="/enkelpagina/{{$product->id}}"class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Read More
                  <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
        </<div>
  </section>
  </div>
  @endforeach
  </div>









