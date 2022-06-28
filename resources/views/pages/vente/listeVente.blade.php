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
       @include('layout.header');
       @include('layout.header-left')
       <!-- Fin headers headers -->
       <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">

                            <div class="row">
                                <div class="col-md-12">
                                    <!-- DATA TABLE -->
                                    <h3 class="title-5 m-b-35">Liste de vente de devises Et echanges de devises</h3>

                                    @if (session()->has('notification.message'))
                                    <div class="alert alert-{{session('notification.type')}}">

                                                {{session('notification.message')}}
                                    </div>

                           @endif
                                    <div class="table-data__tool">
                                        <div class="table-data__tool-right">
                                            <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                               <a href="{{route('GETPAGEVENTEDEVISE')}}" style="color: white;"><i class="zmdi zmdi-plus"></i>Nouvelle vente</button></a>
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
                                                    <th>Nom du client</th>
                                                    <th>telephone</th>
                                                    <th>date</th>
                                                    <th>Devise</th>
                                                    <th>Quantite</th>
                                                    <th>Prix Total (FCFA)</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    @foreach ($listevente as $data )
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
                                                            <span class="block-email">{{$data->telephone}}</span>
                                                        </td>
                                                        <td>{{$data->created_at}}</td>
                                                        <td>
                                                            <span class="status--process">{{$data->nom_devise}}</span>
                                                        </td>
                                                        <td>{{$data->quantite_vente}}</td>
                                                        <td>{{$data->montant_total_vente}}</td>
                                                        <td>
                                                            <div class="table-data-feature">

                                                              <a href="{{route('GETPAGEUPDATEVENTE',['id'=>$data->id])}}">
                                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                            <i class="zmdi zmdi-edit"></i>
                                                                        </button>
                                                              </a>
                                                                {{-- <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                    <i class="zmdi zmdi-delete"></i>
                                                                </button> --}}
                                                               <a href="{{route('GETPAGEFACTUREVENTE',['id'=>$data->id])}}">
                                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                                            <i class="zmdi zmdi-more"></i>
                                                                        </button>
                                                               </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach



                                                    {{-- <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td> --}}
                                                    {{-- <td>Lori Lynch</td>
                                                    <td>
                                                        <span class="block-email">lyn@example.com</span>
                                                    </td>
                                                    <td class="desc">iPhone X 256Gb Black</td>
                                                    <td>2018-09-25 19:03</td>
                                                    <td>
                                                        <span class="status--denied">Denied</span>
                                                    </td>
                                                    <td>$1199.00</td>
                                                    <td>
                                                        <div class="table-data-feature">
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                                <i class="zmdi zmdi-mail-send"></i>
                                                            </button>
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                <i class="zmdi zmdi-edit"></i>
                                                            </button>
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                <i class="zmdi zmdi-delete"></i>
                                                            </button>
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                                <i class="zmdi zmdi-more"></i>
                                                            </button>
                                                        </div>
                                                    </td> --}}
                                                </tr>
                                                <tr class="spacer"></tr>
                                                <tr class="tr-shadow">
                                                    {{-- <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td> --}}
                                                    {{-- <td>Lori Lynch</td>
                                                    <td>
                                                        <span class="block-email">doe@example.com</span>
                                                    </td>
                                                    <td class="desc">Camera C430W 4k</td>
                                                    <td>2018-09-24 19:10</td>
                                                    <td>
                                                        <span class="status--process">Processed</span>
                                                    </td>
                                                    <td>$699.00</td>
                                                    <td>
                                                        <div class="table-data-feature">
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                                <i class="zmdi zmdi-mail-send"></i>
                                                            </button>
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                <i class="zmdi zmdi-edit"></i>
                                                            </button>
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                <i class="zmdi zmdi-delete"></i>
                                                            </button>
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                                <i class="zmdi zmdi-more"></i>
                                                            </button>
                                                        </div>
                                                    </td> --}}
                                                </tr>
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
