<div class="warper container-fluid"></div>
<section class="content-header">
      <h1>
        Menu Data Gudang
      </h1>
      <ol class="breadcrumb">
        <li><a><i class="fa fa-table"></i> Tabel Gudang</a></li>
      </ol>
    </section>
    <div class="card shadow mb-4">
            <div class="card-header py-3">
               <button data-toggle="modal" data-target="#tambah-data" class="btn btn-primary" type="button">Tambah Data</button>
             </span></div>
                    <h4><?php echo $this->session->flashdata('notif');?></h4>
                    <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Gudang</th>
            <th>Aksi</th>
            </tr>
    </thead>
    <tbody>
        <tr>
            <?php
            $no = 1;
            foreach ($data->result() as $row){
                ?>
                
            <td><?php echo $no++;?></td>
            <td><?php echo $row->nm_gdng;?></td>
            <td align="center">
            <a ><button data-toggle="modal" data-target="#ubah-data<?php echo $no;?>" type="button" class="btn btn-warning btn-md"><span class="fa fa-edit"></span></button></a>
            <a href="<?php echo site_url('gudang/hapusdata/').$row->id_gdng;?>" class="btn btn-danger btn-md"><span class="fa fa-trash"></span></a>
                                     
            </td>
        </tr>
        </tr>
    <?php } ?>
    </tbody>
</table>
</div>
</div>
</div>

<!--modal tambah data-->
<div aria-hidden="true" aria-labelledby="exampleModalLabel" role="dialog" tabindex="-1" id="tambah-data" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header ">
                <h4 class="modal-title" id="exampleModalLabel">Tambah Data</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                    </div>
                <form class="form-horizontal" action="<?php echo site_url('gudang/tambahdata')?>" method="post" enctype="multipart/form-data" role="form">
                    <div class="modal-body">

                    <div class="form-body">
                    <div class="form-group">
                    <label class="control-label col-md-5">Nama Gudang</label>
                    <div class="col-md-12">
                    <input type="text" name="nm_gdng" placeholder="Nama gudang" class="form-control" required="">
                    </div>
                    </div>
                    </div>

                    </div>
                        <div class="modal-footer">
                            <button class="btn btn-success" type="submit"> Simpan&nbsp;</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal"> Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
<!--end modal tambah data-->
<!--modal ubah-->
<?php  $y=2;
     foreach ($data->result_array() as $row) { ?>
       <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="ubah-data<?php echo $y;?>" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                     <h4 class="modal-title">Ubah Data</h4>
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                   
                </div>
                <form class="form-horizontal" action="<?php echo site_url('gudang/ubahdata')?>" method="post" enctype="multipart/form-data" role="form">
                    <div class="modal-body">
                    
                    <input type="hidden" name="id_gdng" placeholder="ID Komoditi" class="form-control" value="<?php echo $row['id_gdng'];?>" readonly>
                    
                    <div class="form-body">
                    <div class="form-group">
                    <label class="control-label col-md-5">Nama Gudang</label>
                    <div class="col-md-12">
                    <input type="text" name="nm_gdng" placeholder="Nama Gudang" class="form-control" value="<?php echo $row['nm_gdng'];?>" required="">
                    </div>
                    </div>
                    </div>
                           
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-success" type="submit"> Simpan&nbsp;</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal"> Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php $y++; }?>
    <!-- END Modal Ubah -->