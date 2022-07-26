<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="<?php echo base_url(); ?>main_assets/admin_asset/assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
<!-- Bootstrap popper Core JavaScript -->
<script src="<?php echo base_url(); ?>main_assets/admin_asset/assets/node_modules/popper/popper.min.js"></script>
<script src="<?php echo base_url(); ?>main_assets/admin_asset/assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?php echo base_url(); ?>main_assets/admin_asset/assets/dist/js/perfect-scrollbar.jquery.min.js"></script>
<!--Wave Effects -->
<script src="<?php echo base_url(); ?>main_assets/admin_asset/assets/node_modules/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>main_assets/admin_asset/assets/node_modules/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>main_assets/admin_asset/assets/dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="<?php echo base_url(); ?>main_assets/admin_asset/assets/dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="<?php echo base_url(); ?>main_assets/admin_asset/assets/dist/js/custom.min.js"></script>
<!--c3 JavaScript -->
<script src="<?php echo base_url(); ?>main_assets/admin_asset/assets/node_modules/d3/d3.min.js"></script>
<script src="<?php echo base_url(); ?>main_assets/admin_asset/assets/node_modules/c3-master/c3.min.js"></script>
<!-- Popup message jquery -->
<script src="<?php echo base_url(); ?>main_assets/admin_asset/assets/node_modules/toast-master/js/jquery.toast.js"></script>
<!-- Column -->
<script src="<?php echo base_url(); ?>main_assets/admin_asset/assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
<!-- end - This is for export functionality only -->
<!-- Date Picker Plugin JavaScript -->
<script src="<?php echo base_url(); ?>main_assets/admin_asset/assets/node_modules/moment/moment.js"></script>
<script src="<?php echo base_url(); ?>main_assets/admin_asset/assets/node_modules/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
<script src="<?php echo base_url(); ?>main_assets/admin_asset/assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<!-- jQuery file upload -->
<script src="<?php echo base_url(); ?>main_assets/admin_asset/assets/node_modules/tinymce/tinymce.min.js"></script>
<!-- This is data table -->
<script src="<?php echo base_url(); ?>main_assets/admin_asset/assets/node_modules/datatables/jquery.dataTables.min.js"></script>
<!-- start - This is for export functionality only -->
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>main_assets/admin_asset/assets/alertifyjs/alertify.min.js"></script>
<!-- Chart JS -->
<script>
    $(function () {
        "use strict";
        var chart = c3.generate({
            bindto: '#visitor',
            data: {
                columns: [
<?php
if (!empty($ktp_reg)) {
    foreach ($ktp_reg as $key => $value) {
        ?>
                            [
        <?php
        echo "'" . ucwords($value->nama_alias) . "'";
        ?>
                            ,
        <?php echo $value->jml_ktp; ?>
                            ],
        <?php
    }
}
?>
                ],
                type: 'donut',
                onclick: function (d, i) {
                    console.log("onclick", d, i);
                },
                onmouseover: function (d, i) {
                    console.log("onmouseover", d, i);
                },
                onmouseout: function (d, i) {
                    console.log("onmouseout", d, i);
                }
            },
            donut: {
                label: {
                    show: false
                },
                title: "Regional",
                width: 40,
            },
            legend: {
                hide: true
                        //or hide: 'data1'
                        //or hide: ['data1', 'data2']
            }

        });
        // ============================================================== 
        // Our Income
        // ==============================================================
        var chart = c3.generate({
            bindto: '#income',
            data: {
                x: 'x',
                columns: [
                    ['x',
<?php
if (!empty($ktp_petugas)) {
    foreach ($ktp_petugas as $key => $value) {
        echo "'" . ucwords($value->nama_petugas) . "'";
        ?>
                                ,
        <?php
    }
}
?>
                    ],
                    ['Jumlah e-KTP',
<?php
if (!empty($ktp_petugas)) {
    foreach ($ktp_petugas as $key => $value) {
        echo "'" . $value->jml_ktp . "'";
        ?>
                                ,
        <?php
    }
}
?>],
                ],
                type: 'bar'
            },
            bar: {
                space: 0.2,
                // or
                width: 40 // this makes bar width 100px
            },
            axis: {
                x: {
                    type: 'category',
                    tick: {centered: true},
                }
            },
            legend: {
                hide: true
                        //or hide: 'data1'
                        //or hide: ['data1', 'data2']
            },
            grid: {
                x: {
                    show: false
                },
                y: {
                    show: true
                }
            },
            size: {
                height: 290
            },
            color: {
                pattern: ['#7460ee', '#009efb']
            }
        });
        // Dashboard 1 Morris-chart
    });
    $('#tabel_ktp1').DataTable();
    $('#tabel_ktp2').DataTable();
    $('#tabel_petugas').DataTable();
    $('#tabel_regional').DataTable();
    $('#tabel_admin').DataTable();
    $('#tabel_suadmin').DataTable();
    $('#myTable').DataTable();
    $('#myTables').DataTable();
</script>
<script>
    $('#mdate').bootstrapMaterialDatePicker({weekStart: 0, time: false, format: 'DD/MM/YYYY'});</script>
<script>

    $(document).ready(function () {
        $(".select2").select2();
        $('#peringatan_toko').modal('show');
        $('#peringatan_produk').modal('show');
    });</script>
<script src="https://cdn.tiny.cloud/1/v9ah6qbhhksf2u889zmk775f79so4iq99na96p1pdwp26u3a/tinymce/5/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector: 'textarea#blog',
        height: 500,
        menubar: false,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table paste code help wordcount'
        ],
        toolbar: 'undo redo | image code | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
        content_css: [
            '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
            '//www.tiny.cloud/css/codepen.min.css'
        ]
    });
    tinymce.init({
        selector: 'textarea#desc',
        height: 300,
        menubar: false,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table paste code help wordcount'
        ],
        toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | bullist numlist outdent indent',
        content_css: [
            '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
            '//www.tiny.cloud/css/codepen.min.css'
        ]
    });
</script>
