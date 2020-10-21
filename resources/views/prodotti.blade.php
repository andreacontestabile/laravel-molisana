@extends('layouts.layout')

@section('title')
    Prodotti
@endsection


@section('mainContent')
  <section id="products">
    <div class="container">
      @foreach ($pasta as $key => $product)
        <h2>{{$key}}</h2>
        <ul class="products-list">
          @foreach ($product as $pastaSingle)
            <li class="products-list-item" style="background-image:url('{{$pastaSingle["src"]}}')">
              <div class="item-overlay">
                <h3><a href="{{route("product-single", $pastaSingle["id"] )}}">{{$pastaSingle["titolo"]}}</a></h3>
                <a href="{{route("product-single", $pastaSingle["id"] )}}"><img src="{{asset('images/icon.svg')}}" alt=""></a>
              </div>
            </li>
          @endforeach
        </ul>
      @endforeach
    </div> 
  </section>
@endsection