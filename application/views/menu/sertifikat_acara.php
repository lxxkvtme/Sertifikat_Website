 <div class="content-page">
    <!-- Start content -->
    <div class="content">
       <div class="container-fluid">

          <a href="" class="btn btn-gradient mb-3" data-toggle="modal" data-target="#addAcara" style="background-color: #373854; color:white;"><i class="fas fa-plus"></i> Tambah Data</a>

          <a href="<?= base_url('Laporan/index') ?>" class="btn btn-gradient" style="background-color: #373854; color:white; margin-top: -16px" target=" _blank"><i class="fas fa-file-pdf"></i> Pdf</a>

          <table class="table table-striped" id="tableAcara">
             <thead>
                <tr>
                   <th scope="col">No</th>
                   <th scope="col">Nama Acara</th>
                   <th scope="col">Tema Acara</th>
                   <th scope="col">Tanggal Acara</th>
                   <th scope="col">Tempat Acara</th>
                   <th scope="col">Narasumber 1</th>
                   <th scope="col">Narasumber 2</th>
                   <th scope="col">Narasumber 3</th>
                   <th scope="col">Peserta</th>
                   <th scope="col">Aksi</th>
                </tr>
             </thead>
             <tbody>
                <?php $i = 1;
                  foreach ($acara as $ac) : ?>
                   <tr>
                      <th scope="row"><?= $i++; ?></th>
                      <td><?= $ac['nama_acara']; ?></td>
                      <td><?= $ac['tema_acara']; ?></td>
                      <td><?= $ac['tanggal_acara']; ?></td>
                      <td><?= $ac['tempat_acara']; ?></td>
                      <td><?= $ac['narasumber_acara_1']; ?></td>
                      <td><?= $ac['narasumber_acara_2']; ?></td>
                      <td><?= $ac['narasumber_acara_3']; ?></td>
                      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#LihatPeserta">Lihat Peserta</button></td>
                      <td>
                         <a href="<?= base_url('Sertifikat_acara/editAcara/') . $ac['id_acara']; ?>" class="btn btn-gradient" data-toggle="modal" data-target="#editAcara<?= $ac['id_acara']; ?>" style="background-color: #373854; color:white;"><i class="far fa-edit"></i></a>
                         <a href="<?= base_url('Sertifikat_acara/deleteAcara/') . $ac['id_acara']; ?>" class=" btn btn-danger " onclick="return confirm('hapus?')"><i class="far fa-trash-alt"></i></a>
                      </td>
                   </tr>
                <?php endforeach; ?>

             </tbody>
          </table>

       </div>
    </div>
 </div>

 <script>
    $(document).ready(function() {
       $('#tableAcara').DataTable();
    });
 </script>


 <!-- Modal Lihat Peserta  -->
 <!-- <?php
      $no = 0;
      foreach ($peserta as $ps) : ?>
    <div aria-hidden="true" aria-labelledby="myModalLabel" tabindex="-1" id="#LihatPeserta" class="modal fade">
       <div class="modal-dialog">
          <div class="modal-content">
             <div class="modal-header">
                <h4 class="modal-title">Peserta</h4>
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button"> X </button>
             </div>
             <div class="form-group">
                <label class="col-lg-8 col-sm-8 control-label">Nama Peserta</label>
                <div class="col-md-12">
                   <input type="text" class="form-control" name="nama_peserta" value="<?= $ps['nama_peserta']; ?>">
                </div>
             </div>

             <div class="modal-footer">
                   <button type="submit" class="btn btn-gradient" style="background-color: #373854; color:white;">Simpan</button>
                   <button type="button" class="btn btn-secondary" data-dismiss="modal"> Batal</button>
                </div>
             </form>
          </div>
       </div>
    </div>
 <?php endforeach; ?> -->
 <!-- Akhir Modal Peserta -->


 <!-- Modal Tambah  -->
 <div class=" modal fade" id="addAcara" tabindex="-1" aria-labelledby="addAcara" aria-hidden="true">
    <div class="modal-dialog">
       <div class="modal-content">
          <div class="modal-header">
             <h5 class="modal-title" id="addAcara">Tambah Data</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
             </button>
          </div>
          <form action="<?= site_url('Sertifikat_acara/addAcara'); ?>" method="post">
             <div class="modal-body">

                <div class="form-group">
                   <label class="col-lg-4 col-sm-4 control-label">Nama Acara</label>
                   <div class="col-md-12">
                      <input type="text" class="form-control" id="nama_acara" name="nama_acara" placeholder="Masukkan nama acara">
                   </div>
                </div>

                <div class="form-group">
                   <label class="col-lg-4 col-sm-4 control-label">Tema Acara</label>
                   <div class="col-md-12">
                      <textarea class="form-control" id="tema_acara" name="tema_acara" rows="3" placeholder="Masukkan tema acara"></textarea>
                   </div>
                </div>

                <div class="form-group">
                   <label class="col-lg-4 col-sm-4 control-label">Tanggal Acara</label>
                   <div class="col-md-12">
                      <input type="text" class="form-control datepicker" id="tanggal_acara" name="tanggal_acara" placeholder="dd-mm-yyyy">
                   </div>
                </div>

                <div class=" form-group">
                   <label class="col-lg-4 col-sm-4 control-label">Tempat Acara</label>
                   <div class="col-md-12">
                      <input type="text" class="form-control" id="tempat_acara" name="tempat_acara" placeholder="Masukkan tempat acara">
                   </div>
                </div>

                <div class="form-group">
                   <label class="col-lg-4 col-sm-4 control-label">Narasumber 1</label>
                   <div class="col-md-12">
                      <input type="text" class="form-control" id="narasumber_acara_1" name="narasumber_acara_1" placeholder="Masukkan narasumber acara 1">
                   </div>
                </div>

                <div class="form-group">
                   <label class="col-lg-4 col-sm-4 control-label">Narasumber 2</label>
                   <div class="col-md-12">
                      <input type="text" class="form-control" id="narasumber_acara_2" name="narasumber_acara_2" placeholder="Masukkan narasumber acara 2">
                   </div>
                </div>

                <div class="form-group">
                   <label class="col-lg-4 col-sm-4 control-label">Narasumber 3</label>
                   <div class="col-md-12">
                      <input type="text" class="form-control" id="narasumber_acara_3" name="narasumber_acara_3" placeholder="Masukkan narasumber acara 3">
                   </div>
                </div>

             </div>
             <div class="modal-footer">
                <button type="submit" class="btn btn-gradient" style="background-color: #373854; color:white;">Simpan</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
             </div>

          </form>
       </div>
    </div>
 </div>
 <!-- Akhir modal tambah -->


 <!-- Modal Edit -->
 <?php
   $no = 0;
   foreach ($acara as $ac) : ?>
    <div aria-hidden="true" aria-labelledby="myModalLabel" tabindex="-1" id="editAcara<?= $ac['id_acara']; ?>" class="modal fade">
       <div class="modal-dialog">
          <div class="modal-content">
             <div class="modal-header">
                <h4 class="modal-title">Ubah Data</h4>
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button"> X </button>
             </div>
             <form class="form-horizontal" action="<?= base_url('Sertifikat_acara/editAcara'); ?>" method="post" enctype="multipart/form-data" role="form">

                <input type="hidden" name="id_acara" value="<?= $ac['id_acara']; ?>">
                <div class="modal-body">

                   <div class="form-group">
                      <label class="col-lg-8 col-sm-8 control-label">Nama Acara</label>
                      <div class="col-md-12">
                         <input type="text" class="form-control" name="nama_acara" value="<?= $ac['nama_acara']; ?>">
                      </div>
                   </div>

                   <div class="form-group">
                      <label class="col-lg-8 col-sm-8 control-label">Tema Acara</label>
                      <div class="col-md-12">
                         <textarea class="form-control" id="tema_acara" name="tema_acara" rows="5"><?= $ac['tema_acara']; ?></textarea>
                      </div>
                   </div>

                   <div class="form-group">
                      <label class="col-lg-8 col-sm-8 control-label">Tanggal Acara</label>
                      <div class="col-md-12">
                         <input type="text" class="form-control datepicker" name="tanggal_acara" value="<?= $ac['tanggal_acara']; ?>">
                      </div>
                   </div>

                   <div class="form-group">
                      <label class="col-lg-8 col-sm-8 control-label">Tempat Acara</label>
                      <div class="col-md-12">
                         <input type="text" class="form-control" name="tempat_acara" value="<?= $ac['tempat_acara']; ?>">
                      </div>
                   </div>

                   <div class="form-group">
                      <label class="col-lg-8 col-sm-8 control-label">Narasumber Acara 1</label>
                      <div class="col-md-12">
                         <input type="text" class="form-control" name="narasumber_acara_1" value="<?= $ac['narasumber_acara_1']; ?>">
                      </div>
                   </div>

                   <div class="form-group">
                      <label class="col-lg-8 col-sm-8 control-label">Narasumber Acara 2</label>
                      <div class="col-md-12">
                         <input type="text" class="form-control" name="narasumber_acara_2" value="<?= $ac['narasumber_acara_2']; ?>">
                      </div>
                   </div>

                   <div class="form-group">
                      <label class="col-lg-8 col-sm-8 control-label">Narasumber Acara 3</label>
                      <div class="col-md-12">
                         <input type="text" class="form-control" name="narasumber_acara_3" value="<?= $ac['narasumber_acara_3']; ?>">
                      </div>
                   </div>

                </div>
                <div class="modal-footer">
                   <button type="submit" class="btn btn-gradient" style="background-color: #373854; color:white;">Simpan</button>
                   <button type="button" class="btn btn-secondary" data-dismiss="modal"> Batal</button>
                </div>
             </form>
          </div>
       </div>
    </div>
 <?php endforeach; ?>
 <!-- Akhir modal edit -->