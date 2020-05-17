@extends('layouts.app')
@section('content')
  @section('page-title', 'Keranjang Belanja')
  @include('layouts.includes.breadcumb')
  @include('pages.cart.content')
@endsection
