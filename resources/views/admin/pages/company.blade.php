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


                    <div class="col-md-12 col-sm-12 text-right">
                        <button data-toggle="modal" data-target="#myModal" class="btn btn-primary mt-3 mb-4">Effectuer l'opération</button>
                        <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                            <div role="document" class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 id="exampleModalLabel" class="modal-title">Paramètrage de l'entreprise</h5>
                                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body col-md-12">
                                        <form id="forme" method="POST" action="{{ route('company.store')}}" class="form-horizontal col-md-12" autocomplete="off" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6 mt-3">
                                                    <div class="form-group">
                                                        <label for="nom">Entré nom</label>
                                                        <input type="text" class="form-control" name='name' required />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nom">Entré logo</label>
                                                        <input type="file" class="form-control" name='logo' required />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nom">Entré le contact 1</label>
                                                        <input type="text" class="form-control" name='phone1' required />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nom">Entré le contact 2</label>
                                                        <input type="text" class="form-control" name='phone2' required />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nom">Entré le contact 3</label>
                                                        <input type="text" class="form-control" name='phone3' required />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="moderateur">Entré l'adresse</label>
                                                        <input type="text" class="form-control" name='adresse' required />
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mt-3">
                                                    <div class="form-group">
                                                        <label for="mail">Entré le mail</label>
                                                        <input type="email" class="form-control" name='email' />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nom">Entré lien facebook</label>
                                                        <input type="text" class="form-control" name='facebook' required />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nom">Entré lien twitter</label>
                                                        <input type="text" class="form-control" name='twitter' required />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nom">Entré lien linkedin</label>
                                                        <input type="text" class="form-control" name='linkedin' required />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="telephone">Entré lien web site</label>
                                                        <input type="tel" class="form-control" name='website' required />
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
                        <a href="" target="_blank" rel="noopener noreferrer" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Liste des nos clients</h6>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Logo</th>
                                            <th>Contact 1</th>
                                            <th>Contact 2</th>
                                            <th>Contact 3</th>
                                            <th>Adresse</th>
                                            <th>Email</th>
                                            <th>Facebook</th>
                                            <th>Twitter</th>
                                            <th>Linkedin</th>
                                            <th>Website</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Logo</th>
                                            <th>Contact 1</th>
                                            <th>Contact 2</th>
                                            <th>Contact 3</th>
                                            <th>Adresse</th>
                                            <th>Email</th>
                                            <th>Facebook</th>
                                            <th>Twitter</th>
                                            <th>Linkedin</th>
                                            <th>Website</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($company as $item)
                                        <div id="edit{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                                            <div role="document" class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 id="exampleModalLabel" class="modal-title">Paramètrage de l'entreprise</h5>
                                                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                                    </div>
                                                    <div class="modal-body col-md-12">
                                                        <form id="forme" method="POST" action="{{ route('company.update')}}" class="form-horizontal col-md-12" autocomplete="off" enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" name="id" id="id" value="{{$item->id}}" class="form-control" required />
                                                            <div class="row">
                                                                <div class="col-md-6 mt-3">
                                                                    <div class="form-group">
                                                                        <label for="nom">Entré nom</label>
                                                                        <input type="text" class="form-control" name='name' value="{{$item->name}}" required />
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="nom">Entré logo</label>
                                                                        <input type="file" class="form-control" name='logo' value="{{$item->logo}}" required />
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="nom">Entré le contact 1</label>
                                                                        <input type="text" class="form-control" name='phone1' value="{{$item->phone1}}" required />
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="nom">Entré le contact 2</label>
                                                                        <input type="text" class="form-control" name='phone2' value="{{$item->phone2}}" required />
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="nom">Entré le contact 3</label>
                                                                        <input type="text" class="form-control" name='phone3' value="{{$item->name}}" required />
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="moderateur">Entré l'adresse</label>
                                                                        <input type="text" class="form-control" name='adresse' value="{{$item->adresse}}" required />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mt-3">
                                                                    <div class="form-group">
                                                                        <label for="mail">Entré le mail</label>
                                                                        <input type="email" class="form-control" name='email' value="{{$item->email}}" />
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="nom">Entré lien facebook</label>
                                                                        <input type="text" class="form-control" name='facebook' value="{{$item->facebook}}" required />
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="nom">Entré lien twitter</label>
                                                                        <input type="text" class="form-control" name='twitter' value="{{$item->twitter}}" required />
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="nom">Entré lien linkedin</label>
                                                                        <input type="text" class="form-control" name='linkedin' value="{{$item->linkedin}}" required />
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="telephone">Entré lien web site</label>
                                                                        <input type="tel" class="form-control" name='website' value="{{$item->website}}" required />
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
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->logo}}</td>
                                            <td>{{$item->phone1}}</td>
                                            <td>{{$item->phone2}}</td>
                                            <td>{{$item->phone3}}</td>
                                            <td>{{$item->adresse}}</td>
                                            <td>{{$item->email}}</td>
                                            <td>{{$item->facebook}}</td>
                                            <td>{{$item->twitter}}</td>
                                            <td>{{$item->linkedin}}</td>
                                            <td>{{$item->website}}</td>
                                            <td>
                                                <a data-toggle="modal" data-target="#edit{{$item->id}}" href="{{'/congopeacenetwork/company/'.$item->id}}" .$id><i class="fa fa-edit"></i></a>
                                                <a onclick="return (confirm(' Voulez-vous supprimer vraiment cette information ?'));" href="{{'/congopeacenetwork/company/'.$item->id}}" id="del" class="ml-3"><i class="fa fa-trash"></i></a>
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
