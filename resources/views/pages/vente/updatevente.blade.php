<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vente de devises</title>
</head>
<body>
    @include('layout.link');
    <div class="page-container">

            <!-- Les headers -->
            @include('layout.header');
            @include('layout.header-left')
            <!-- Fin headers headers -->

        <div class="col-lg-9">
            <div class="card">
                <div class="card-header">
                    <strong>Vente de devises / Echange de devise</strong>
                    <small></small>
                </div>
                <div class="card-body card-block">

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
                                    @foreach ($info as $item )
                                    <form action="{{route('UPDATEVENTE',['id'=>$item->id])}}" method="post">
                                        @csrf


                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label">Devise a vendre </label>
                                            <select name="deviseavendre" id="" class="form-control">
                                                        @foreach ($listedevise as $data )
                                                                <option value="{{$data->id}}">{{$data->nom_devise}}</option>

                                                        @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="street" class=" form-control-label">Taux de vente - <a href="#" style="color: green;">taux actuel: 0.5$</a></label>
                                            <input type="text" name="taux" id="street" placeholder="Entrez le taux de vente" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="city" class=" form-control-label">Quantité</label>
                                            <input type="text" name="quantite" id="city" value="{{$item->quantite_vente}}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="postal-code" class=" form-control-label">Devise du Client</label>
                                            <select name="deviseclient" id="" class="form-control">
                                                @foreach ($listedevise as $data )
                                                        <option value="{{$data->id}}">{{$data->nom_devise}}</option>

                                                @endforeach
                                    </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="postal-code"name="modepaiement"class=" form-control-label">Moyen de payement</label>
                                            <select name="modepaiement" id="" class="form-control">
                                                <option value="espece">ESPECE</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="country" class=" form-control-label">Ville </label>
                                            <select name="ville" id="" class="form-control">
                                                        @foreach ($allville as $info )
                                                                <option value="{{$info->id}}">{{$info->nom_ville}}</option>
                                                        @endforeach
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-success">Mofier la vente de devise</button>
                    </form>
                                    @endforeach
                </div>
            </div>
        </div>
    </div>

            @include('layout.link');
</body>
</html>
