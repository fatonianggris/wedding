<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Dashboard </h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active">Dashboard Undangan Grup</li>
            </ol>
            <a data-target="#tambah" data-toggle="modal"> <button type="button" class="btn btn-success d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Tambah Undangan Group</button></a>

        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- Row -->
<div class="row">
    <!-- Column -->
    <div class="col-lg-4 col-md-6">
        <div class="card">
            <div class="d-flex flex-row">
                <div class="p-10 bg-success">
                    <h3 class="text-white box m-b-0"><i class="ti-user"></i></h3></div>
                <div class="align-self-center m-l-20">
                    <h3 class="m-b-0 text-success"><?php echo $undangan[0]->sudah_hadir; ?></h3>
                    <h5 class="text-muted m-b-0">Jumlah Tamu Hadir</h5></div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-4 col-md-6">
        <div class="card">
            <div class="d-flex flex-row">
                <div class="p-10 bg-danger">
                    <h3 class="text-white box m-b-0"><i class="ti-user"></i></h3></div>
                <div class="align-self-center m-l-20">
                    <h3 class="m-b-0 text-danger"><?php echo $undangan[0]->belum_hadir; ?></h3>
                    <h5 class="text-muted m-b-0">Jumlah Tamu Belum Hadir</h5></div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-4 col-md-6">
        <div class="card">
            <div class="d-flex flex-row">
                <div class="p-10 bg-info">
                    <h3 class="text-white box m-b-0"><i class="ti-list"></i></h3></div>
                <div class="align-self-center m-l-20">
                    <h3 class="m-b-0 text-info"><?php echo $undangan[0]->total_tamu; ?></h3>
                    <h5 class="text-muted m-b-0">Total Tamu Undangan</h5></div>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
