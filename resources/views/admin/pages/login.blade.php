<!DOCTYPE html>
<html lang="en">

<head>

    @include('layouts.partials.header')

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">

                            <div class="col-lg-3"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Authentification</h1>
                                        <span>
                                            Accédez au portail en utilisant votre e-mail et votre code d'accès.
                                        </span>
                                    </div>
                                    <form class="user" method="post" action="{{route('auth.login')}}">
                                    @csrf
                                        <div class="form-group"></div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Entrez votre adresse mail">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Entrez votre mot de passe">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Souvenez-vous de moi
                                                </label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Se connecter
                                        </button>

                                    </form>
                                    <hr>

                                    <div class="text-center">
                                        <a class="small" href="{{ route('secure')}}">Mot de passe oublié?</a>
                                    </div>
                                    <div class="text-center">
                                        Avez-vous un compte? <a class="small" href="{{ route('register.index')}}">Créer un compte</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3"></div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    @include('layouts.partials.scripts')

</body>

</html>
