<form action="<?php echo site_url('KPembeli/AddDataPembeli'); ?>" method="post">
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Tambah Data Pembeli</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                  <div>
                   <input type="hidden" class="form-control" value="<?php echo $this->session->userdata('id_login') ?>" name="id_login">
                  </div>

                  <div>
                    <label>Jumlah</label>
                    <input type="text" class="form-control" placeholder="Masukan Jumlah Pembelian" name="jumlah">
                  </div>

                  <div>
                    <label>Nama Pelanggan</label>
                    <select name="id_pelanggan" class="form-control select2" style="width: 100%;">
                      <?php
                        foreach($list_pelanggan as $lp){
                          echo '<option value="'.$lp->id_pelanggan.'">'.$lp->nama.'</option>';
                        }
                      ?>
                    </select>
                  </div>

                  <div>
                    <label>Tanggal</label>
                    <input type="date" class="form-control" name="tanggal_pembelian">
                  </div>
                  
                 
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box -->