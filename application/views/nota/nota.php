<div class="warper container-fluid"></div>
<section class="content-header">
      <h1>
        Cetak Nota
      </h1>
      <ol class="breadcrumb">
        <li><a><i class="fa fa-table"></i> Tabel Nota</a></li>
      </ol>
    </section>
    <div class="card shadow mb-4">
            <div class="card-header py-3">
            <form class="form-horizontal" action="<?php echo site_url('nota/filter')?>" method="post" enctype="multipart/form-data" role="form">
            <div class="form-body">
                    <div class="form-group">
                    <label class="control-label col-md-5">Tanggal</label>
                    <div class="col-md-3">
                    <input type="date" name="tanggal" class="form-control" required="">
                    </div>
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg"><span class="fa fa-filter"></span> Filter</button>
             </span></div>
                    </form>
                    <div class="card-body">
                    
                   
                    
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th style="display:none"></th>
            <th>No. Nota</th>
            <th>Nama Konsumen</th>
            <th>Tanggal</th>
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
            <td style="display:none"><?php echo $row->id?></td>
            <td><?php echo $row->no_nota;?></td>
            <td><?php echo $row->nm_mitra;?></td>
            <td><?php echo $row->tanggal;?></td>
            <td align="center">
            <a href="<?php echo site_url('nota/cetak_id/').$row->id;?>" class="btn btn-success btn-md target" target="_blank"><span class="fa fa-print"></span></a>
                                     
            </td>
        </tr>
       
        <?php } ?>
    </tbody>
</table>
</div>
</div>
</div>
</div>

