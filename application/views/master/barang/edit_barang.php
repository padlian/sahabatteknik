<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <small> Barang </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url()?>pengurus"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Input Data Barang</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- COLOR PALETTE -->
      <div class="box box-default color-palette-box">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-tag"></i>Tambah Barang</h3>
        </div>
        <div class="box-body">
          <?php if ($this->session->flashdata('success')): ?>
          <div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>
         <p>
           <a href="<?php echo base_url();?>admin/barang/" class="btn btn-danger">Kembali</a>
         </p>
         <form method="post" enctype="multipart/form-data" >
            <div class="form-group">
              <label>ID Kelompok</label>
              <input class="form-control <?php echo form_error('idkelompok') ? 'is-invalid':'' ?>"
			  type="text" name="idkelompok" value="<?php echo $barang->ID_KELOMPOK ?>" />
            </div>
            <div class="form-group">
              <label>ID Barang</label>
              <input class="form-control <?php echo form_error('idbarang') ? 'is-invalid':'' ?>"
			  type="text" name="idbarang" value="<?php echo $barang->ID_BARANG ?>" />
            </div>
            <div class="form-group">
              <label>Nama Barang</label>
              <input class="form-control <?php echo form_error('namabarang') ? 'is-invalid':'' ?>"
			  type="text" name="namabarang" value="<?php echo $barang->NAMA_BARANG ?>" />
            </div>
            <div class="form-group">
              <label>Satuan</label>
              <input class="form-control <?php echo form_error('satuan') ? 'is-invalid':'' ?>"
			  type="text" name="satuan" value="<?php echo $barang->SATUAN ?>" />
            </div>
            <div class="form-group">
              <label>Harga</label>
              <input class="form-control <?php echo form_error('harga') ? 'is-invalid':'' ?>"
			  type="text" name="harga" value="<?php echo $barang->HARGA ?>" />
            </div>
            <div class="form-group">
            <label>Qty</label>
            <input class="form-control <?php echo form_error('qty') ? 'is-invalid':'' ?>"
			  type="text" name="qty" value="<?php echo $barang->QTY ?>" />
			      </div>
          <input class="btn btn-success" type="submit" name="btn" value="Save" />
          </form>
        </div>
        <!-- /.box-body -->
      </div>
      
    </section>
    <!-- /.content -->
  </div>