@extends('layouts.sidebar')

@section('content')
<div class="flex mt-10 items-center justify-center">
    <div class="grid bg-white rounded-lg shadow-xl">
    <form method="POST" action="#">
      @csrf
      <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
        <div class="grid grid-cols-1">
          <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Prix de location</label>
          <input name="prix" id="prix" type="number" value="{{ old('prix') }}" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Prix/location" />
        </div>
        <div class="grid grid-cols-1">
          <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Quantite</label>
          <input name="quantite" id="quantite" type="number" value="{{ old('quantite') }}" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Quantite" />
        </div>
      </div>

      <div class="grid grid-cols-1 mt-5 mx-7">
        <div class="md:w-full">
          <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Permis</label>
          <select name="permis" id="permis" type="permis" value="{{ old('permis') }}" 
            class="w-96 border-2 rounded py-2 w-full hover:border-purple-400 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent focus:shadow @error('permis') border-red-500 @enderror">
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

    <div class="grid grid-cols-1 mt-5 mx-7">
      <div class="md:w-full">
        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Type</label>
        <select name="type" id="type" type="type" value="{{ old('type') }}" 
          class="w-96 border-2 rounded py-2 w-full hover:border-purple-400 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent focus:shadow @error('type') border-red-500 @enderror">
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
  
    <div class="grid grid-cols-1 mt-5 mx-7">
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
  
    <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
      <button class='w-auto bg-purple-500 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Create</button>
    </div>
    </form>
    </div>
  </div>

@endsection