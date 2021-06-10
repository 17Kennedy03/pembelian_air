<section class="content-header">
         <!--  <h1>
            Infomasi SPP     <small>Data Pelanggan</small>
          </h1> -->
</section>

<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Informasi    <small>Data Pelanggan</small></h3>

             
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
		
		
      <a href="<?php echo site_url('KPelanggan/VFormAddPelanggan'); ?>" class="btn btn-primary btn-sm fa fa-plus"> Tambah Data</a><br><br>
		
	
              <table class="table table-striped" id="data_grid">
                <thead>
                <tr>
                  <th>Nama</th>
                  <th>No Telepon</th>
                  <th>Alamat</th>
                  <th>Aksi</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                <?php
	if(!empty($DataPelanggan))
	{
		foreach($DataPelanggan as $ReadDS)
		{
	?>

	<tr>
		<td><?php echo $ReadDS->nama; ?></td>
    <td><?php echo $ReadDS->no_tlp; ?></td>
    <td><?php echo $ReadDS->alamat; ?></td>

		<td width="5%">
      <a href="<?php echo site_url('Pelanggan/DeleteDataPelanggan/'.$ReadDS->id_pelanggan) ?>">Delete</a>
		</td>
    <td></td>
	</tr>
            
         <?php
     }
 }
 ?>
 </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      <script type="text/javascript">$('#data_grid').DataTable()</script>



