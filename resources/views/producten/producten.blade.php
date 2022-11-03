
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="bg-gray-600 grid-rows-6">  

      
      <div class="my-4 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class=" h-80 rounded-t-lg" src="{{ asset('images/' . $product->image_path) }}" alt=""  />
        </a>
        <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-800 dark:text-white">{{$product->name}}</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> {{$product->description}}</p>
            <a href="/contact" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-gray-800 bg-blue-700 rounded-lg hover:bg-amber-300 focus:ring-4 focus:outline-none focus:ring-amber-300 dark:bg-amber-300 dark:hover:bg-amber-300 dark:focus:ring-amber-300">
              Offerte aanvragen
              <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </a>
            <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-gray-800 bg-blue-700 rounded-lg hover:bg-amber-300 focus:ring-4 focus:outline-none focus:ring-amber-300 dark:bg-amber-300 dark:hover:bg-amber-300 dark:focus:ring-amber-300">
                Read more
                <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
    </div>
  
    </td>
  </tr>
  </table>
  
  @endforeach
  

      


</body>
</html>
<script>
    function myFunction() {
      // Declare variables
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
    
      // Loop through all table rows, and hide those who don't match the search query
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
    </script>
