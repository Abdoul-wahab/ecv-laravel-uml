@extends('layouts.sidebar')

@section('content')
<div class="flex flex-wrap -m-4">
    @if(Auth::user()->isAdmin())
        <div class="mx-20">
            cc admin
        </div>
    @endif
    @if(Auth::user()->isClient())
        <div class="mx-20">
            cc client
        </div>
    @endif
    @if(Auth::user()->isEmploye())
        <div class="mx-20">
            cc toto
        </div>
    @endif
</div>
@endsection
