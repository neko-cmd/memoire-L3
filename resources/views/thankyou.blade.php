@extends('layouts.default')

@section('title', 'Merci')

@section('extra-css')

@endsection

@section('body-class', 'sticky-footer')

@section('content')

<link rel="stylesheet" href="css/thankyou.css">
<link rel="stylesheet" href="css/button.css">
<link rel="stylesheet" href="css/form.css">
<link rel="stylesheet" href="css/breadcrumb.css">
   <div class="thank-you-section">
       <h1>Merci pour <br> Votre commande!</h1>
       <p>Un e-mail de confirmation a été envoyé</p>
       <div class="spacer"></div>
       <div>
           <a href="{{ url('/') }}" class="button">Page d'accueil</a>
       </div>
   </div>




@endsection
