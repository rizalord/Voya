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
        <div id="loginform">
            <div class="text-center ">
                <span class="db"><img src="<?= base_url(); ?>assets/img/logo/voyaLogoCrop.png" alt="logo" /></span>
            </div>
            <!-- Form -->
            <form class="form-horizontal m-t-20" id="loginform" action="<?= base_url('auth'); ?>" method="post">
                <div class="row p-b-30">
                    <div class="col-12">
                        <?= $this->session->flashdata('message'); ?>
                        <!-- username -->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="ti-user"></i></span>
                            </div>
                            <input type="text" class="form-control form-control-lg" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="username" value="<?= set_value('username'); ?>" autocomplete="off">
                        </div>
                        <div class="input-group">
                            <small class="text" style="color :rgb(255,60,60); font-size:13px;font-weight:bold;"><?= form_error('username'); ?></small>
                        </div>
                        <!-- password -->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-warning text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
                            </div>
                            <input type="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1"  name="password">
                            
                        </div>
                        <div class="input-group">
                            <small class="text" style="color :rgb(255,60,60); font-size:13px;font-weight:bold;"><?= form_error('password'); ?></small>
                        </div>
                    </div>
                </div>
                <div class="row border-top border-secondary">

                    <div class="col-12 mb-0">
                        <div class="form-group " style="margin-top : -10px!important">
                            <div class="p-t-20">
                                <a href="<?= base_url('auth/forget'); ?>" class="btn btn-info" id="to-recover" type="button"><i class="fa fa-lock m-r-5"></i> Forgot password?</a>
                                <button class="btn btn-success float-right" type="submit">Login</button>
                                <p class="mt-2 px-2 mb-0" style="text-align:center!important;display:block;margin:auto;color:rgba(255,255,255,0.6)">Doesn't have account yet ? <a href="<?= base_url('auth/register'); ?>">Click to register</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        
    </div>
</div>