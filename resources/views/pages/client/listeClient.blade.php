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
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                         <!-- Les headers -->
                        @include('layout.header')
                        @include('layout.header-left')
                        <!-- Fin headers headers -->


                            <div class="row">
                                <div class="col-md-12">
                                    <!-- DATA TABLE -->
                                    <h3 class="title-5 m-b-35">Liste des Clients</h3>


                            @if (session()->has('notification.message'))
                                    <div class="alert alert-{{session('notification.type')}}">

                                                {{session('notification.message')}}
                                    </div>

                           @endif
                                    <div class="table-data__tool">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <a href="{{route('GETPAGELISTEFOURNISSEUR')}}" style="color: white;"><i class="zmdi zmdi-plus"></i>Nouveau Client</button></a>
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
                                                    <th>Nom complet du client </th>
                                                    <th>Adresse du client</th>
                                                    <th>Dévise</th>
                                                    <th>Raison social</th>
                                                    <th>Ville </th>
                                                    <th>Téléphone</th>
                                                    <th>Email</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($listeclient as $data )
                                                        <tr class="tr-shadow">
                                                            {{-- <td>
                                                                <label class="au-checkbox">
                                                                    <input type="checkbox">
                                                                    <span class="au-checkmark"></span>
                                                                </label>
                                                            </td> --}}
                                                            <td>{{$row++}}</td>
                                                            <td>
                                                                <span class="block-email">{{$data->nom_tier}}</span>
                                                            </td>
                                                            <td class="desc">{{$data->adresse_tier}}</td>
                                                            <td>{{$data->devise}}</td>
                                                            <td>{{$data->raison_social}}</td>

                                                            <td>{{$data->nom_ville}}</td>
                                                            <td>{{$data->telephone}}</td>
                                                            <td>{{$data->email_tier}}</td>



                                                            <td>
                                                                <div class="table-data-feature">

                                                                    <a href="{{route('GETPAGEUPDATECLIENT',['id'=>$data->id])}}">

                                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                        <i class="zmdi zmdi-edit"></i>
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
