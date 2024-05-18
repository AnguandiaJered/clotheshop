<!DOCTYPE html>
<html lang="en">

<head>

    @include('layouts.partials.header')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('layouts.partials.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('layouts.partials.navbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm offset-10 mb-4"><i
                        class="fas fa-plus fa-sm text-white-50"></i> Ajouter Client</a>
                   -->
                    <div class="col-md-12 col-sm-12 text-right">
                        <button data-toggle="modal" data-target="#myModal" class="btn btn-primary mt-3 mb-4">Effectuer l'opération</button>
                        <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                            <div role="document" class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 id="exampleModalLabel" class="modal-title">Paramètrage des utilisateurs</h5>
                                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body col-md-12">
                                        <form id="forme" method="POST" action="{{ route('users.store')}}" class="form-horizontal col-md-12" autocomplete="off">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12 mt-3">
                                                    <div class="form-group">
                                                        <label for="name">Entré noms</label>
                                                        <input type="text" class="form-control" name='name' required />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email">Entré l'email</label>
                                                        <input type="email" class="form-control" name='email' required />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="phone">Entré le phone</label>
                                                        <input type="tel" class="form-control" name='phone' required />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password">Entré le password</label>
                                                        <input type="password" class="form-control" name='password' required />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="match_id">selectionner le privilège</label>
                                                        <select class="form-control" name="role_id">
                                                            <option selected="">Choose...</option>
                                                            @foreach ($role as $item)
                                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-primary col-md-5 mt-2" value="Enregistrer" />
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- DataTales Example -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <a href="#" target="_blank" rel="noopener noreferrer" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Liste des nos utilisateurs</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone number</th>
                                            <!-- <th>Password</th> -->
                                            <th>Privilège</th>
                                            <th>Active</th>
                                            <th>Verified</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone number</th>
                                            <!-- <th>Password</th> -->
                                            <th>Privilège</th>
                                            <th>Active</th>
                                            <th>Verified</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($user as $items)
                                        <div id="edit{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                                            <div role="document" class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 id="exampleModalLabel" class="modal-title">Paramètrage des utilisateurs</h5>
                                                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                                    </div>
                                                    <div class="modal-body col-md-12">
                                                        <form id="forme" method="POST" action="{{ route('users.update')}}" class="form-horizontal col-md-12" autocomplete="off">
                                                            @csrf
                                                            <input type="hidden" name="id" id="id" value="{{$item->id}}" class="form-control" required />
                                                            <div class="row">
                                                                <div class="col-md-12 mt-3">
                                                                    <div class="form-group">
                                                                        <label for="name">Entré noms</label>
                                                                        <input type="text" class="form-control" name='name' value="{{$item->name}}" required />
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="email">Entré l'email</label>
                                                                        <input type="email" class="form-control" name='email' value="{{$item->email}}" required />
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="phone">Entré le phone</label>
                                                                        <input type="tel" class="form-control" name='phone' value="{{$item->phone}}" required />
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="password">Entré le password</label>
                                                                        <input type="password" class="form-control" name='password' value="{{$item->password}}" required />
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="match_id">selectionner le privilège</label>
                                                                        <select class="form-control" name="role_id">
                                                                            <option selected="">Choose...</option>
                                                                            @foreach ($role as $item)
                                                                            <option value="{{$item->role_id}}">{{$item->name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="submit" class="btn btn-primary col-md-5 mt-2" value="Modifier" />
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <tr>
                                            <div class="modal fade" id="edit{{$item->id}}">
                                                <div class="modal-dialog modal-success">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h3>Editer</h3><button class="btn btn-danger" data-dismiss="modal"></button>
                                                        </div>
                                                        <div class="modal-body"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <td>{{$items->name}}</td>
                                            <td>{{$items->email}}</td>
                                            <td>{{$items->phone}}</td>
                                            <!-- <td>{{$items->password}}</td> -->
                                            <td>{{$items->role_id}}</td>
                                            <td>{{$items->active}}</td>
                                            <td>{{$items->verified}}</td>
                                            <td>
                                                <a data-toggle="modal" data-target="#edit{{$item->id}}" href="{{'/etsyetu/users/'.$item->id}}" .$id><i class="fa fa-edit"></i></a>
                                                <a onclick="return (confirm(' Voulez-vous supprimer vraiment cette information ?'));" href="{{'/etsyetu/users/'.$item->id}}" class="ml-3"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('layouts.partials.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    @include('layouts.partials.scripts')

</body>

</html>
