
@extends('layouts.sidebar')

@section('content')

<div class="flex mt-10 items-center justify-center">
  <div class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8 items-center bg-white rounded-lg w-8/12">
    <form method="POST" action="#">
      @csrf
    

      <div class="sm:col-span-2">
          <label for="marque" class="block text-sm font-medium text-gray-700">First Name</label>
          <div class="mt-1">
              <input type="text" name="first_name" id="first_name" autocomplete="first_name" class="border-2 py-3 px-4 block w-full shadow-sm border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent focus:shadow hover:border-purple-400"
                  >
          </div>
      </div>

      <div class="sm:col-span-2">
          <label for="marque" class="block text-sm font-medium text-gray-700">Last Name</label>
          <div class="mt-1">
              <input type="text" name="last_name" id="last_name" autocomplete="last_name" class="border-2 py-3 px-4 block w-full shadow-sm border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent focus:shadow hover:border-purple-400"
                  >
          </div>
      </div>

      <div class="sm:col-span-2">
          <label for="marque" class="block text-sm font-medium text-gray-700">Email</label>
          <div class="mt-1">
              <input type="email" name="email" id="email" autocomplete="email" class="border-2 py-3 px-4 block w-full shadow-sm border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent focus:shadow hover:border-purple-400"
                  >
          </div>
      </div>

      <div class="sm:col-span-2">
          <label for="marque" class="block text-sm font-medium text-gray-700">Password</label>
          <div class="mt-1">
              <input type="password" name="password" id="password" autocomplete="password" class="border-2 py-3 px-4 block w-full shadow-sm border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent focus:shadow hover:border-purple-400"
                  >
          </div>
      </div>



      <script>
          var input = document.getElementById( 'file-upload' );
        var infoArea = document.getElementById( 'file-upload-filename' );
        input.addEventListener( 'change', showFileName );
        function showFileName( event ) {
            var input = event.srcElement;
            var fileName = input.files[0].name;
            infoArea.textContent = fileName;
        }
      </script>


      <div class="sm:col-span-2">
        <button type="submit"
            class="w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-purple-600 hover:bg-purple-700 focus:outline-none">
            Créer
        </button>
      </div>
    </form>
  </div>
</div>
@endsection