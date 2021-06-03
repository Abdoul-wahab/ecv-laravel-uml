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
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
        <div class="grid grid-cols-1">
          <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Contenu</label>
          <input name="content" id="content" type="text" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Contenu" />
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
