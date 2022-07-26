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
                <li class="breadcrumb-item active">Dashboard Undangan Personal</li>
            </ol>
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
            <h4 class="card-title">Daftar List Undangan Personal/Pasangan</h4>
            <h6 class="card-subtitle">Daftar list nikah undangan personal/pasangan</h6>
            <div class="table-responsive m-t-40">
                <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Barcode</th>                        
                            <th>Nama Undangan</th>                            
                            <th>Jenis Tamu</th>
                            <th>Status Hadir</th>
                            <th>Kuota Undangan</th>
                            <th>Kuota Souvenir</th>
                            <th>Waktu Hadir</th>   
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No.</th>
                            <th>Barcode</th>                        
                            <th>Nama Undangan</th>                            
                            <th>Jenis Tamu</th>
                            <th>Status Hadir</th>
                            <th>Kuota Undangan</th>
                            <th>Kuota Souvenir</th>
                            <th>Waktu Hadir</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        if (!empty($tamu)) {
                            $i = 1;
                            foreach ($tamu as $key => $value) {
                                ?> 
                                <tr>
                                    <td><?php echo $i; ?></b><span</td>
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
                                        <?php } else { ?>
                                            <span class="label label-success"><b>Hadir</b></span>
                                        <?php } ?>
                                    </td> 
                                    <td>
                                        <?php if ($value->kuota_undangan > 0) {
                                            ?>
                                            <b><?php echo $value->kuota_undangan ?></b> Undangan
                                        <?php } else { ?>
                                            <span class="label label-success"><b>Terpakai</b></span>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <?php if ($value->kuota_souvenir > 0) {
                                            ?>
                                            <b><?php echo $value->kuota_souvenir ?></b> Souvenir
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

