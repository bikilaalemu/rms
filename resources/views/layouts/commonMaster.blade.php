<!DOCTYPE html>

<html class="light-style layout-menu-fixed" data-theme="theme-default" data-assets-path="{{ asset('/assets') . '/' }}" data-base-url="{{url('/')}}" data-framework="laravel" data-template="vertical-menu-laravel-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

<<<<<<< HEAD
  <title>@yield('title') | Sneat - HTML Laravel Free Admin Template </title>
=======
  <title>@yield('title')  </title>
>>>>>>> 91224eec7d61b0977d31fd1b1d5f4070b50c39bc
  <meta name="description" content="{{ config('variables.templateDescription') ? config('variables.templateDescription') : '' }}" />
  <meta name="keywords" content="{{ config('variables.templateKeyword') ? config('variables.templateKeyword') : '' }}">
  <!-- laravel CRUD token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Canonical SEO -->
  <link rel="canonical" href="{{ config('variables.productPage') ? config('variables.productPage') : '' }}">
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" />

<<<<<<< HEAD
  

=======
>>>>>>> 91224eec7d61b0977d31fd1b1d5f4070b50c39bc
  <!-- Include Styles -->
  @include('layouts/sections/styles')

  <!-- Include Scripts for customizer, helper, analytics, config -->
  @include('layouts/sections/scriptsIncludes')
</head>

<body>
<<<<<<< HEAD
  

=======
>>>>>>> 91224eec7d61b0977d31fd1b1d5f4070b50c39bc
  <!-- Layout Content -->
  @yield('layoutContent')
  <!--/ Layout Content -->

<<<<<<< HEAD
  
=======
  {{-- remove while creating package --}}
 
  {{-- remove while creating package end --}}
>>>>>>> 91224eec7d61b0977d31fd1b1d5f4070b50c39bc

  <!-- Include Scripts -->
  @include('layouts/sections/scripts')

</body>

</html>
