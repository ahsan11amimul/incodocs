@extends('pages.layouts.master')
@section('title')
   IncoDocs:Invoicing platform 
@endsection
@section('content')
<div class="container-fluid">
   <!-- Navbar -->
 @include('pages.partials.navbar') 

  <!-- Jumbroton -->
 <div class="jumbotron">
  <h1 class="display-4 text-center">A thoroughly modern sales & shipping tool made just for importers & exporters.</h1>
  
  <hr class="my-4">
  <div class="text-center">
  <a class="btn btn-primary btn-lg" href="{{url('/register')}}" role="button">Get Started</a>
  <a class="btn btn-outline-info btn-lg" href="{{url('/contact')}}" role="button">Contact Sales</a>
  </div>
  
 </div>
 <div class="row">
     <div class="col-md-12">
         <h1>Purchase page.... something coming soon</h1>
     </div>
 </div>
 <div class="row">
     <footer style="width:100%;height:85px;background-color:black;color:white;text-align:center;">
         <p style="padding-top:40px;">Copyright &copy;2020. All Right Reserved</p>
     </footer>
 </div>
</div>
 
@endsection