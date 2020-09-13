@extends('layouts.default')

@section('title', 'apropos')

@section('content')
<link rel="stylesheet" href="propos.css">
    @component('components.breadcrumbs')
        <a href="/">Accueil</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span>A propos</span>
    @endcomponent
<body>
  

<div class="container1">
  <h1>KENLY SHOP</h1></div>
    <div class="container"> 
        <div class="row">
            <div class="col-md-6 ">
                <h3> A PROPOS DE KENLY SHOP</h3>
                <p1>
                <ul>
                    <li><i class="fas fa-angle-double-right"></i>Site web 100% sécurisé</li>
                    <li><i class="fas fa-angle-double-right"></i>Livraison rapide en 2-3 jours</li>
                    <li><i class="fas fa-angle-double-right"></i>Plus de 5,000,000 clients satisfaits</li>
                    <li><i class="fas fa-angle-double-right"></i>Garantie de remboursement sous 14 jours</li>
                    <li><i class="fas fa-angle-double-right"></i>Garantie de remplacement sous 30 jours</li>
                    <li><i class="fas fa-angle-double-right"></i>100% prix le plus bas garanti</li>
                </ul>
                </p1>
            </div>
            <div class="col-md-6">
                <img src="products/apropos.jpg" rel="">
            </div>
        </div>
        <div class="block">
            <div class="container2">
            <p>Kenly Shop vend des  Smartphone, des Ordinateur, Camera et des Accessoires pour téléphones mobiles, pour iPods et lecteurs MP3, pour appareils photo et caméscopes, ainsi que de l'équipement Bluetooth. Alors, si vous voulez vous procurer une montre connectée de qualité, un chargeur sans fil, une batterie externe performante, un casque sans fil pas cher ou une perche à selfie, vous êtes au bon endroit. Notre large gamme comptant plus de 100.000 accessoires nous assure une position importante sur le marché des accessoires mobiles. Vous pouvez accéder via notre page d'accueil aux boutiques en ligne. Nous traitons avec la même facilité et la même attention les commandes en petite quantité et celles de grandes entreprises en apportant une attention personnelle à chaque client.</p>
            <h5>L’HISTOIRE DE KENLY SHOP :</h5>
            <p>Kenly Shop a été fondé en 2020 et n'a cessé de croître depuis pour devenir l'une des plus grandes e-boutiques d'accessoires pour mobiles. Notre gamme de produits s'étend aux téléphones mobiles, lecteurs musicaux, consoles, iPad, accessoires, etc.</p>
            <h5>PRIX ET SATISFACTION GARANTIS :</h5>
            <p>Kenly Shop vous garantit les prix les plus bas du marché. Pour nous assurer de la satisfaction de nos clients, nous leur offrons la garantie du prix et de la satisfaction lorsqu'ils font des affaires dans notre e-boutique. Si vous trouvez le même produit moins cher dans un délai de trente jours suivant votre commande, nous vous rembourserons la différence. En savoir plus.</p>
            <h5>ACHATS EN LIGNE SÉCURISÉS SUR KENLY SHOP :</h5>
            <p>Kenly Shop est l'un des sites accrédités par Stripe. Stripe est un organisme d'accréditation qui certifie la sécurité de nombreux sites de vente en ligne dans le monde.
              Des membres de Stripe assurent une surveillance régulière sur le site en passant des commandes inopinées et nous n'avons pas reçu de plaintes jusqu'à présent sur la qualité de notre travail.Kenly Shop est également évalué par Fianet de manière indépendante. l'achat sur un site évalué par Fianet garantit au client que la société est auditée en temps réel sur la qualité de son service client, de sa sécurité et de ses prestations.</p>
            </div>
        </div>
</div>
@endsection
<style>

    .container1{
        margin-top: 5%;
        margin-bottom:5%;
    }
    
    .container1 h1{
        color: #080808;
        text-align: center;
    }
    .container1 img{
        margin-right: 25%;
    }
    .container2 p{
        margin-left: 5%;
    
        margin-top: 3%;
    }
    .container h3{
        color:#41D1CC;
        margin-left:20%; 
    }
    .container ul{
        
        margin-left:20%; 
    }
    .container2 h5{
        margin-left: 5%;
        margin-top: 3%;
        color: #41D1CC;;
    }
    .container3 p{
        margin-left: 5%;
        margin-top: 3%;
    }
    .container img{
        margin-left: 10%;
    }

</style>