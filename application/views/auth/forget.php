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
        <div id="recoverform d-block">
            <div class="text-center">
                <span class="text-white">Enter your e-mail address below and we will send you instructions how to recover a password.</span>
                
            </div>
            <div class="row m-t-20">
                <!-- Form -->
                <form class="col-12" action="<?= base_url('auth/forget'); ?>" method="post">
                    <!-- email -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-danger text-white" id="basic-addon1"><i class="ti-email"></i></span>
                        </div>
                        <input type="text" class="form-control form-control-lg" placeholder="Email Address" aria-label="Username" name="email" aria-describedby="basic-addon1">
                        
                        
                    </div>
                    <div class="input-group">
                        <small class="text" style="color :rgb(255,60,60); font-size:13px;font-weight:bold;"><?= form_error('email'); ?></small>        
                    </div>
                    
                    <!-- pwd -->
                    <div class="row m-t-20 p-t-20 border-top border-secondary">
                        <div class="col-12">
                            <a class="btn btn-success" href="<?= base_url('auth') ?>" id="to-login" name="action">Back To Login</a>
                            <button class="btn btn-info float-right" type="submit" name="action">Recover</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>