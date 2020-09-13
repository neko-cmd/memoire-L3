@extends('layouts.default', ['title' => 'mes commandes'])

@section('extra-css')
    <link rel="stylesheet" href="{{ assert('css/algolia.css')}}">
    
@endsection

@section('content')
<link rel="stylesheet" type="text/css" href="css/motpass.css">
    <body>
        <div class="container">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-2 col-sm-4 sidebar1">
                                <div class="logo">
                                    <img src="http://lorempixel.com/output/people-q-g-64-64-1.jpg" class="img-responsive center-block" alt="Logo">
                                </div>
                                <br>
                                <div class="left-navigation">
                                    <ul class="list">
                                        <h5><strong>Mon profil</strong></h5>
                                        <li><a href="{{ route('orders.index')}}">Mes commandes</a></li>
                                        <li>Accueil</li>
                                    </ul>
                                    <br>
                                    <ul class="list">
                                        <h5><strong>renseignements personnels</strong></h5>
                                        <li><a href="{{ route('Users.edit')}}"> Mon compte</a></li>
                                        <li><a href="{{ route('pass.edit')}}">changez votre mot de passe</a></li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div  class="col-md-8 col-sm-8 main-content">
                                <h2 class="title"><hr width="40%" color=#F17153 >Renseignements personnels<hr width="40%" color=#F17153></h3>
                                <form method="POST" action="{{ route('Users.update') }}">
                                    <div class="form-group row">
                                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                                        <div class="col-md-6">
                                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" >

                                                            @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                                        <div class="col-md-6">
                                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" >
                                                        </div>
                                                    </div>

                                                    <div class="form-group row mb-0">
                                                        <div class="col-md-6 offset-md-4">
                                                            <button type="submit" class="btn  btn-block">
                                                                {{ __('Update') }}
                                                            </button>
                                                        </div>
                                                    </div>       
                                </div>
                        </div>   
                    </div>            
        </div>    
    </body>  
    
@endsection