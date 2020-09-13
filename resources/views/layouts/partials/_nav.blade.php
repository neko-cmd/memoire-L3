<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
  <a class="navbar-brand" href="/"><img src="products/logo.png" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('contact_path') }}">CONTACT</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('shop.index') }}">BOUTIQUE</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('apropos.index') }}"> À PROPOS</a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
         
          @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">S'identifier</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">S'inscrire</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('cart.index') }}"><img src="products/panier.png" alt=""><span class="cart-count">
                    @if (Cart::instance('default')->count() > 0)
                    <span class="cart-count"><span>{{ Cart::instance('default')->count() }}</span></span>
                    @endif
            </a>
          </li>
          @else
            <li class="nav-item dropdown">
                <li>
                    <a  id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('Users.edit') }}">{{ Auth::user()->full_name}}</a>
                </li>
                <li>
                    <a class="nav-link" aria-labelledby="navbarDropdown" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        Se déconnecter
                    </a>
                    <li class="nav-item active">
                      <a class="nav-link" href="{{ route('cart.index') }}"><img src="products/panier.png" alt=""> <span class="cart-count">
                      @if (Cart::instance('default')->count() > 0)
                      <span class="cart-count"><span>{{ Cart::instance('default')->count() }}</span></span>
                      @endif
                      </a>
                    </li>
                </li>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
              
            </li>
            
          @endguest
      
    </ul>
  </div>
</nav>
<style>
  .cart-count {
    display: inline-block;
    background: #41D1CC;
    color: black;
    line-height: 0;
    border-radius: 50%;
    font-size: 14px;
  }
  .cart-count span {
    display: inline-block;
    padding-top: 25%;
    padding-bottom: 18%;
    margin-left: 4px;
    margin-right: 4px;
  }
</style>