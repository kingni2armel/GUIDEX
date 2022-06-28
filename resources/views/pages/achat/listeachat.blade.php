<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @include('layout.link')
    <div class="page-container">
                <!-- Les headers -->
                @include('layout.header')
                @include('layout.header-left')
                <!-- Fin headers headers -->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- DATA TABLE -->
                                    <h3 class="title-5 m-b-35">Liste d'Achat de devises</h3>


                                @if (session()->has('notification.message'))
                                                <div class="alert alert-{{session('notification.type')}}">

                                                            {{session('notification.message')}}
                                                </div>

                                @endif
                                    <div class="table-data__tool">
                                        <div class="table-data__tool-right">
                                            <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                               <a href="{{route('GETPAGEACHATDEVISE')}}" style="color:white;"><i class="zmdi zmdi-plus"></i>Acheter les devises</button></a>
                                        </div>
                                    </div>
                                    <div class="table-responsive table-responsive-data2">
                                        <table class="table table-data2">
                                            <thead>
                                                <tr>
                                                    {{-- <th>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </th> --}}
                                                    <th>#</th>
                                                    <th>Nom du Fournisseur</th>
                                                    <th>email</th>
                                                    <th>date</th>
                                                    <th>Devise</th>
                                                    <th>Quantite</th>
                                                    <th>Prix Total</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                        @foreach ($listeachat as $data )
                                                                        <tr class="tr-shadow">
                                                                            {{-- <td>
                                                                                <label class="au-checkbox">
                                                                                    <input type="checkbox">
                                                                                    <span class="au-checkmark"></span>
                                                                                </label>
                                                                            </td> --}}
                                                                            <th>{{$row++}}</th>
                                                                            <td>{{$data->nom_tier}}</td>
                                                                            <td>
                                                                                <span class="block-email">{{$data->email_tier}}</span>
                                                                            </td>
                                                                            <td class="desc">{{$data->created_at}}</td>
                                                                            <td>
                                                                                <span class="status--process">{{$data->nom_devise}}</span>
                                                                            </td>
                                                                            <td>
                                                                                <span class="status--process">{{$data->quantite_achat}}</span>
                                                                            </td>
                                                                            <td>{{$data->somme_achat}}</td>
                                                                            <td>
                                                                                <div class="table-data-feature">

                                                                                    <a href="{{route('UPDATEACHAT',['id'=>$data->id])}}">
                                                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                                                <i class="zmdi zmdi-edit"></i>
                                                                                            </button>
                                                                                    </a>
                                                                                        <form method="post" action="{{route('SUPPRIMERACHAT',['id'=>$data->id])}}">
                                                                                                    @csrf
                                                                                                    <button type="submit" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                                                        <i class="zmdi zmdi-delete"></i>
                                                                                                    </button>
                                                                                        </form>

                                                                                        <a href="{{route('GETPAGEFACTURE',['id'=>$data->id])}}">
                                                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Imprimer">
                                                                                                <i class="zmdi zmdi-more"></i>
                                                                                            </button>
                                                                                        </a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                        @endforeach


                                            </tbody>
                                        </table>
                                     </div>
                                </div>
                            </div>
                        </div>
    </div>
            <!-- END DATA TABLE -->
            @include('layout.link')
</body>
</html>
