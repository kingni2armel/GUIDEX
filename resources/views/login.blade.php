<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Identification</title>
</head>

<body class="animsition">
    @include('layout.link')
    <div class="page-wrapper">

        <div class="page-content--bge5" style="background-image:url('assets/img/jet0.jpg');">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="images/icon/logo.png" alt="GuidEx">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="{{route('Authentification')}}" method="post">

                                @csrf
                                <div class="form-group">
                                    <label>Identifiant</label>
                                    @if (session()->has('notification.message'))
                                    <div class="alert alert-{{session('notification.type')}}">

                                                {{session('notification.message')}}
                                    </div>

                                      @endif
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Identifiant">
                                </div>
                                <div class="form-group">
                                    <label>Mot de passe</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Mot de passe">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Se Souvenir de Moi
                                    </label>
                                    <label>
                                        <a href="#">Mot de Passe oublié?</a>
                                    </label>
                                </div>

                                    <button type ="submit" class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Connexion</button>

                            </form>
                            <div class="register-link">
                                <p>
                                    Besoin d'assistance,
                                    <a href="#">Contactez nous!</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>
