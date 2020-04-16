@extends('users.layouts.master')
@section('title','Inco Docs')

@section('content')
<h1> Wellcome mr :{{Auth::user()->name}} in user Dashboard</h1>
@endsection
    
