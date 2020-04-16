<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">Inco Docs</a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
      <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="{{url('/quotes')}}">Quotes</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="{{url('/invoices')}}">Invoices</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="{{url('/shipping')}}">Shipping</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="{{url('/purchase')}}">Purchases</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="{{url('/pricing')}}">Pricing</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="{{url('/trade')}}">Trade Tips</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
     <li class="nav-item">
        <a class="nav-link" href="{{url('/contact')}}">Contact</a>
     </li>  
     <li class="nav-item">
     <a  class="nav-link btn btn-outline-info mr-2"  href="{{url('/login')}}">SignIn</a>
     </li>
     <li class="nav-item">
     <a  class="nav-link btn btn-primary text-white btn-lg"  href="{{url('/register')}}">Get Started</a>
     </li>
        
    </ul>
     
     
    </div>

 
     
  </div>
</nav>