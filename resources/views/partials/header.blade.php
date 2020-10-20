{{-- header --}}
<header>
  <div class="container">
    <div class="logo">
      <img src="{{asset('images/logo.png')}}" alt="Logo">
    </div>
    <nav class="main-nav">
      <ul class="main-nav-list">
        <li class="main-nav-list-item"><a href="{{route('home')}}">Home</a></li>
        <li class="main-nav-list-item"><a href="{{route('prodotti')}}" class="active">Prodotti</a></li>
        <li class="main-nav-list-item"><a href="{{route('news')}}">News</a></li>
      </ul>
    </nav>
  </div>
</header>
{{-- /header --}}