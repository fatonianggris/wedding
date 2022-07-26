<!doctype html>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>
            Wedding Apps || Wedding Book
        </title>
        <meta content="" name="description">
        <meta content="" name="author">
        <meta content="" name="keywords">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
        <!-- Birdman v1.0 || ex nihilo || April 2015 -->
        <!-- style start -->
        <link href="<?php echo base_url(); ?>main_assets/home_asset/css/bootstrap.min.css" media="all" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>main_assets/home_asset/css/style-light.css" media="all" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>main_assets/home_asset/css/flexslider.css" media="all" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>main_assets/home_asset/css/font-awesome-4.3.0/css/font-awesome.css" media="all" rel="stylesheet" type="text/css"><!-- style end -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>main_assets/home_asset/package/dist/sweetalert2.css">
        <!-- google fonts start -->
        <link href=
              "https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900|Oswald:300,400,700|Dosis:200,300,400,500,600,700,800|Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic"
              rel="stylesheet" type="text/css"><!-- google fonts end -->
        <!-- alternate style start || to use your preferred color, simply remove all style colors below and leave only your preferred color -->

        <link href="<?php echo base_url(); ?>main_assets/home_asset/css/colors/white-dark.css" media="screen" rel="stylesheet" title="yellow-2" type="text/css">

        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- screen loader start -->
        <div class="screen-loader"></div><!-- screen loader end -->
        <!-- preload start -->
        <div id="preload">
            <!-- preload status start -->
            <div id="preload-status"></div><!-- preload status end -->
        </div><!-- preload end -->
        <!-- curtains start -->
        <div id="curtains"></div><!-- curtains end -->
        <!-- top shade start -->
        <div id="top-shade"></div><!-- top shade end -->
        <!-- preload content start -->
        <div class="preload-content"></div><!-- preload content end -->
        <!-- birds start -->
        <div id="birdman-container"></div>
        <div id="birdman-holder">
            <canvas></canvas>
        </div><!-- birds end -->
        <!-- navigation start -->
        <div class="menu btn-nav">
            <a href="#"><span></span></a>
        </div>
        <nav role="navigation">
            <ul class="main-nav brackets">
                <li>
                    <a class="menu-state" href="" onclick="goto()" >LOGOUT</a>
                </li>
            </ul>
        </nav><!-- navigation end -->
        <!-- upper page start -->
        <div class="upper-page current" id="home">
            <!-- center container start -->
            <div class="center-container-home">
                <!-- center block start -->
                <div class="center-block">
                    <!-- square start -->
                    <div class="square">
                        <span class="l1"></span>
                        <span class="l2"></span>
                        <span class="l3"></span>
                        <span class="l4"></span>
                    </div><!-- square end -->
                    <!-- upper content start -->
                    <div class="upper-content">
                        <!-- container start -->
                        <div class="container sections">
                            <div class="text-center" >
                                <img src="<?php echo base_url(); ?>main_assets/home_asset/images/background/logo.png" width="650px">
                            </div>
                            <!-- row start -->
                            <div class="row intro-down">
                                <div class="cycle-it-home">
                                    <a class="cycle-text" href="#">Wedding Invitation Book</a>
                                </div>
                                <!-- intro start -->                               
                                <div id="intro-wrapper">
                                    <br><br><br>   
                                    <!-- newsletter form start -->
                                    <div id="subscribe-wrapper">
                                        <div id="newsletter">
                                            <div class="newsletter">
                                                <form id="ajax" action="" method="post" enctype="multipart/form-data">
                                                    <span class="input input--kuro">
                                                        <input class="subscriberequiredField subscribeemail input__field input__field--kuro" id="barcode" name="barcode" type="text">
                                                        <label class="input__label input__label--kuro" for="input-7">
                                                            <span class="mail input__label-content input__label-content--kuro">
                                                                <b>INPUT BARCODE</b>
                                                            </span>
                                                        </label> 
                                                        <button class="submit-button" id="submit" type="submit">CONFIRM</button></span>
                                                </form>
                                            </div>
                                        </div>
                                    </div><!-- newsletter form end -->
                                </div><!-- intro end -->
                                <br>
                                <br>
                                <div class="cycle-it-home">
                                    <h5>
                                        "Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu isteri-isteri dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya diantaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi kaum yang berfikir"<br>
                                        <b>(Ar-Rum:21)</b>
                                    </h5>
                                </div>
                            </div><!-- row end -->                           
                        </div><!-- container end -->
                        <!-- countdown start -->
                        <!-- countdown start -->
                        <div id="countdown-wrapper">
                            <ul id="countdown">
                                <!-- days start -->
                                <li>
                                    <span class="days">00</span>
                                    <p class="timeRefDays">
                                        Check In 
                                    </p>
                                </li><!-- days end -->
                                <!-- seconds start -->
                                <li>
                                    <span class="seconds">00</span>
                                    <p class="timeRefSeconds">
                                        Check Out
                                    </p>
                                </li><!-- seconds end -->
                            </ul>
                        </div><!-- countdown end -->
                    </div><!-- center container end -->
                </div><!-- center block end -->
            </div><!-- upper content end -->
        </div><!-- upper page end -->
        <!-- scripts start -->
        <script src="<?php echo base_url(); ?>main_assets/home_asset/js/jquery-1.11.2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>main_assets/home_asset/js/plugins-light.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>main_assets/home_asset/js/birdman.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>main_assets/home_asset/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>main_assets/home_asset/package/dist/sweetalert2.min.js"></script>
        <script>
                        function goto() {
                            document.location = "<?php echo site_url('auth/logout'); ?>";
                        }
        </script>
        <script>
            update_content()
            $(document).ready(function (e) {
                var refresher = setInterval("update_content();", 10000); // 30 seconds
            })

            function update_content() {
                $.ajax({
                    type: "GET",
                    url: "<?php echo site_url('dashboard/get_data'); ?>",
                    cache: false,
                    success: function (result) {
                        var arr = result.split(',');
                        if (arr[0] == 1) {
                            $('span.days').text(arr[1]);
                            $('span.seconds').text(arr[2]);
                        }
                    },
                    error: function (result) {

                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            html: 'Mohon Maaf.., sistem sedang <b>TIDAK ADA KONEKSI</b>!',
                            footer: 'Mohon maaf atas ketidaknyamanya'
                        });
                    }
                });

            }
        </script>
        <script  type="text/javascript">
            jQuery(function ($) {
                $.supersized({

                    // Functionality
                    slideshow: 1, // Slideshow on/off
                    autoplay: 1, // Slideshow starts playing automatically
                    start_slide: 1, // Start slide (0 is random)
                    stop_loop: 0, // Pauses slideshow on last slide
                    random: 0, // Randomize slide order (Ignores start slide)
                    slide_interval: 6000, // Length between transitions
                    transition: 1, // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
                    transition_speed: 2000, // Speed of transition
                    new_window: 0, // Image links open in new window/tab
                    pause_hover: 0, // Pause slideshow on hover
                    keyboard_nav: 1, // Keyboard navigation on/off
                    performance: 2, // 0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
                    image_protect: 1, // Disables image dragging and right click with Javascript

                    // Size || Position						   
                    min_width: 0, // Min width allowed (in pixels)
                    min_height: 0, // Min height allowed (in pixels)
                    vertical_center: 1, // Vertically center background
                    horizontal_center: 1, // Horizontally center background
                    fit_always: 0, // Image will never exceed browser width or height (Ignores min. dimensions)
                    fit_portrait: 1, // Portrait images will not exceed browser height
                    fit_landscape: 0, // Landscape images will not exceed browser width

                    // Components							
                    slide_links: 'false', // Individual links for each slide (Options: false, 'number', 'name', 'blank')
                    thumb_links: 0, // Individual thumb links for each slide
                    thumbnail_navigation: 0, // Thumbnail navigation
                    slides: [// Slideshow Images
                        {image: '<?php echo base_url(); ?>main_assets/home_asset/images/background/TOM05238.jpg', title: '', thumb: '', url: ''},
                        {image: '<?php echo base_url(); ?>main_assets/home_asset/images/background/TOM05951.jpg', title: '', thumb: '', url: ''},
                        {image: '<?php echo base_url(); ?>main_assets/home_asset/images/background/TOM06531.jpg', title: '', thumb: '', url: ''},
                        {image: '<?php echo base_url(); ?>main_assets/home_asset/images/background/TOM05910.jpg', title: '', thumb: '', url: ''},
                        {image: '<?php echo base_url(); ?>main_assets/home_asset/images/background/TOM05880.jpg', title: '', thumb: '', url: ''}
                    ]

                });
            });
        </script>
        <script>
            $(document).ready(function () {
                $("#submit").click(function () {
                    var barcode = $("#barcode").val();
// Returns successful data submission message when the entered information is stored in database.
                    var dataString = 'barcode=' + barcode;
// AJAX Code To Submit Form.
                    $.ajax({
                        type: "POST",
                        url: "<?php echo site_url('dashboard/cek_barcode'); ?>",
                        data: dataString,
                        cache: false,
                        success: function (result) {
                            var arrays = result.split(',');

                            if (arrays[0] == 1) {
                                Swal.fire({
                                    title: 'Selamat Datang Tamu Undangan',
                                    html: 'an: <b>"' + arrays[1] + '"</b>',
                                    icon: 'info',
                                    showCancelButton: true,
                                    confirmButtonColor: '#3085d6',
                                    cancelButtonColor: '#d33',
                                    confirmButtonText: 'Konfirmasi hadir, Ya!',
                                    cancelButtonText: 'Batal',
                                    footer: 'Terima kasih atas kehadiran Anda'
                                }).then((result) => {
                                    if (result.value) {
                                        var dataString = 'status=' + '1' + '&barcode=' + barcode;
                                        $.ajax({
                                            type: "POST",
                                            url: "<?php echo site_url('dashboard/ubah_status'); ?>",
                                            data: dataString,
                                            cache: false,
                                            success: function (result) {

                                                if (result == 0) {
                                                    Swal.fire({
                                                        icon: 'error',
                                                        title: 'Oops...',
                                                        html: 'Mohon Maaf.., Barcode <b>' + barcode + '</b> tidak ditemukan!',
                                                        footer: 'Silahkan dicek kembali barcode Anda'
                                                    });
                                                } else if (result == 1) {
                                                    Swal.fire(
                                                            'Berhasil!',
                                                            'Abesensi tamu undangan telah diupdate.',
                                                            'success'
                                                            )
                                                }
                                            },
                                            error: function (result) {
                                                Swal.fire({
                                                    icon: 'error',
                                                    title: 'Oops...',
                                                    html: 'Mohon Maaf.., sistem sedang <b>ERROR</b>!',
                                                    footer: 'Mohon maaf atas ketidaknyamanya'
                                                });
                                            }
                                        });
                                    }
                                })
                            } else if (arrays[0] == 0) {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    html: 'Mohon Maaf.., Barcode <b>' + barcode + '</b> tidak ditemukan!',
                                    footer: 'Silahkan dicek kembali barcode Anda'
                                });
                            } else if (arrays[0] == 2) {
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Pemberitahuan...',
                                    html: 'Mohon Maaf.., Barcode <b>' + barcode + '</b> dengan Atas Nama:<br><b>' + arrays[1] + '</b> <br><br> telah hadir pada tanggal & jam:<br><b>' + arrays[2] + '</b>',
                                    footer: 'Silahkan dicek kembali barcode Anda'
                                });
                            } else if (arrays[0] == 3) {
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Pemberitahuan...',
                                    html: 'Mohon Maaf.., Barcode <b>' + barcode + '</b> dengan status Undangan Group:<br><b>' + arrays[1] + '</b> <br><br>Memiliki Kuota <b>0</b>, silahkan edit kuota undangan group',
                                    footer: '<a style="color:blue;" href="<?php echo site_url('dashboard/list_undangan_grup'); ?>"><b>Tambah Kuota Undangan</b></a>'
                                });
                            } else if (arrays[0] == 4) {

                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Pemberitahuan...',
                                    showCancelButton: true,
                                    confirmButtonColor: '#3085d6',
                                    cancelButtonColor: '#d33',
                                    confirmButtonText: 'Konfirmasi hadir, Ya!',
                                    cancelButtonText: 'Batal',
                                    html: 'Barcode <b>' + barcode + '</b> dengan status Undangan Group:<br><b>' + arrays[1] + '</b> <br><br>Memiliki Sisa Kuota Undangan:<br><b>' + arrays[2] + ' Undangan</b> <br><br> Silahkan isi Form dibawah ini:' +
                                            '<input id="nama" class="swal2-input" placeholder="Inputkan nama tamu" required>' +
                                            '<input id="asal" class="swal2-input" placeholder="Inputkan asal tamu" required>',
                                    footer: '<a style="color:blue;" href="<?php echo site_url('dashboard/list_undangan_grup'); ?>"><b>Lihat Undangan Group</b></a>',
                                    focusConfirm: false,
                                    preConfirm: () => {
                                        var nama = document.getElementById('nama').value;
                                        var asal = document.getElementById('asal').value;
                                        if (nama && asal) {
                                            var dataString = 'nama=' + nama + '&asal=' + asal + '&barcode=' + barcode;
                                            $.ajax({
                                                type: "POST",
                                                url: "<?php echo site_url('dashboard/tambah_hadir'); ?>",
                                                data: dataString,
                                                cache: false,
                                                success: function (result) {
                                                    if (result == 0) {
                                                        Swal.fire({
                                                            icon: 'error',
                                                            title: 'Oops...',
                                                            html: 'Mohon Maaf.., Barcode <b>' + barcode + '</b> tidak ditemukan!',
                                                            footer: 'Silahkan dicek kembali barcode Anda'
                                                        });
                                                    } else if (result == 1) {
                                                        Swal.fire(
                                                                'Berhasil!',
                                                                'Daftar tamu undangan group telah ditambahkan.',
                                                                'success'
                                                                )
                                                    }
                                                },
                                                error: function (result) {
                                                    Swal.fire({
                                                        icon: 'error',
                                                        title: 'Oops...',
                                                        html: 'Mohon Maaf.., sistem sedang <b>ERROR</b>!',
                                                        footer: 'Mohon maaf atas ketidaknyamanya'
                                                    });
                                                }
                                            });
                                        }
                                    }
                                })

                            }
                        },
                        error: function (result) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                html: 'Mohon Maaf.., sistem sedang <b>ERROR</b>!',
                                footer: 'Mohon maaf atas ketidaknyamanya'
                            });
                        }
                    });
                    return false;
                });
            });
        </script>
        <!-- scripts end -->
    </body>
</html>
