<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistem Informasi Awardee Beasiswa NTB</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <div id="wrapper">
            <nav class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav metismenu" id="side-menu">
                        <li class="nav-header">
                            <div class="dropdown profile-element">
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="block m-t-xs font-bold">Adminsitrator</span>
                                <span class="text-muted text-xs block">Lembaga Pengembangan Pendidikan | NTB</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <a href="/index"><i class="fa fa-archive"></i> <span class="nav-label">Surat Masuk</span></a>
                        </li>
                        <li class="active">
                            <a href="/surat_keluar"><i class="fa fa-archive"></i> <span class="nav-label">Surat Keluar</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div id="page-wrapper" class="gray-bg">
                <div class="row border-bottom">
                    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                        <div class="navbar-header">
                            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                        </div>
                        <ul class="nav navbar-top-links navbar-right">
                            <li>
                                <a href="login.html">
                                <i class="fa fa-sign-out"></i> Log out
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="row wrapper border-bottom white-bg page-heading">
                    <div class="col-md-12">
                        <h2> <b>Surat Keluar | </b>Adminsitrator </h2>
                    </div>
                </div>
                <div class="wrapper wrapper-content animated fadeInRight">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ibox ">
                                <div class="ibox-title">
                                    <h5>Data Surat</h5>
                                    <div class="ibox-tools">
                                        <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="ibox-content">
                                    <div class="table-responsive">
                                        <div class="cont-modal m-3">
                                            <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal5">
                                            <i class="fa fa-plus-circle"></i> Tambah Data
                                            </button>
                                            <!-- === -->
                                            <div class="modal inmodal fade" id="myModal5" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                                            <h4 class="modal-title">Tambah Data Surat Keluar</h4>
                                                        </div>
                                                        <form action="/addSK" method="POST" id="addSK">
                                                         <div class="modal-body">
                                                            <div class="form-group  row">
                                                               <label class="col-sm-3 col-form-label">Masukkan Nomor Surat :</label>
                                                               <div class="col-sm-9">
                                                                  <input type="text" class="form-control" autocomplete="off" form="addSK" name="nomor_surat">
                                                                  </div>
                                                               </div>
                                                               <div class="form-group  row">
                                                                  <label class="col-sm-3 col-form-label">Masukkan Tanggal Surat :</label>
                                                                  <div class="col-sm-9">
                                                                     <input type="date" class="form-control" autocomplete="off" form="addSK" name="tanggal_surat">
                                                                  </div>
                                                               </div>
                                                               <div class="form-group  row">
                                                                  <label class="col-sm-3 col-form-label">Masukkan Penerima :</label>
                                                                  <div class="col-sm-9">
                                                                     <input type="text" class="form-control" autocomplete="off" form="addSK" name="penerima">
                                                                  </div>
                                                               </div>
                                                               <div class="form-group  row">
                                                                  <label class="col-sm-3 col-form-label">Masukkan Perihal :</label>
                                                                  <div class="col-sm-9">
                                                                     <input type="text" class="form-control" autocomplete="off" form="addSK" name="perihal">
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                               <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                                               <button type="submit" class="btn btn-primary" form="addSK">Save changes</button>
                                                            </div>
                                                         </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php if(session()->get('success')): ?>
                                          <div class="alert alert-success" role="alert">
                                                <i class="fa fa-info-circle" aria-hidden="true"> &nbsp; </i><?= session()->get('success')?>
                                          </div>
                                       <?php endif ?>                                          
                                        <table class="table table-striped table-bordered table-hover dataTables-example" >
                                            <thead>
                                                <tr>
                                                    <th>Nomor Surat</th>
                                                    <th>Tanggal Surat</th>
                                                    <th>Perihal</th>
                                                    <th>Penerima</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($data as $d):?>
                                                   <tr>
                                                        <td><?= $d['no_surat']?></td>
                                                        <td><?= $d['tgl_surat']?></td>
                                                        <td><?= $d['perihal']?></td>
                                                        <td><?= $d['penerima']?></td>
                                                        <td>
                                                            <button class="btn btn-primary btn-rounded btn-outline btn-xs" data-toggle="modal" data-target="#edit_<?=$d['id']?>">Edit</button>
                                                            <div class="modal inmodal fade" id="edit_<?=$d['id']?>" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                                                                <h4 class="modal-title">Edit Data Surat Masuk</h4>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form action="/updateSK" method="post" id="updateSK_<?=$d['id']?>"></form>
                                                                            <div class="form-group  row">
                                                                                <label class="col-sm-3 col-form-label">Masukkan Nomor Surat :</label>
                                                                                <div class="col-sm-9">
                                                                                <input type="text" class="form-control" autocomplete="off" name="no_surat" form="updateSK_<?=$d['id']?>" value="<?= $d['no_surat']?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group  row">
                                                                                <label class="col-sm-3 col-form-label">Masukkan Tanggal Surat :</label>
                                                                                <div class="col-sm-9">
                                                                                <input type="date" class="form-control" autocomplete="off" name="tgl_surat" form="updateSK_<?=$d['id']?>" value="<?= $d['tgl_surat']?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group  row">
                                                                                <label class="col-sm-3 col-form-label">Masukkan Pengirim :</label>
                                                                                <div class="col-sm-9">
                                                                                <input type="text" class="form-control" autocomplete="off" name="penerima" form="updateSK_<?=$d['id']?>" value="<?= $d['penerima']?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group  row">
                                                                                <label class="col-sm-3 col-form-label">Masukkan Perihal :</label>
                                                                                <div class="col-sm-9">
                                                                                <input type="text" class="form-control" autocomplete="off" name="perihal" form="updateSK_<?=$d['id']?>" value="<?= $d['perihal']?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                                                                <button type="submit" class="btn btn-primary" form="updateSK_<?=$d['id']?>" name="id" value="<?=$d['id']?>">Save changes</button>
                                                                        </div> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-danger btn-rounded btn-outline btn-xs" data-toggle="modal" data-target="#delete_<?=$d['id']?>">Hapus</button>
                                                            <div class="modal inmodal fade" id="delete_<?=$d['id']?>" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                    <div class="modal-header">
                                                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                                                            <h4 class="modal-title">HAPUS</h4>
                                                                    </div>
                                                                    <div class="modal-body d-flex justify-content-center align-items-center">
                                                                        <h1 class="text text-danger ?"> <b>Apakah Anda Yakin ??</b> </h1>
                                                                        <form action="/deleteSK" method="post" id="deleteSK_<?=$d['id']?>"></form>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                                                            <button type="submit" class="btn btn-danger" form="deleteSK_<?=$d['id']?>" name="id" value="<?=$d['id']?>">Hapus</button>
                                                                    </div> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                   </tr>
                                                <?php endforeach?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <div class="float-right">
                        Developed By : <strong><a href="https://spacemed.id" target="_blank">Spacemed</a></strong>
                    </div>
                    <div>
                        <strong>&copy;</strong> Lembaga Pengembangan Pendidikan Nusa Tenggara Barat
                    </div>
                </div>
            </div>
        </div>
        <!-- Mainly scripts -->
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
        <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="js/plugins/dataTables/datatables.min.js"></script>
        <script src="js/plugins/dataTables/dataTables.bootstrap4.min.js"></script>
        <!-- Custom and plugin javascript -->
        <script src="js/inspinia.js"></script>
        <script src="js/plugins/pace/pace.min.js"></script>
        <!-- Page-Level Scripts -->
        <script>
            $(document).ready(function(){
                $('.dataTables-example').DataTable({
                    pageLength: 25,
                    responsive: true,
                    dom: '<"html5buttons"B>lTfgitp',
                    buttons: [
                        { extend: 'copy'},
                        {extend: 'csv'},
                        {extend: 'excel', title: 'SuratKeluar'},
                        {extend: 'pdf', title: 'SuratKeluar'},
            
                        {extend: 'print',
                         customize: function (win){
                                $(win.document.body).addClass('white-bg');
                                $(win.document.body).css('font-size', '10px');
            
                                $(win.document.body).find('table')
                                        .addClass('compact')
                                        .css('font-size', 'inherit');
                        }
                        }
                    ]
            
                });
            
            });
            
        </script>
    </body>
</html>