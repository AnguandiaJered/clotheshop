<!DOCTYPE html>
<html lang="en">

<head>

    @include('layouts.partials.header')
</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Création de compte</h1>
                                <span>
                                    Créer un nouveau compte au système .
                                </span>
                            </div>
                            <form class="user" method="post" id="user_form" action="{{route('auth.register')}}">
                                @csrf
                                <div class="form-group"></div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text" name="name" class="form-control form-control-user" placeholder="Entrez votre nom">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user" placeholder="Entrez votre adresse mail">
                                </div>
                                <div class="form-group">
                                    <input type="tel" name="phone" class="form-control form-control-user" placeholder="Entrez votre numero de telephone">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="password" name="password" class="form-control form-control-user" placeholder="Mot de passe secret">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" id="customCheck" required>
                                        <label class="custom-control-label" for="customCheck"> J'accepte Politique de confidentialité
                                        </label>
                                    </div>
                                </div>
                                {{-- <button type="submit" class="btn btn-primary btn-user btn-block">
                                    S'inscrire
                                </button> --}}
                                <input type="submit" class="btn btn-primary btn-user btn-block" value=" S'inscrire" />
                            </form>
                            <hr>

                            <div class="text-center">
                                Vous avez déjà un compte ?<a class="small" href="{{ route('login')}}">&nbsp; S'identifier</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
            </div>
        </div>

    </div>

    @include('layouts.partials.scripts')

</body>

</html>
