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
                                        <h1 class="h4 text-gray-900 mb-4">Reinitialisation de mot de passe</h1>
                                        <span>
                                            vous êtes au bout de réunitialisation de mot de passe; prière d'entrer les bonnes bonnes informations secretes.
                                        </span>
                                    </div>
                                    <form class="user" method="post" action="#">
                                        <div class="form-group"></div>
                                        <div class="form-group">
                                            <input type="text" name="user_password" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Nouveau mot de passe">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="user_password2" class="form-control form-control-user" id="exampleInputPassword" placeholder="Confirmer votre mot de passe">
                                        </div>

                                        <div class="form-group">

                                            <input class="form-control" type="hidden" name="email" id="email" value="#">

                                            <input class="form-control" type="hidden" name="verification_key" id="verification_key" value="#">

                                            <span class="text-danger"></span>
                                        </div>



                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Restaurer mon mot de passe
                                        </button>


                                    </form>
                                    <hr>

                                    <div class="text-center">
                                        <a class="small" href="{{ route('login')}}">Revenir à la connexion</a>
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

    @include('layouts.partials.scripts')pt>

</body>

</html>
