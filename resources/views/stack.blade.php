@extends('layouts.main')
@section('menu')
<li><a ref="/">Home Page </a></li>
@endsection

@push ('submenu')
<li><a ref="/">Test Page </a></li>
@endpush

@prepend('submenu')
<li><a ref="/">Test Page </a></li>
@endprepend
