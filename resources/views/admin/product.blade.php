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
                                        <h5 id="exampleModalLabel" class="modal-title">Paramètrage des produits</h5>
                                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body col-md-12">
                                        <form id="forme" method="POST" action="{{ route('products.store')}}" class="form-horizontal col-md-12" autocomplete="off" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6 mt-3">
                                                    <div class="form-group">
                                                        <label for="name">Entré nom</label>
                                                        <input type="text" class="form-control" name='name' required />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="sale_price">Entré sale price</label>
                                                        <input type="number" class="form-control" name='sale_price' required />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="old_price">Entré old price</label>
                                                        <input type="number" class="form-control" name='old_price' required />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="quantity">Entré quantity</label>
                                                        <input type="number" class="form-control" name='quantity' required />
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mt-3">
                                                    <div class="form-group">
                                                        <label for="categorie">selectionner subcategory</label>
                                                        <select class="form-control" name="subcategory_id">
                                                            <option selected="">Choose...</option>
                                                            @foreach ($subcategorie as $items)
                                                            <option value="{{$items->id}}">{{$items->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="image">Entré l'image</label>
                                                        <input type="file" class="form-control" name='image' required />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="slug">Entré slug</label>
                                                        <input type="text" class="form-control" name='slug' required />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="size">selectionner le size</label>
                                                        <select class="form-control" name="size">
                                                            <option selected="">Choose...</option>
                                                            <option value="PUBLISHED">M</option>
                                                            <option value="DRAFT">S</option>
                                                            <option value="PENDING">L</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="telephone">Entré la description</label>
                                                        <textarea name="description" id="description" cols="30" rows="5" class="form-control"></textarea>
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
                            <h6 class="m-0 font-weight-bold text-primary">Liste des nos produits</h6>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nom</th>
                                            <th>Secteur</th>
                                            <th>Image</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nom</th>
                                            <th>Secteur</th>
                                            <th>Image</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($product as $item)
                                        <div id="edit{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                                            <div role="document" class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 id="exampleModalLabel" class="modal-title">Paramètrage des projets</h5>
                                                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                                    </div>
                                                    <div class="modal-body col-md-12">
                                                        <form id="forme" method="POST" action="{{ route('products.update')}}" class="form-horizontal col-md-12" autocomplete="off" enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" name="id" id="id" value="{{$item->id}}" class="form-control" required />
                                                            <div class="row">
                                                                <div class="col-md-12 mt-3">
                                                                    <div class="form-group">
                                                                        <label for="nom">Entré nom</label>
                                                                        <input type="text" class="form-control" value="{{$item->name}}" name='name' required />
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="moderateur">Entré le secteur</label>
                                                                        <input type="text" class="form-control" name='sector' value="{{$item->sector}}" required />
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="moderateur">Entré l'image</label>
                                                                        <input type="file" class="form-control" name='image' value="{{$item->image}}" required />
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="telephone">Entré la description</label>
                                                                        <textarea name="description" value="{{$item->description}}" id="" cols="30" rows="5" class="form-control">{{$item->description}}</textarea>
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
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->sector}}</td>
                                            <td>{{$item->image}}</td>
                                            <td>{{$item->description}}</td>
                                            <td>
                                                <a data-toggle="modal" data-target="#edit{{$item->id}}" href="{{'/etsyetu/products/'.$item->id}}" .$id><i class="fa fa-edit"></i></a>
                                                <a onclick="return (confirm(' Voulez-vous supprimer vraiment cette information ?'));" href="{{'/etsyetu/products/'.$item->id}}" id="del" class="ml-3"><i class="fa fa-trash"></i></a>
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
