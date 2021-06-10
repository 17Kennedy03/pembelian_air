<section class="content-header">
         <!--  <h1>
            Infomasi SPP     <small>Data User</small>
          </h1> -->
</section>

<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Informasi     <small>Data Isi Ulang</small></h3>

             
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
		
		
      <a href="<?php echo site_url('IsiUlang/VFormAddIsiUlang'); ?>" class="btn btn-primary btn-sm fa fa-plus"> Tambah Data</a><br><br>
		
	
              <table class="table table-striped" id="data_grid">
                <thead>
                <tr>
                  <th>Tanggal</th>
                  <th>Aksi</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                <?php
	if(!empty($DataIsiUlang))
	{
		foreach($DataIsiUlang as $ReadDS)
		{
	?>

	<tr>
		<td><?php echo $ReadDS->tanggal; ?></td>

		<td width="5%">
			<a href="<?php echo site_url('IsiUlang/DataIsiUlang/'.$ReadDS->id_ulang.'/view') ?>">Update</a>
      <td>
      <a href="<?php echo site_url('IsiUlang/DeleteDataIsiUlang/'.$ReadDS->id_ulang) ?>">Delete</a>
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



