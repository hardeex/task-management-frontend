@extends('components.base')
@section('title', 'Smart Task Management')

@section('hero')
    <!-- Hero Section -->
    @include('components.hero')    
@endsection


@section('content')

<!---time--->
@include('components.time')

   <!--- How it works --->
   @include('components.how-it-works')


        <!-- Feature Section -->
    @include('components.features')


       <!--- integration -->
   @include('components.integration')

    
   <!-- Pricing Section -->
   @include('components.pricing')


   <!---- Why choose Us--->
   @include('components.why-us')

     <!--- visualization-->
    @include('components.visualization')


@endsection