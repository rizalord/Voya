<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Video Detail</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Manage</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            <div class="card mb-3">
                <div class="row no-gutters justify-content-center">
                    <div class="col-md-10 mt-0 p-2">
                        <video preload="metadata" width="100%" controls poster="https://i.ytimg.com/vi/cZKLecON8tA/maxresdefault.jpg">
                            <source src="<?= base_url('assets/video/video4.mp4') ?>">
                        </video>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-body">
                            <h5 class="card-title">美波 (Minami) "Menangis untuk Hujan" (Domestic no Kanojo OP)</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="card-text">
                                        <?= nl2br("Epicly found myself pewdiepie in minecraft
New Minecraft Merch! https://represent.com/pewdiepie (thank you)
Big thanks to: https://www.youtube.com/watch?v=VoRl0...
Minecraft Full playlist:
https://www.youtube.com/watch?v=lyG94...


:::::::My Stores:::::::: 
TSUKI:
https://tsuki.market/
Merch:
https://represent.com/store/pewdiepie

:::::::I drink GFUEL (affiliate link)::::::::
https://gfuel.ly/31Kargr

:::::::I stream on DLive (ad)::::::::

https://go.dlive.tv/pewdiepie

:::::::My Setup (affiliate links):::::::: 
Chair: https://clutchchairz.com/pewdiepie/
Elgato Green Screen:
http://e.lga.to/PewDiePie

:::::::Check out this game I helped make (affiliate)::::::::
https://store.steampowered.com/app/70...

__ Outro: Animation:
https://www.youtube.com/user/jae55555
Song: https://www.youtube.com/channel/UC3e8...") ?>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <table class="table table-borderless">
                                        <tbody>
                                            <tr>
                                                <th scope="row">Video Id</th>
                                                <td>539543</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Uploader</th>
                                                <td>Web Programing Unpas (2343432)</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Duration</th>
                                                <td>05.43</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Total Likes</th>
                                                <td>204323 Likes</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Total Dislikes</th>
                                                <td>653</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Views</th>
                                                <td>35435792</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Url</th>
                                                <td>
                                                    <a href="">www.google.com</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Date Uploaded</th>
                                                <td>9 Mei 2017</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <hr>

                            <a href="" class="btn btn-danger btn-block">Delete this Video!</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<footer class="footer text-center">
    All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
</footer>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<script>
    var p = document.querySelector('.p-detail');
    var table = document.querySelector('.table-none');
    p.style.cursor = 'pointer';
    var pDown = document.querySelector('.fa-chevron-down');
    var check = true;
    p.addEventListener('click', function() {
        pDown.classList.toggle('fa-chevron-down');
        pDown.classList.toggle('fa-chevron-up');

        table.classList.toggle('d-none');
    });
</script>