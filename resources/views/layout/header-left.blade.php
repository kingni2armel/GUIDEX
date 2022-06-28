<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#" style="color: black; font-family: poppins; font-size: 20px; font-weight:bold;"> GuidEx.
            {{-- <img src="images/icon/logo.png" alt="GuidEx" /> --}}
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                    <a  href="{{route('GETPAGEGETDASHBORD')}}">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>

                <li >
                    <a class="js-arrow" href="#">
                        <i class="fas fa-chart-bar"></i>Achat de devise</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{route('GETPAGEACHATDEVISE')}}">Acheter les devises</a>
                        </li>
                        <li>
                            <a href="{{route('GETPAGELISTEACHAT')}}">Liste d'achat</a>
                        </li>
                    </ul>
                </li>

                <li >
                    <a class="js-arrow" href="#">
                        <i class="fas fa-location-arrow"></i>Vente de devises</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{route('GETPAGEVENTEDEVISE')}}">Nouvelle vente</a>
                        </li>
                        <li>
                            <a href="{{route('LISTESENDDEVISE')}}">Liste de ventes</a>
                        </li>
                    </ul>
                </li>
                {{-- <li>
                    <a  href="{{route('GETPAGEACCUEIL')}}">
                        <i class="fas fa-tachometer-alt"></i>Devises et taux</a>
                </li> --}}
                <li >
                    <a class="js-arrow" href="#">
                        <i class="fas fa-building"></i>Fournisseur</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{route('GETPAGEADDFOURNISSEUR')}}">Ajouter un fournisseur</a>
                        </li>
                        <li>
                            <a href="{{route('GETPAGELISTEFOURNISSEUR')}}">Liste des fournisseurs</a>
                        </li>
                    </ul>
                </li>
                <li >
                    <a class="js-arrow" href="#">
                        <i class="fas fa-group"></i>Client</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{route('GETPAGEADDCLIENT')}}">Ajouter un client</a>
                        </li>
                        <li>
                            <a href="{{route('GETPAGELISTECLIENT')}}">Liste des clients</a>
                        </li>
                    </ul>
                </li>
                <li >
                    <a class="js-arrow" href="#">
                        <i class="fas fa-user"></i>Utilisateur</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{route('GETPAGEADDUSER')}}">Ajouter un utilisateur</a>
                        </li>
                        <li>
                            <a href="{{route('GETLISTEUSER')}}">Liste des utilisateurs</a>
                        </li>
                    </ul>
                </li>


            </ul>
        </nav>
    </div>
</aside>


</body>
</html>
