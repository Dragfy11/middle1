@extends('template.main')

@section('content')
@if (Auth::check())
Vous êtes connecté
@else
Il n'y a pas d'user connecté {{Auth::check()}}
@endif
@endsection