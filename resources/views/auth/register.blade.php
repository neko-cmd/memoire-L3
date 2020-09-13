@extends('layouts.default')

@section('title', 'Créer un compte')

@section('content')
<link rel="stylesheet" href="css/auth.css">
<link rel="stylesheet" href="css/button.css">
<link rel="stylesheet" href="css/form.css">

    <div class="container">
        <div class="auth-pages">
            <div class="auth-left">
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
                <h2>Créer un compte</h2>
                <div class="spacer"></div>

                <form method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <input id="first_name" type="text" placeholder="Nom" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                    <input id="last_name" type="text" placeholder="Prénom" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                    <input id="username" type="text" placeholder="Nom d'utilisateur" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                   
                    <input id="email" type="email" placeholder="Email"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">


                    <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                   
                    <input id="password-confirm" type="password" placeholder="Confirmé Password "   class="form-control"name="password_confirmation" required autocomplete="new-password">

                    <div class="login-container">
                        <button type="submit" class="auth-button">Créer un compte</button>
                        <div class="already-have-container">
                            <p><strong>Vous avez déjà un compte?</strong></p>
                            <strong><a href="{{ route('login') }}">S'identifier</a></strong>
                        </div>
                    </div>

                </form>
            </div>

            <div class="auth-right">
                <h2>Nouveau client</h2>
                <div class="spacer"></div>
                <p><strong>Gagnez du temps maintenant.</strong></p>
                <p>La création d'un compte vous permettra de passer à la caisse plus rapidement à l'avenir, d'accéder facilement à l'historique des commandes et de personnaliser votre expérience en fonction de vos préférences.</p>
                &nbsp;
                <div class="spacer"></div>
                <p><strong>Programme de fidélité</strong></p>
                <p> Vous pouvez aussi vous connecter à votre compte ou en créer un afin d'accéder à des commandes supplémentaires.</p>
            </div>
        </div> <!-- end auth-pages -->
    </div>
@endsection
