@extends('components.base')
@section('title', 'Smart Task Management')

@section('hero')
    <!-- Hero Section -->
    @include('components.hero')    
@endsection


@section('content')

<!---time--->
@include('components.time')


        <!-- Feature Section -->
    @include('components.features')
       <!--- integration -->
   @include('components.integration')

  


   <!--- How it works --->
   @include('components.how-it-works')
    
   <!-- Pricing Section -->
   @include('components.pricing')


   <!---- Why choose Us--->
   @include('components.why-us')

     <!--- visualization-->
    @include('components.visualization')


@endsection