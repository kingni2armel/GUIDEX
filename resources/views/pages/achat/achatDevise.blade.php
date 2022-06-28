<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Achat de devises</title>
</head>
<body>
             @include('layout.link');
    <div class="page-container">
        <!-- Les headers -->
        @include('layout.header')
        @include('layout.header-left')
        <!-- Fin headers headers -->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">

                            <div class="col-lg-9">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Achat de devise</strong>



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
                                        <small></small>
                                    </div>
                                            <form action="{{route('CREATEPAIEMENT')}}" method="post">
                                                            @csrf
                                                            <div class="card-body card-block">
                                                                <div class="form-group">
                                                                    <label for="company" class=" form-control-label">Sélectionnez votre fournisseur</label><br>
                                                                    {{-- <input type="text" id="company" placeholder="Entrez le nom du fournisseur" class="form-control"> --}}
                                                                    <select name="fournisseur" id="" class="form-control">
                                                                        @foreach ( $listefournisseur as $item )
                                                                        <option value="{{$item->id}}">{{$item->nom_tier}}</option>

                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="vat" class="form-control-label" name="devise">Type de devise acheté</label>
                                                                    <select name="devise" id="" class="form-control">
                                                                        @foreach ( $listeDevise as $data )
                                                                        <option value="{{$data->id}}">{{$data->nom_devise}}</option>

                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="street" name="taux" class=" form-control-label">Taux d'achat - <a href="#" style="color: green;" id="dollarAchat"></a></label>
                                                                    <input type="text" name="taux"  id="street" placeholder="Entrez le taux d'achat" class="form-control">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="city" class=" form-control-label">Quantité</label>
                                                                    <input type="text" name="quantite" id="city" placeholder="Entrez la quantite de devise achetee" class="form-control">
                                                                </div>


                                                                <button type="submit" class="btn btn-success">Valider l'achat de devise</button>
                                            </form>
                                    </div>
                                </div>
                            </div>
                        </div>

            @include('layout.link');
</body>
</html>
