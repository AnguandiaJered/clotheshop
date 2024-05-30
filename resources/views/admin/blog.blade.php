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
                                        <h5 id="exampleModalLabel" class="modal-title">Paramètrage des blogs</h5>
                                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body col-md-12">
                                        <form id="forme" method="POST" action="{{ route('blog.store')}}" class="form-horizontal col-md-12" autocomplete="off" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6 mt-3">
                                                    <div class="form-group">
                                                        <label for="categorie">selectionner la categorie</label>
                                                        <select class="form-control" name="category_id">
                                                            <option selected="">Choose...</option>
                                                            @foreach ($categorie as $items)
                                                            <option value="{{$items->id}}">{{$items->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="title">Entré titre</label>
                                                        <input type="text" class="form-control" name='title' required />
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mt-3">
                                                    <div class="form-group">
                                                        <label for="image">Entré l'image</label>
                                                        <input type="file" class="form-control" name='image' required />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="slug">Entré slug</label>
                                                        <input type="text" class="form-control" name='slug' required />
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mt-3">
                                                    <div class="form-group">
                                                        <label for="categorie">selectionner le status</label>
                                                        <select class="form-control" name="status">
                                                            <option selected="">Choose...</option>
                                                            <option value="PUBLISHED">PUBLISHED</option>
                                                            <option value="DRAFT">DRAFT</option>
                                                            <option value="PENDING">PENDING</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="excerpt">Entré detail</label>
                                                        <textarea name="excerpt" id="excerpt" cols="30" rows="5" class="form-control"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="body">Entré detail suite</label>
                                                        <textarea name="body" id="body" cols="30" rows="5" class="form-control"></textarea>
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
                            <h6 class="m-0 font-weight-bold text-primary">Liste des nos blogs</h6>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Utilisateur</th>
                                            <th>Categorie</th>
                                            <th>Titre</th>
                                            <th>Detail</th>
                                            <th>Image</th>
                                            <th>Slug</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Utilisateur</th>
                                            <th>Categorie</th>
                                            <th>Titre</th>
                                            <th>Detail</th>
                                            <th>Image</th>
                                            <th>Slug</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach ($post as $item)
                                        <div id="edit{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                                            <div role="document" class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 id="exampleModalLabel" class="modal-title">Paramètrage des blogs</h5>
                                                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                                    </div>
                                                    <div class="modal-body col-md-12">
                                                        <form id="forme" method="POST" action="{{ route('blog.update')}}" class="form-horizontal col-md-12" autocomplete="off" enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" name="id" id="id" value="{{$item->id}}" class="form-control" required />
                                                            <div class="row">
                                                                <div class="col-md-6 mt-3">
                                                                    <div class="form-group">
                                                                        <label for="categorie">selectionner la categorie</label>
                                                                        <select class="form-control" name="category_id">
                                                                            <option value="{{$item->category_id}}">{{$item->category_id}}</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="title">Entré titre</label>
                                                                        <input type="text" class="form-control" value="{{$item->title}}" name='title' required />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mt-3">
                                                                    <div class="form-group">
                                                                        <label for="image">Entré l'image</label>
                                                                        <input type="file" class="form-control" value="{{$item->image}}" name='image' required />
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="slug">Entré slug</label>
                                                                        <input type="text" class="form-control" value="{{$item->slug}}" name='slug' required />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 mt-3">
                                                                    <div class="form-group">
                                                                        <label for="excerpt">Entré detail</label>
                                                                        <textarea name="excerpt" id="excerpt" cols="30" rows="5" value="{{$item->excerpt}}" class="form-control">{{$item->excerpt}}</textarea>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="body">Entré detail suite</label>
                                                                        <textarea name="body" id="body" cols="30" rows="5" value="{{$item->body}}" class="form-control">{{$item->body}}</textarea>
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
                                            <td>{{$item->author_id}}</td>
                                            <td>{{$item->category_id}}</td>
                                            <td>{{$item->title}}</td>
                                            <td>{{$item->excerpt}}</td>
                                            <td>{{$item->image}}</td>
                                            <td>{{$item->slug}}</td>
                                            <td>
                                                <a data-toggle="modal" data-target="#edit{{$item->id}}" href="{{'/etsyetu/blog/'.$item->id}}" .$id><i class="fa fa-edit"></i></a>
                                                <a onclick="return (confirm(' Voulez-vous supprimer vraiment cette information ?'));" href="{{'/etsyetu/blog/'.$item->id}}" id="del" class="ml-3"><i class="fa fa-trash"></i></a>
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
