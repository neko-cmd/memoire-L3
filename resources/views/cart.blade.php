@extends('layouts.default')

@section('title', 'Shopping Cart')

@section('extra-css')

@endsection

@section('content')

<link rel="stylesheet" href="css/cart.css">
<link rel="stylesheet" href="css/button.css">
<link rel="stylesheet" href="css/form.css">
<link rel="stylesheet" href="css/breadcrumb.css">
<link rel="stylesheet" href="css/search.css">
<link rel="stylesheet" href="css/table.css">
   @component('components.breadcrumbs')
        <a href="/">Accueil</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span>Panier</span>
   @endcomponent
 
    <div class="cart-section container">
        <div>
            @if (session()->has('success_message'))
                <div class="alert alert-success">
                    {{ session()->get('success_message') }}
                </div>
            @endif

            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (Cart::count() > 0)

            <h2>{{ Cart::count() }} article (s) dans le panier</h2>

            <div class="cart-table">
                @foreach (Cart::content() as $item)
                <div class="cart-table-row">
                    <div class="cart-table-row-left">
                        <a href="{{ route('shop.show', $item->model->slug) }}"><img src="{{asset('/storage/'.$item->model->image)}}" alt="item" class="cart-table-img"></a>
                        <div class="cart-item-details">
                            <div class="cart-table-item"><a href="{{ route('shop.show', $item->model->slug) }}">{{ $item->model->title }}</a></div>
                            <div class="cart-table-description">{{ $item->model->subtitle }}</div>
                        </div>
                    </div>
                    <div class="cart-table-row-right">
                        <div class="cart-table-actions">
                           <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button type="submit" class="cart-options">Retirer</button>
                            </form>
                            <form action="{{ route('cart.switchToSaveForLater', $item->rowId) }}" method="POST">
                                {{ csrf_field() }}

                                <button type="submit" class="cart-options">Garder pour plus tard</button>
                            </form>
                        </div>
                        <div>
                            <select class="quantity" data-id="{{ $item->rowId }}" data-productQuantity="{{ $item->model->quantity }}">
                                @for ($i = 1; $i < 5 + 1 ; $i++)
                                    <option {{ $item->qty == $i ? 'selected' : '' }}>{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                        <div>{{ presentPrice($item->subtotal) }}</div>
                    </div>
                </div> <!-- end cart-table-row -->
                @endforeach

            </div> <!-- end cart-table -->


            <div class="cart-totals">
                <div class="cart-totals-left">
                   La livraison est gratuite car nous sommes géniaux comme ça. Aussi parce que c'est des trucs supplémentaires que je n'ai pas envie de découvrir :).
                </div>

                <div class="cart-totals-right">
                    <div>
                        Subtotal <br>
                        Tax(13%)<br>
                        <span class="cart-totals-total">Total</span>
                    </div>
                    <div class="cart-totals-subtotal">
                        {{ presentPrice(Cart::subtotal()) }} <br> 
                        {{ presentPrice(Cart::tax()) }} <br>
                        <span class="cart-totals-total">{{ presentPrice(Cart::total()) }}</span>
                    </div>
                </div>
            </div> <!-- end cart-totals -->

            <div class="cart-buttons">
                <a href="{{ route('shop.index')}}" class="button">Continuer vos achats</a>
                <a href="{{ route('checkout.index')}}" class="button-primary">Passer à la caisse</a>
            </div>
    
            @else

                <h3>aucun article dans le panier!</h3>
                <div class="spacer"></div>
                <a href="{{ route('shop.index') }}" class="button">Continuer vos achats</a>
                <div class="spacer"></div>

            @endif
            @if (Cart::instance('saveForLater')->count() > 0)

            <h2>{{ Cart::instance('saveForLater')->count() }} article (s) enregistré (s) pour plus tard</h2>

    

            <div class="saved-for-later cart-table">
                @foreach (Cart::instance('saveForLater')->content() as $item)
                <div class="cart-table-row">
                    <div class="cart-table-row-left">
                        <a href="{{ route('shop.show', $item->model->slug) }}"><img src="{{asset('/storage/'.$item->model->image)}}" alt="item" class="cart-table-img"></a>
                        <div class="cart-item-details">
                            <div class="cart-table-item"><a href="{{ route('shop.show', $item->model->slug) }}">{{ $item->model->title }}</a></div>
                            <div class="cart-table-description">{{ $item->model->subtitle }}</div>
                        </div>
                    </div>
                    <div class="cart-table-row-right">
                        <div class="cart-table-actions">
                            <form action="{{ route('saveForLater.destroy', $item->rowId) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button type="submit" class="cart-options">Retirer    </button>
                            </form>

                            <form action="{{ route('saveForLater.switchToCart', $item->rowId) }}" method="POST">
                                {{ csrf_field() }}

                                <button type="submit" class="cart-options">Passer au panier</button>
                            </form>
                        </div>
                        
                        <div>{{ $item->model->presentPrice() }}</div>
                    </div>
                </div> <!-- end cart-table-row -->
                @endforeach

            </div> <!-- end saved-for-later -->
            @else

            <h3>Vous n'avez aucun élément enregistré pour plus tard.</h3>

            @endif
        </div>
        
    </div> <!-- end cart-section -->
    
    @include('layouts.partials.might-like')
    
    <style>
        
        .might-like-section {
            padding: 40px 0 70px;
            background: lightgray;
        }
        .might-like-section h2 {
            padding-bottom: 30px;
        }
        .might-like-section .might-like-grid {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            grid-gap: 30px;
        }
        .might-like-section .might-like-product {
            border: 1px solid #979797;
            background: white;
            padding: 30px 0 20px;
            text-align: center;
        }
        .might-like-section .might-like-product img {
            width: 30%;
        }
        .might-like-section .might-like-product-price {
            font-family: 'Raleway', sans-serif;
            color: #ad1f00;
            font-weight: bold;
        }
        
      
    </style>
    <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
    <script src="{{ asset('js/algolia.js') }}"></script>
@endsection
@section('extra-js')
<script src="{{ asset('js/app.js') }}"></script>
    <script>
        (function(){
            const classname = document.querySelectorAll('.quantity')

            Array.from(classname).forEach(function(element) {
                element.addEventListener('change', function() {
                    const id = element.getAttribute('data-id')
                    const productQuantity = element.getAttribute('data-productQuantity')

                    axios.patch(`/cart/${id}`, {
                        quantity: this.value,
                        productQuantity: productQuantity
                    })
                    .then(function (response) {
                        // console.log(response);
                        window.location.href = '{{ route('cart.index') }}'
                    })
                    .catch(function (error) {
                        // console.log(error);
                        window.location.href = '{{ route('cart.index') }}'
                    });
                })
            })
        })();
    </script>
@endsection