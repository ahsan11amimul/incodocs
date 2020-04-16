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
  <a class="btn btn-primary btn-lg" href="#" role="button">Get Started</a>
  <a class="btn btn-outline-info btn-lg" href="#" role="button">Contact Sales</a>
  </div>
  
 </div>
 <div class="row">
     <div class="col-md-4">
         <h6>Quoting</h6>
         <p>Create and Share Professional Quotes that close deals fast.</p>
     </div>
     <div class="col-md-4">
         <h6>Purchasing</h6>
         <p>Connect with suppliers to track & manage Purchase Orders & Sales Contracts.</p>
     </div>
     <div class="col-md-4">
         <h6>Invoicing</h6>
         <p>Create and Share Proforma Invoices & Commercial Invoices to get paid faster.</p>
     </div>
     <div class="col-md-4">
         <h6>Shipping Documents</h6>
         <p>Create sets of export documents without re-typing any information.</p>
     </div>
     <div class="col-md-4">
         <h6>View And accept Tracking</h6>
         <p>Know when your recipient has viewed and accepted your document.</p>
     </div>
     <div class="col-md-4">
         <h6>Digital Countersigning</h6>
         <p>Buyers and Sellers digitally sign and stamp documents, 100% online.</p>
     </div>
 </div>
 <div class="row">
     <div class="col-md-12 text-center">
         <h1>Customers in over 120+ countries</h1>
         <p class="lead">Companies of all sizes and industries use IncoDocs to upgrade their operations.</p>
     </div>
     <div class="col-md-4 p-5">
         <img src="https://incodocs.com/wp-content/uploads/2020/02/thumbnail-cupral.jpg" alt="" class=" img-fluid img-thumbnail h-50">
         <p class="lead">Scaling their global operations team and tapping into new markets around the world.</p>
         <a href="#" class="btn btn-outline-secondary btn-lg">Learn More</a>
     </div>
     <div class="col-md-4 p-5">
         <img src="https://incodocs.com/wp-content/uploads/2020/02/thumbnail-miir.jpg" alt="" class=" img-fluid img-thumbnail h-50">
         <p class="lead">Scaling their global operations team and tapping into new markets around the world.</p>
         <a href="#" class="btn btn-outline-secondary btn-lg">Learn More</a>
     </div>
     <div class="col-md-4 p-5">
         <img src="https://incodocs.com/wp-content/uploads/2020/02/thumbnail-wwe.jpg" alt="" class=" img-fluid img-thumbnail h-50">
         <p class="lead">Scaling their global operations team and tapping into new markets around the world.</p>
         <a href="#" class="btn btn-outline-secondary btn-lg">Learn More</a>
         
     </div>
 </div>
 <div class="row">
     <div class="col-md-6">
         <h1>Get started in minutes.</h1>
         <p class="lead">Sign up for free and get started without any training. No credit card required.</p>
     </div>
     <div class="col-md-6">
     <a href="{{url('/register')}}" class="btn btn-primary text-white btn-lg">Get Started For free</a>
     </div>
 </div>
 <div class="row">
     <footer style="width:100%;height:85px;background-color:black;color:white;text-align:center;">
         <p style="padding-top:40px;">Copyright &copy;2020. All Right Reserved</p>
     </footer>
 </div>
</div>
 
@endsection