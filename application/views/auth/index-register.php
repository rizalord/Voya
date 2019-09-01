<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Login box.scss -->
<!-- ============================================================== -->
<div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
    <div class="auth-box bg-dark border-top border-secondary">
        <div>
            <div class="text-center">
                <span class="db"><img src="<?= base_url(); ?>assets/img/logo/voyaLogoCrop.png" alt="logo" /></span>
            </div>
            <!-- Form -->
            <form class="form-horizontal m-t-20" action="<?= base_url('auth/register'); ?>" method="post">
                <div class="row p-b-30">
                    <div class="col-12">
                        <?= $this->session->flashdata('message'); ?>
                        <!-- username -->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="ti-user"></i></span>
                            </div>
                            <input type="text" class="form-control form-control-lg" placeholder="Username" aria-label="Username" name="name" aria-describedby="basic-addon1" autocomplete="off" value="<?= set_value('name'); ?>" maxlength="18">
                        </div>
                        <div class="input-group">
                            <small class="text" style="color :rgb(255,60,60); font-size:13px;font-weight:bold;"><?= form_error('name'); ?></small>
                        </div>
                        <!-- email -->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-danger text-white" id="basic-addon1"><i class="ti-email"></i></span>
                            </div>
                            <input type="text" class="form-control form-control-lg" placeholder="Email Address" aria-label="Username" name="email" aria-describedby="basic-addon1" autocomplete="off">
                        </div>
                        <div class="input-group">
                            <small class="text" style="color :rgb(255,60,60); font-size:13px;font-weight:bold;"><?= form_error('email'); ?></small>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-warning text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
                            </div>
                            <input type="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password" name="password1" aria-describedby="basic-addon1" autocomplete="off">
                        </div>
                        <div class="input-group">
                            <small class="text" style="color :rgb(255,60,60); font-size:13px;font-weight:bold;"><?= form_error('password1'); ?></small>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-info text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
                            </div>
                            <input type="password" class="form-control form-control-lg" placeholder=" Retype Password" aria-label="Password" name="password2" aria-describedby="basic-addon1" autocomplete="off">
                        </div>
                        <div class="input-group">
                            <small class="text" style="color :rgb(255,60,60); font-size:13px;font-weight:bold;"><?= form_error('password2'); ?></small>
                        </div>
                    </div>
                </div>
                <div class="row border-top border-secondary">
                    <div class="col-12">
                        <div class="form-group">
                            <div class="p-t-20">
                                <button class="btn btn-block btn-lg btn-info" type="submit">Sign Up</button>
                                <p class="mt-2 px-2 mb-0" style="text-align:center!important;display:block;margin:auto;color:rgba(255,255,255,0.6)">Already have an account ? <a href="<?= base_url('auth'); ?>">Login here</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>