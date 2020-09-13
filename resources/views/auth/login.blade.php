@extends('layouts.default')

@section('title', 'Login')

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
            <h2>Déjà client</h2>
            <div class="spacer"></div>

            <form action="{{ route('login') }}" method="POST">
                {{ csrf_field() }}
                <input id="login"  type="text" placeholder="Email ou Nom d'utilisateur" class="form-control {{$errors->has('login') || $errors->has('email') || $errors->has('username') ? 'is-invalid' : ''}}"  name="login" value="{{ old('login') }}" required autocomplete="login" autofocus>

                              
                        
                <input id="password" type="password" placeholder="Mot de Passe" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                
                <div class="login-container">
                    <button type="submit" class="auth-button"> {{ __('Login') }}</button>
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>   {{ __('Se souvenir de moi') }}
                    </label>
                </div>

                <div class="spacer"></div>

                @if (Route::has('password.request'))
                    <a class="butt" href="{{ route('password.request') }}">
                        {{ __('Mot de passe oublié?') }}
                    </a>
                @endif

            </form>
        </div>

        <div class="auth-right">
            <h2>Nouveau client</h2>
            <p><strong>Gagnez du temps maintenant.</strong></p>
            <p>Vous n'avez pas besoin d'un compte pour payer.</p>
            <div class="spacer"></div>
            <a href="{{ route('guestCheckout.index') }}" class="auth-button-hollow">Continuer en tant qu'invité</a>
            <div class="spacer"> </div>
            &nbsp;
            <div class="spacer"></div>
            <p><strong>Gagnez du temps plus tard.</strong></p>
            <p>Créez un compte pour un paiement rapide et un accès facile à l'historique des commandes.</p>
           
            <a href="{{ route('register') }}" class="auth-button-hollow">Créer un compte  </a>

        </div>
    </div>
</div>
@endsection
