<!-- Main content -->
<form action="<?php echo site_url('Pembeli/UpdateDataPembeli'); ?>" method="post">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Update Data Pembelian</h3>
              
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                  <input type="hidden" name="id_pembeli" value="<?php echo $detail['id_pembeli']; ?>">
                  <input type="hidden" name="id_pelanggan" value="<?php echo $detail['id_pelanggan']; ?>">
                    <br>
                  
                   <input type="hidden" class="form-control" value="<?php echo $this->session->userdata('id_login') ?>" name="id_login">
                  
                   <div>
                    <label>Jumlah</label>
                    <br>
                    <input type="text" name="jumlah" class="form-control" value="<?php echo $detail['jumlah']; ?>">
                  </div>
                
                  <div>
                    <label>Tanggal Pembelian</label>
                    <br>
                    <input type="date" name="tanggal_pembelian" class="form-control">
                  </div>

          


                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box -->