<div class="row">
    <div class="card col-lg-12">
        <div class="card-body">
            <h4 class="card-title">Daftar List Undangan Grup/Kuota</h4>
            <h6 class="card-subtitle">Daftar list nikah undangan grup/kuota</h6>
            <div class="table-responsive m-t-40">
                <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Barcode</th>                        
                            <th>Nama Grup Undangan</th>                            
                            <th>Jenis Tamu</th>
                            <th>Status Hadir</th>
                            <th>Sisa Kuota Undangan</th>
                            <th>Sisa Kuota Souvenir</th>
                            <th>Aksi</th>     
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No.</th>
                            <th>Barcode</th>                        
                            <th>Nama Grup Undangan</th>                            
                            <th>Jenis Tamu</th>
                            <th>Status Hadir</th>
                            <th>Sisa Kuota Undangan</th>
                            <th>Sisa Kuota Souvenir</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        if (!empty($tamu)) {
                            $i = 1;
                            foreach ($tamu as $key => $value) {
                                ?> 
                                <tr>
                                    <td><?php echo $i; ?><span</td>
                                    <td><b><?php echo ucwords($value->barcode); ?></b></td> 
                                    <td><?php echo ucwords($value->nama); ?></td>
                                    <td>
                                        <?php if ($value->status_undangan == 0) {
                                            ?>
                                            <span class="label label-info"><b>Pribadi</b></span>
                                        <?php } else { ?>
                                            <span class="label label-warning"><b>Group</b></span>
                                        <?php } ?>
                                    </td>                                  
                                    <td>
                                        <?php if ($value->status_kehadiran == 0) {
                                            ?>
                                            <span class="label label-danger"><b>Belum Hadir</b></span>
                                        <?php } else if ($value->kuota_undangan == 0) { ?>
                                            <span class="label label-success"><b>Hadir Semua</b></span>
                                        <?php } else { ?>
                                            <span class="label label-warning"><b>Sebagian Hadir</b></span>
                                        <?php } ?>
                                    </td> 
                                    <td>
                                        <?php if ($value->kuota_undangan > 0) {
                                            ?>
                                            <b><?php echo ($value->kuota_undangan) ?></b> Undangan
                                        <?php } else { ?>
                                            <span class="label label-success"><b>Terpakai</b></span>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <?php if ($value->kuota_souvenir > 0) {
                                            ?>
                                            <b><?php echo $value->kuota_souvenir; ?></b> Souvenir
                                        <?php } else { ?>
                                            <span class="label label-success"><b>Terpakai</b></span>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <a href="#edit_undangan<?php echo $value->barcode; ?>" data-toggle="modal"><button type="button" class="btn btn-info btn-sm btn-icon btn-pure btn-outline delete-row-btn " data-toggle="tooltip" data-original-title="Edit"><i class="ti-pencil" aria-hidden="true"></i></button></a>
                                    </td>

                                </tr>
                                <?php
                                $i++;
                            }  //ngatur nomor urut
                        }
                        ?>         
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card col-lg-12">
        <div class="card-body">
            <h4 class="card-title">Daftar Hadir Tamu Undangan Grup</h4>
            <h6 class="card-subtitle">Daftar hadir nikah tamu undangan grup</h6>
            <div class="table-responsive m-t-40">
                <table id="myTables" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Barcode</th>                        
                            <th>Nama Undangan</th> 
                            <th>Asal</th>  
                            <th>Souvenir</th>  
                            <th>Waktu Hadir</th>     
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No.</th>
                            <th>Barcode</th>                        
                            <th>Nama Undangan</th>  
                            <th>Asal</th>  
                            <th>Souvenir</th>   
                            <th>Waktu Hadir</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        if (!empty($hadir)) {
                            $i = 1;
                            foreach ($hadir as $key => $value) {
                                ?> 
                                <tr>
                                    <td><?php echo $i; ?><span</td>
                                    <td><b><?php echo ucwords($value->barcode); ?></b></td> 
                                    <td><?php echo ucwords($value->nama_tamu); ?></td>    
                                    <td><?php echo $value->asal_tamu; ?></td>
                                    <td>
                                        <?php if ($value->souvenir == 1) {
                                            ?>
                                            <span class="label label-danger"><b>Belum Terpakai</b></span>
                                        <?php } else { ?>
                                            <span class="label label-success"><b>Terpakai</b></span>
                                        <?php } ?>
                                    </td>
                                    <td><?php echo $value->date; ?></td>
                                </tr>
                                <?php
                                $i++;
                            }  //ngatur nomor urut
                        }
                        ?>         
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<div id="tambah" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><b>Tambah Undangan Group Baru</b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form class="form-horizontal form-material" action="<?php echo site_url('dashboard/edit_undangan_group'); ?>" enctype="multipart/form-data" method="post">
                <div class="modal-body">   
                    <div class="form-group">
                        <label>Pilih Barcode Undangan <span class="text-danger">*</span></label>
                        <div class="col-md-12 m-b-10 m-t-5">
                            <select name="barcode" class="select2 form-control custom-select" style="width: 100%; height:36px;" required="" data-validation-required-message="Kolom ini wajib diisi!">
                                <option>Pilih barcode undangan</option>
                                <?php
                                if (!empty($barcode)) {
                                    foreach ($barcode as $key => $value) {
                                        ?>
                                        <option value="<?php echo $value->barcode; ?>"><?php echo $value->barcode; ?></option>                                     
                                        <?php
                                    }
                                }
                                ?>                       
                            </select>
                            <small class="form-control-feedback">*Kolom Ini Harus <b>Diisi</b> ! </small>
                        </div>

                    </div>   
                    <div class="form-group ">
                        <label>Status Undangan <span class="text-danger">*</span></label>
                        <div class="col-md-12 m-b-10 m-t-5">
                            <div class="custom-control custom-radio m-t-10">
                                <input type="radio" id="kawin1" value="0" name="status_undangan" class="custom-control-input">
                                <label class="custom-control-label" for="kawin1">Pribadi/Pasangan (kuota wajib 1 undangan)</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="kawin2" value="1" name="status_undangan" class="custom-control-input">
                                <label class="custom-control-label" for="kawin2">Group</label>
                            </div>                        
                            <small class="form-control-feedback">*Kolom Ini Harus <b>Diisi</b> ! </small>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Input Nama Grup <span class="text-danger">*</span></label>
                        <div class="col-md-12 m-b-10 m-t-5">
                            <input type="text" name="nama_grup" class="form-control" placeholder="Inputkan nama grup" required="">
                            <small class="form-control-feedback">*Kolom Ini Harus <b>Diisi</b> ! </small>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Input Kuota Undangan & Souvenir <span class="text-danger">*</span></label>
                        <div class="col-md-12 m-b-10 m-t-5">
                            <input type="number" name="kuota" class="form-control" placeholder="Inputkan kuota undangan & souvenir" required="">
                            <small class="form-control-feedback">*Kolom Ini Harus <b>Diisi</b> ! </small>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-info waves-effect" >Save</button>
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<?php
if (!empty($tamu)) {
    foreach ($tamu as $key => $value) {
        ?>
        <div id="edit_undangan<?php echo $value->barcode; ?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel"><b>Tambah Undangan Group Baru</b></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <form class="form-horizontal form-material" action="<?php echo site_url('dashboard/edit_undangan_group'); ?>" enctype="multipart/form-data" method="post">
                        <div class="modal-body">  

                            <div class="form-group ">
                                <label>Status Undangan <span class="text-danger">*</span></label>
                                <div class="col-md-12 m-b-10 m-t-5">
                                    <div class="custom-control custom-radio m-t-10">
                                        <input type="radio" id="kaw<?php echo $value->id; ?>" value="0" name="status_undangan" class="custom-control-input" <?php echo ($value->status_undangan == '0') ? 'checked' : '' ?>>
                                        <label class="custom-control-label" for="kaw<?php echo $value->id; ?>">Pribadi/Pasangan (kuota wajib 1 undangan)</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="kaw<?php echo $value->barcode; ?>" value="1" name="status_undangan" class="custom-control-input" <?php echo ($value->status_undangan == '1') ? 'checked' : '' ?>>
                                        <label class="custom-control-label" for="kaw<?php echo $value->barcode; ?>">Group</label>
                                    </div>                        
                                    <small class="form-control-feedback">*Kolom Ini Harus <b>Diisi</b> ! </small>
                                </div>
                                <input type="hidden" name="barcode" value="<?php echo $value->barcode; ?>">
                            </div>                            
                            <div class="form-group">
                                <label>Input Nama Grup</label>
                                <div class="col-md-12 m-b-10 m-t-5">
                                    <input type="text" name="nama_grup" value="<?php echo $value->nama; ?>" class="form-control" placeholder="Inputkan nama grup" required="">
                                    <small class="form-control-feedback">*Kolom Ini Harus <b>Diisi</b> ! </small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Input Kuota Undangan & Souvenir</label>
                                <div class="col-md-12 m-b-10 m-t-5">
                                    <input type="number" name="kuota" value="<?php echo $value->kuota_undangan; ?>" class="form-control" placeholder="Inputkan kuota undangan & souvenir" required="">
                                    <small class="form-control-feedback">*Kolom Ini Harus <b>Diisi</b> ! </small>
                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-info waves-effect" >Save</button>
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <?php
    }
}
?>	