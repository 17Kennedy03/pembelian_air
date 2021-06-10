<section class="content-header">
         <!--  <h1>
            Infomasi SPP     <small>Data Pembelian</small>
          </h1> -->
</section>

<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Informasi SPP     <small>Data Pembelian</small></h3>

             
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
		
		
      <a href="<?php echo site_url('Pembeli/VFormAddPembeli'); ?>" class="btn btn-primary btn-sm fa fa-plus"> Tambah Data</a><br><br>
		
	
              <table class="table table-striped" id="data_grid">
                <thead>
                <tr>
                  <th>Nama Pelayan</th>
                  <th>Jumlah Beli</th>
                  <th>Pembeli</th>
                  <th>Tanggal Pembelian</th>
                  <th>Aksi</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                <?php
	if(!empty($DataPembeli))
	{
		foreach($DataPembeli as $ReadDS)
		{
	?>

	<tr>
		<td><?php echo $ReadDS->nama_karyawan; ?></td>
    <td><?php echo $ReadDS->jumlah; ?></td>
    <td><?php echo $ReadDS->nama; ?></td>
    <td><?php echo $ReadDS->tanggal_pembelian; ?></td>

		<td width="5%">
			<a href="<?php echo site_url('Pembeli/DataPembeli/'.$ReadDS->id_pembeli.'/view') ?>">Update</a>
      <td>
      <a href="<?php echo site_url('Pembeli/DeleteDataPembeli/'.$ReadDS->id_pembeli) ?>">Delete</a>
		</td>
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



