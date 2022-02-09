@extends('layouts.app')

@section('content')

<div class="container">
    <div class="py-2">
        <a href="{{ route('offre.create')}}"class="btn btn-primary">Nouvelle Offre</a>
    </div>
    <div class='row row-cols-4'>
         @foreach ($offres as $o)
        <div>
            @include('layouts.loffre',['o'=>$o])
        </div>
        @endforeach
    </div>
   
</div>

@endsection