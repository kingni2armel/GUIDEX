
<!-- Les Headers -->
@include('layout.link')
@include('layout.header')
@include('layout.header-left')
<div class="page-container">
    <div class="main-content">
        <h3 class="title-5 m-b-35">&nbsp &nbsp Ajouter un Fournisseur</h3>
                    <div class="col-lg-10">
                        <div class="card">
                            <div class="card-header">Formulaire d'ajout d'un Fournisseur</div>



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
                                <form action="{{route('GETPAGEADDFOURNISSEUR')}}" method="post" class="">

                                    @csrf
                                    <div class="form-group">
                                        <label for="">Nom complet du Fournisseur</label>
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
                                        <label for="">VILLE CLIENT</label><br>
                                        <select name="ville" id="" class="form-control">
                                                @foreach ($listeville as $data )
                                                    <option value="{{$data->id}}">{{$data->nom_ville}}</option>

                                                @endforeach


                                        </select>
                                    </div>


                                    <div class="form-group">
                                        <label for="">Adresse du Fournisseur</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </div>
                                            <input type="text" id="username" name="adresse" placeholder="Adresse du Fournisseur" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Adresse email</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-envelope"></i>
                                            </div>
                                            <input type="email" id="email" name="email" placeholder="Email du Fournisseur" class="form-control">
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
