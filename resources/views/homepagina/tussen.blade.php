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
</style>
<div class="card">
@foreach($producten as $product)
<div class="each">
<section class="text-gray-800 body-font">
  <div class="container px-5 py-24 mx-auto">
        <div class="h-full border-2 border-gray-300 border-opacity-60 rounded-lg overflow-hidden">
          <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{ asset('images/' . $product->image_path) }}" alt="blog">
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

