@extends('layouts.default')

@section('title', 'boutique')
@section('content')
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/shop.css">

<link rel="stylesheet" type="text/css" href="css/_pagination.css">
    @component('components.breadcrumbs')
        <a href="/">Accueil</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span>Boutique</span>
    @endcomponent
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
    <div class="products-section container">
        <div class="sidebar">
            <h3>Par catégorie</h3>
            <ul>
                 @foreach($categories as $category)
                     <li class="{{ request()->category == $category->slug ? 'active' : '' }}"><a href="{{ route('shop.index', ['category' => $category->slug]) }}">{{ $category->title }}</a></li>
                 @endforeach
            
            </ul>

            
        </div> <!-- end sidebar -->
        <div>
        <div class="products-header">
            <h1 class="stylish-heading">{{ $categoryName }}</h1>
            <div class="products-headerr">
                <strong >Prix  </strong>
                <a href="{{ route('shop.index', ['category'=> request()->category, 'sort' => 'low_high']) }}"> mois cher au plus cher</a> |
                <a href="{{ route('shop.index', ['category'=> request()->category, 'sort' => 'high_low']) }}">plus cher au moin cher</a>

            </div>  
        </div>
            
            <div class="products text-center">
                @foreach($products as $product)
                    <div class="product">
                        <a href="{{ route('shop.show', $product->slug) }}"><img class="product-section-image" src="{{asset('/storage/'.$product->image)}}" alt="product"></a>
                        <a href="{{ route('shop.show', $product->slug) }}"><div class="product-name">{{ $product->title }}</div></a>
                        <div class="product-price">{{ $product->presentPrice() }}</div>
                    </div>
                @endforeach
                
            </div> <!-- end products -->
            <div class="spacer"></div>
            {{ $products->appends(request()->input())->links() }}
    
        </div>
    </div>


@endsection
