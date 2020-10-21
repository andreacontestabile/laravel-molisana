@extends('layouts.layout')

@section('title')
{{$product["titolo"]}}
@endsection


@section('mainContent')
<section id="product-single">
  <div class="container">
    <h1 class="product-name">{{$product["titolo"]}}</h1>
    <img src="{{$product["src-h"]}}" alt="">
    <img src="{{$product["src-p"]}}" alt="">
    <p>{!! $product["descrizione"] !!}</p>
  </div>
</section>
@endsection

