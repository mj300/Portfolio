@extends('layouts.app')

@section('title',"Home")

@section('content')

    @include('sections.main')
    
    @include('sections.about')

    @include('sections.resume')

    <x-portfolio />

			
 @endsection