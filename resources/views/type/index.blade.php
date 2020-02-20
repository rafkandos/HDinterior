<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>HD Interior - Type</title>
  <link rel="shortcut icon" href="{{asset('admin/img/logo.png')}}" type="image/x-icon">

  <!-- Custom fonts for this template-->
  <link href="{{asset('admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="{{asset('admin/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('admin/css/sb-admin.css')}}" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="#">Start Bootstrap</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="admins">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="type">
          <i class="fas fa-fw fa-cubes"></i>
          <span>Type</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Admin</a>
          </li>
          <li class="breadcrumb-item active">Type</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6 font-weight-bold text-uppercase">
                        <i class="fas fa-table"></i>
                        Type Menu
                    </div>
                    <div class="col-md-6">
                        <a href="#" data-toggle="modal" data-target="#add" class="btn waves-effect waves-light btn-primary">
                            <i class="fas fa-plus-circle"></i> <b>Tambah</b>
                        </a>
                    </div>
                </div>
            </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Type Name</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($type as $t)
                    <tr>
                        <td>{{ $t->id_type }}</td>
                        <td>{{ $t->type_name }}</td>
                        <td align="center">
                            <img src="data_file/{{$t->image}}" alt="" width="150px">
                        </td>
                        <td align="center">
                            <a href="#" class="btn btn-sm btn-info">
                                <i class="fas fa-edit"></i> <b>Edit</b>
                            </a>
                            <a href="#" class="btn btn-sm btn-danger">
                                <i class="fas fa-trash"></i> <b>Hapus</b>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Add Type</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="type/add" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                    <div class="modal-body">
                        <div class="tab-pane" id="settings" role="tabpanel">
                            <div class="card-block">
                                    <div class="form-horizontal form-material form-group">
                                        <label class="font-weight-bold">Type Name</label>
                                        <input type="text" class="form-control form-control-line" name="tn"><br>
                                        <label class="font-weight-bold">Image</label>
                                        <input type="file" class="form-control form-control-line" name="img">
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" name="add" class="btn btn-success font-weight-bold" value="SUBMIT">
                    </div>
                </form>
            </div>
        </div>
    </div>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Page level plugin JavaScript-->
  <script src="{{asset('admin/vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('admin/vendor/datatables/jquery.dataTables.js')}}"></script>
  <script src="{{asset('admin/vendor/datatables/dataTables.bootstrap4.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('admin/js/sb-admin.min.js')}}"></script>

  <!-- Demo scripts for this page-->
  <script src="{{asset('admin/js/demo/datatables-demo.js')}}"></script>
  <script src="{{asset('admin/js/demo/chart-area-demo.js')}}"></script>

</body>

</html>
