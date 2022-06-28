    <!-- Les headers -->
    @include('layout.header')
    @include('layout.header-left')
    <!-- Fin headers headers -->


<div class="page-container">
    <div class="main-content">
        <h3 class="title-5 m-b-35">&nbsp &nbsp Ajout d'utilisateur</h3>
                    <div class="col-lg-10">
                        <div class="card">
                            <div class="card-header">Formulaire d'ajout d'un utilisateur</div>



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
                                <form action="{{route('ADDUSER')}}" method="post" class="">

                                    @csrf
                                    <div class="form-group">
                                        <label for="">Nom complet de l'utilisateur</label>
                                        <div class="input-group">
                                            <input type="text" id="username" name="name" placeholder="nom" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Role de l'utilisateur</label><br>
                                        <select name="role" id="" class="form-control">
                                            <option value="admin">Administrateur</option>
                                            <option value="employe">employe simple</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nom d'utilisateur</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </div>
                                            <input type="text" id="username" name="username" placeholder="Username" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Adresse email</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-envelope"></i>
                                            </div>
                                            <input type="email" id="email" name="email" placeholder="Email" class="form-control">
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
                                        <label for="">Mot de passe</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-asterisk"></i>
                                            </div>
                                            <input type="password" id="password" name="password" placeholder="Password" class="form-control">
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
