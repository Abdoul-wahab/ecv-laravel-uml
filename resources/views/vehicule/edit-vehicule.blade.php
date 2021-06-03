@extends('layouts.sidebar')

@section('content')
<form method="POST" action="{{ route('vehicule-store') }}">
  @csrf
<div class="flex mt-10 items-center justify-center">
  <div class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8 items-center bg-white rounded-lg w-8/12">
      @if(session()->has('error'))
          <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            {{ session()->get('error') }}
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
              <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
            </span>
          </div>
      @endif

      @if(session()->has('success'))
        <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
          <div class="flex">
            <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
            <div>
              {{ session()->get('success') }}
            </div>
          </div>
        </div>
      @endif

      <div class="sm:col-span-2">
        <label for="type" class="block text-sm font-medium text-gray-700">Type de véhicule *</label>
        <div class="mt-1">
          <select name="type" id="type" type="text" value="{{ old('type') }}" class="border-2 py-3 px-4 block w-full shadow-sm border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent focus:shadow hover:border-purple-400 @error('type') border-red-500 @enderror"
              >
              <option value="" ></option>
              <option value="Utilitaire" >Utilitaire</option>
              <option value="Leger" >Leger</option>
          </select>
          @error('type')
              <span class="text-red-500 text-xs" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
        </div>
    </div>
      <div>
          <label for="prix" class="block text-sm font-medium text-gray-700">Prix HT de location *</label>
          <div class="mt-1">
              <input type="number" name="prix" id="prix" autocomplete="prix"
                  class="border-2 py-3 px-4 block w-full shadow-sm border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent focus:shadow hover:border-purple-400 @error('type') border-red-500 @enderror">
                @error('prix')
                  <span class="text-red-500 text-xs" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
                </div>
      </div>

      <div>
          <label for="permis" class="block text-sm font-medium text-gray-700">Permis *</label>
          <div class="mt-1">
              <select type="text" name="permis" id="permis" autocomplete="permis" class="border-2 py-3 px-4 block w-full shadow-sm border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent focus:shadow hover:border-purple-400 @error('type') border-red-500 @enderror">
                  <option value="" ></option>
                  <option value="a" >A</option>
                  <option value="b" >B</option>
                  <option value="c" >C</option>
              </select>
              @error('permis')
                <span class="text-red-500 text-xs" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
          </div>
      </div>

      <div class="sm:col-span-2">
          <label for="marque" class="block text-sm font-medium text-gray-700">Marque de véhicule *</label>
          <div class="mt-1">
              <input type="text" name="marque" id="marque" autocomplete="marque" class="border-2 py-3 px-4 block w-full shadow-sm border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent focus:shadow hover:border-purple-400 @error('type') border-red-500 @enderror"
                  >
              @error('marque')
                <span class="text-red-500 text-xs" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
          </div>
      </div>

      <div class="sm:col-span-2 @error('type') border-red-500 @enderror">
        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">Upload Photo</label>
          <div class='flex items-center justify-center w-full'>
              <label class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
                  <div class='flex flex-col items-center justify-center pt-7'>
                    <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    <p class='lowercase text-sm text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider'>Select a photo</p>
                    @error('image')
                      <span class="text-red-500 text-xs" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                    <p id="file-upload-filename" class='lowercase text-sm text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider'></p>
                  </div>
                <input id="file-upload" type='file' name="image" class="hidden" />
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
  </div>
</div>
</form>
@endsection