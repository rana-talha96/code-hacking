@extends('layouts.main')

@section('content')
  <!-- ======= Hero Section ======= -->
  @include('layouts.hero')
  <!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    @include('layouts.about')
    <!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    @include('layouts.counts')
    <!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    @include('layouts.services')
    <!-- End Services Section -->

    <!-- ======= Features Section ======= -->
    @include('layouts.features')
    <!-- End Features Section -->

    <!-- ======= Testimonials Section ======= -->
    @include('layouts.testmonial')
    <!-- End Testimonials Section -->

    <!-- ======= Portfolio Section ======= -->
    @include('layouts.portfolio')
    <!-- End Portfolio Section -->

    <!-- ======= Pricing Section ======= -->
    @include('layouts.price')
    <!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    @include('layouts.FAQ')
    <!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    @include('layouts.contact')
    <!-- End Contact Section -->

  </main>
  <!-- End #main -->

|@endsection
