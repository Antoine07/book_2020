@extends('layouts.master')

@section('content')

<h1>Page des catégories </h1>

@endsection

@section('title')
   Bienvenu sur la page des catégories
@endsection

@section('footer')
{{-- 
    On veut récupérer ce qu'il y a dans le footer et ajouter un menu spécifique 
    parent permet de récupérer le contenu du parent
    si on ne met pas parent on écrase le contenu du parent
--}}

@parent

<ul>
    <li>Les dernières catégories en relation avec le sujet ...</li>
</ul>

@endsection