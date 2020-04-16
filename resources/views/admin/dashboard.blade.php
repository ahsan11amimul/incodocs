@extends('admin.layouts.master')
@section('title','Inco Docs')

@section('content')
<h1> Wellcome mr :{{Auth::user()->name}} in Admin Dashboard</h1>
@endsection