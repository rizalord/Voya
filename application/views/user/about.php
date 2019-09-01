<ul>
    <li><a href="<?= base_url('user') ?>">Beranda</a></li>
    <li><a href="<?= base_url('user/videos') ?>">Videos</a></li>
    <li><a href="<?= base_url('user/about') ?>" class="userActive">Tentang</a></li>
</ul>
</div>
</div>


<div class="shadowbringer mt-3">
    <div class="aboutContainer">
        <div class="leftDesc">
            <h5 class="descriptor mb-3 mt-4" style="font-weight:normal;">Deskripsi</h5>
            <p> <?= nl2br("WebProgrammingUNPAS

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

https://if.unpas.ac.id/"); ?> </p>
        </div>
        <div class="rightStat">
            <h5 class="descriptor mb-3 mt-4" style="font-weight:normal;">Statistik</h5>
            <hr>
            <p>Bergabung pada 4 Jan 2015</p>
            <hr>
            <p>9.634.715x ditonton</p>
            <hr>
            <p>14.056 follower</p>
            <hr>
        </div>
        <div class="break"></div>
    </div>
</div>


</div>

<!-- edit profile -->
<div class="eprofile">
    <div class="shadowOver"></div>
    <div class="editProfileModal overflow-auto">
        <div class="container-fluid pt-3">
            <h4>Edit Profile</h4>
            <form acton="<?= base_url('user/videos/edit'); ?>" target="_blank" method="post">
                <div class="form-group">
                    <label for="name">Username</label>
                    <input type="text" minlength="5" value="Web Programming UNPAS" required autocomplete="off" class="form-control" id="name" placeholder="Enter your username">
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="inputFile">Profile Picture</label>
                            <input type="file" class="form-control-file" id="inputFile">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="inputBanner">Background</label>
                            <input type="file" class="form-control-file" id="inputFile">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" rows="4" style="resize : none" placeholder="Enter video description" autocomplete="off">WebProgrammingUNPAS

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

https://if.unpas.ac.id/</textarea>
                </div>
                <div class="alert alert-success" role="alert">
                    EDIT SUCCESS !!!
                </div>
                <button type="submit" class="upload edit">Edit</button>
                <button type="button" class="cancel2 cancel3 mr-3">Cancel</button>

            </form>
        </div>
    </div>
</div>
<!-- end -->

<!-- for edit profile -->
<script src="<?= base_url('assets/js/editProfile.js'); ?>"></script>
<!-- end edit profile -->
<!-- script for follow -->
<script src="<?= base_url('assets/js/follFollowed.js'); ?>"></script>
<!-- end script -->