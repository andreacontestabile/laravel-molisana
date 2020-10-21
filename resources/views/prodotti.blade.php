@extends('layouts.layout')

@section('title')
    Prodotti
@endsection


@section('mainContent')
  <section id="products">
    <div class="container">
        <h2>Le lunghe</h2>
      <ul class="products-list">
        @foreach ($lunga as $pasta)
          <li class="products-list-item" style="background-image:url('{{$pasta["src"]}}')">
            <div class="item-overlay">
              <h3>{{$pasta["titolo"]}}</h3>
              <img src="{{asset('images/icon.svg')}}" alt="">
            </div>
          </li>
        @endforeach
      </ul>
      <h2>Le corte</h2>
      <ul class="products-list">
        @foreach ($corta as $pasta)
          <li class="products-list-item" style="background-image:url('{{$pasta["src"]}}')"">
            <div class="item-overlay">
              <h3>{{$pasta["titolo"]}}</h3>
              <img src="{{asset('images/icon.svg')}}" alt="">
            </div>
          </li>
        @endforeach
      </ul>
      <h2>Le cortissime</h2>
      <ul class="products-list">
        @foreach ($cortissima as $pasta)
          <li class="products-list-item" style="background-image:url('{{$pasta["src"]}}')"">
            <div class="item-overlay">
              <h3>{{$pasta["titolo"]}}</h3>
              <img src="{{asset('images/icon.svg')}}" alt="">
            </div>
          </li>
        @endforeach
      </ul>
    </div> 
  </section>
@endsection