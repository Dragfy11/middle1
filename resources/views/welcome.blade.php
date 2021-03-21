@extends('template.main')

@section('content')
@if (Auth::check())
Vous êtes connecté
@else
Il n'y a pas d'user connecté {{Auth::check()}}
@endif
<div class="my-3 p-3 bg-white rounded shadow-sm">
    @if ($errors->any())
        <div class="alert bg-warning">
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
        </div>
    @endif
    <h2 class="border-bottom border-gray pb-2 mb-0">Accueil</h2>
    <div class="media text-muted pt-3">
      <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <strong class="d-block text-gray-dark">Bienvenue</strong>
        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
      </p>
    </div>          
  </div>

@endsection