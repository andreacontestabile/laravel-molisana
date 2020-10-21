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
                <h3>{{$pastaSingle["titolo"]}}</h3>
                <img src="{{asset('images/icon.svg')}}" alt="">
              </div>
            </li>
          @endforeach
        </ul>
      @endforeach
    </div> 
  </section>
@endsection