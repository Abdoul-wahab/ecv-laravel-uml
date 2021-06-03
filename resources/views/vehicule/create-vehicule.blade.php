@extends('layouts.sidebar')

@section('content')

<div class="flex mt-10 items-center justify-center">
  <div class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8 items-center bg-white rounded-lg w-8/12">
    <form method="POST" action="#">
      @csrf
      <div class="sm:col-span-2">
        <label for="type" class="block text-sm font-medium text-gray-700">Type de véhicule *</label>
        <div class="mt-1">
          <select name="type" id="type" type="text" value="{{ old('type') }}" class="border-2 py-3 px-4 block w-full shadow-sm border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent focus:shadow hover:border-purple-400 @error('type') border-red-500 @enderror"
              >
              <option value="" ></option>
              <option value="Utilitaire" >Utilitaire</option>
              <option value="Leger" >Leger</option>
          </select>
        </div>
    </div>
      <div>
          <label for="price" class="block text-sm font-medium text-gray-700">Prix HT de location *</label>
          <div class="mt-1">
              <input type="number" name="price" id="price" autocomplete="price"
                  class="border-2 py-3 px-4 block w-full shadow-sm border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent focus:shadow hover:border-purple-400">
          </div>
      </div>

      <div>
          <label for="light" class="block text-sm font-medium text-gray-700">Permis *</label>
          <div class="mt-1">
              <select type="text" name="light" id="light" autocomplete="light" class="border-2 py-3 px-4 block w-full shadow-sm border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent focus:shadow hover:border-purple-400">
                  <option value="" ></option>
                  <option value="a" >A</option>
                  <option value="b" >B</option>
                  <option value="c" >C</option>
              </select>
              @error('type')
                <span class="text-red-500 text-xs" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
          </div>
      </div>

      <div class="sm:col-span-2">
          <label for="marque" class="block text-sm font-medium text-gray-700">Marque de véhicule *</label>
          <div class="mt-1">
              <input type="text" name="marque" id="marque" autocomplete="marque" class="border-2 py-3 px-4 block w-full shadow-sm border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent focus:shadow hover:border-purple-400"
                  >
          </div>
      </div>


      <div class="sm:col-span-2">
        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">Upload Photo</label>
          <div class='flex items-center justify-center w-full'>
              <label class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
                  <div class='flex flex-col items-center justify-center pt-7'>
                    <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    <p class='lowercase text-sm text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider'>Select a photo</p>
                    <p id="file-upload-filename" class='lowercase text-sm text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider'></p>
                  </div>
                <input id="file-upload" type='file' class="hidden" />
              </label>
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