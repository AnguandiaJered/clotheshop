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
                                        <h1 class="h4 text-gray-900 mb-4">Recupération mot de passe</h1>
                                        <span>
                                            Si vous avez oublié votre mot de passe, nous vous enverrons par e-mail des instructions pour réinitialiser votre mot de passe.
                                        </span>
                                    </div>
                                    <form class="user" method="post" action="#">
                                        <div class="form-group"></div>
                                        <div class="form-group">
                                            <input type="email" name="user_email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Entrez votre adresse mail">
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Envoyer le lien de reunitialisation
                                        </button>

                                    </form>
                                    <hr>

                                    <div class="text-center">
                                        <a class="small" href="{{ route('login')}}">Revenir à la connexion</a>
                                    </div>
                                    <div class="text-center">
                                        <!-- <a class="small" href="register.html">Create an Account!</a> -->
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
