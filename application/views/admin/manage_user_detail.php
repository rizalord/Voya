<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">User Detail</h4>
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
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="https://pbs.twimg.com/profile_images/378800000006131705/be741a8f180f36709f570d506cb485f8_400x400.png" class="card-img" alt="...">
                        <div class="p-2">
                            <p class="card-text text-center p-detail">More Detail <i class="ml-2 fas fa-chevron-down"></i></p>
                            <table class="table table-borderless table-none d-none">
                                <tbody>
                                    <tr>
                                        <th scope="row">User ID</th>
                                        <td>124342435</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Email</th>
                                        <td>sandhikagalih@unpas.ac.id</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Join date</th>
                                        <td>10 Apr 2003</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Followed</th>
                                        <td>65</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Follower</th>
                                        <td>6445</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Total Videos</th>
                                        <td>56</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Total Viewer</th>
                                        <td>124342435</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Sandhika Galih</h5>
                            <hr>
                            <p class="card-text">
                                <?= nl2br("WebProgrammingUNPAS

                                Channel khusus yang membahas mengenai teknologi internet dan pengembangan web / web development, khususnya untuk mahasiswa teknik informatika di Universitas Pasundan Bandung dan umumnya untuk siapa saja yang tertarik.

                                Dikelola secara khusus oleh Sandhika Galih sebagai staf pengajar di Program Studi Teknik Informatika Universitas Pasundan Bandung.

                                CONTACT :

                                https://instagram.com/sandhikagalih
                                https://twitter.com/sandhikagalih
                                https://facebook.com/sandhikagalih
                                https://linkedin.com/in/sandhikagalih
                                https://github.com/sandhikagalih
                                https://codepen.io/sandhikagalih

                                https://facebook.com/WebProgrammingUNPAS

                                https://if.unpas.ac.id/") ?>
                            </p>
                            <hr>
                            <p class="card-text">
                                <?= nl2br("Bergabung pada 4 Jan 2015

                                9.634.715x ditonton

                                14.056 follower") ?>
                            </p>
                            <a href="" class="btn btn-danger btn-block">Ban</a>
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