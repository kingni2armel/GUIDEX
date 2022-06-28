
@include('layout.header')
@include('layout.link')

<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#" style="color: black; font-family: poppins; font-size: 20px; font-weight:bold;"> GuidEx.
            {{-- <img src="images/icon/logo.png" alt="GuidEx" /> --}}
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li>
                    <a  href="{{route('GETPAGEACCUEIL')}}">
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
                            <a href="{{route('GETPAGELISTEVENTE')}}">Liste de ventes</a>
                        </li>
                    </ul>
                </li>
                <li >
                    <a class="js-arrow" href="#">
                        <i class="fas fa-building"></i>Devises et taux</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{route('GETPAGEADDDEVISE')}}">Ajouter une devisse</a>
                        </li>
                        <li>
                            {{-- <a href="{{route('')}}">Liste des devises</a> --}}
                        </li>
                    </ul>
                </li>
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
                <li class="active has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-user"></i>Utilisateur</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li class="active has-sub">
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
<!-- END MENU SIDEBAR-->
<div class="page-container">
    <div class="main-content">
        <h3 class="title-5 m-b-35">&nbsp &nbsp Ajouter une Devise</h3>
                    <div class="col-lg-10">
                        <div class="card">
                            <div class="card-header">Formulaire d'ajout d'une client</div>



                            @if ($errors->any())
                                            <div class="alert alert-danger">
                                                            @foreach ($errors->all() as $oumar )
                                                                            <p>{{$oumar}}</p>
                                                            @endforeach
                                            </div>

                            @endif

                            @if (session()->has('notification.message'))
                                                <div class="alert alert-{{session('notification.type')}}">

                                                            {{session('notification.message')}}
                                                </div>

                            @endif
                            <div class="card-body card-block">
                                <form action="{{route('ADDCLIENT')}}" method="post" class="">

                                    @csrf
                                    <div class="form-group">
                                        <label for="">Nom complet du client</label>
                                        <div class="input-group">
                                            <input type="text" id="username" name="name" placeholder="nom" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">DEVISE</label><br>
                                        <select name="devise" id="" class="form-control">
                                            <option value="euro">EURO</option>
                                            <option value="dollar">DOLLAR</option>
                                            <option value="fcfa">FRANC CFA</option>


                                        </select>
                                    </div>



                                    <div class="form-group">
                                        <label for="">Adresse du client</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </div>
                                            <input type="text" id="username" name="adresse" placeholder="Adresse du client" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Adresse email</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-envelope"></i>
                                            </div>
                                            <input type="email" id="email" name="email" placeholder="Email du client" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Téléphone</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-asterisk"></i>
                                            </div>
                                            <input type="number" id="password" name="telephone"class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Raison social</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-asterisk"></i>
                                            </div>
                                            <input type="text" id="password" name="raison_social"class="form-control">
                                        </div>
                                    </div>



                                    <div class="form-actions form-group">
                                        <button type="submit" class="btn btn-success btn-lg btn-block">AJOUTER</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>
        </div>
    </div>
@include('layout.link')
