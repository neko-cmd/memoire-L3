@extends('layouts.default')

@section('title', 'Mon Profile')

@section('content')

<link rel="stylesheet" href="css/myprofile.css">
<link rel="stylesheet" href="css/button.css">
<link rel="stylesheet" href="css/sidebar.css">
<link rel="stylesheet" href="css/shop.css">
<link rel="stylesheet" href="css/product.css">
<link rel="stylesheet" href="css/breadcrumb.css">
<link rel="stylesheet" href="css/alert.css">
    @component('components.breadcrumbs')
        <a href="/">Accueil</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span>Mon Profile</span>
    @endcomponent

    <div class="container">
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
    </div>

    <div class="products-section container">
        <div class="sidebar">

            <!--<ul>
              <li class="active"><a href="{{ route('Users.edit') }}"><h3>Mon Profile</h3></a></li>
              <li><a href="{{ route('orders.index') }}"><h3>Mes commandes</h3></a></li> 
            </ul>-->
        </div> <!-- end sidebar -->
        <div class="my-profile">
            <div class="products-header">
                <h1 class="stylish-heading">Mon Profile</h1>
            </div>

            <div>
                <form action="{{ route('Users.update') }}" method="POST">
                    @method('patch')
                    @csrf
                    <div >
                        <input id="first_name" type="text"  name="first_name" value="{{ old('first_name', $User->first_name) }}" required autocomplete="first_name" autofocus>
                    </div>
                    <div >
                        <input id="last_name" type="text"  name="last_name" value="{{ old('last_name',$User->last_name) }}" required autocomplete="last_name" autofocus>
                    </div>
                    <div>
                        <input id="username" type="text"  name="username" value="{{ old('username' ,$User->username) }}" required autocomplete="username" autofocus>
                    </div>

                    <div >
                        <input id="email" type="email"  name="email" value="{{ old('email' ,$User->email)}}" required autocomplete="email">
                    </div>
                    <div >
                        <input id="password" type="password"  name="password" placeholder="Password">
                        <div>Laissez le mot de passe vide pour conserver le mot de passe actuel</div>
                    </div>
                    <div >
                        <input id="password-confirm" type="password" name="password_confirmation" placeholder="Confirm Password" >
                    </div>
                    <div>
                        <button type="submit" class="my-profile-button">Mettre à jour le profil</button>
                    </div>
                </form>
            </div>

            <div class="spacer"></div>
        </div>
    </div>

    
@endsection

@section('extra-js')
    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
    <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
    <script src="{{ asset('js/algolia.js') }}"></script>
@endsection
