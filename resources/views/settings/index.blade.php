@extends('layouts.app')
@section('header-name')
{{ 'Profile Settings' }}
@endsection
@section('content')
<!-- Contact Subpage -->
<div class="page-content">
    <div class="row">
        <div class="col-sm-6 col-md-6">
            <div class="block-title">
                <h3>
                    Get in
                    <span>
                        Touch
                    </span>
                </h3>
            </div>
            <!-- Google Map -->
            <div class="map" id="map">
            </div>
            <!-- End of Google Map -->
            <div class="contact-info-block">
                <div class="ci-icon">
                    <i class="fa fa-map-marker">
                    </i>
                </div>
                <div class="ci-text">
                    <h5>
                        Los Angeles, USA
                    </h5>
                </div>
            </div>
            <div class="contact-info-block">
                <div class="ci-icon">
                    <i class="fa fa-envelope">
                    </i>
                </div>
                <div class="ci-text">
                    <h5>
                        <a class="__cf_email__" data-cfemail="92f3fef7eae1fffbe6fad2f7eaf3ffe2fef7bcf1fdff" href="https://lmpixels.com/cdn-cgi/l/email-protection">
                            [email protected]
                        </a>
                    </h5>
                </div>
            </div>
            <div class="contact-info-block">
                <div class="ci-icon">
                    <i class="fa fa-phone">
                    </i>
                </div>
                <div class="ci-text">
                    <h5>
                        +123 654 78900
                    </h5>
                </div>
            </div>
            <div class="contact-info-block">
                <div class="ci-icon">
                    <i class="fa fa-check">
                    </i>
                </div>
                <div class="ci-text">
                    <h5>
                        Freelance Available
                    </h5>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6">
            <div class="block-title">
                <h3>
                    Change
                    <span>
                        Password
                    </span>
                </h3>
            </div>
            <form action="https://lmpixels.com/demo/procard/contact_form/contact_form.php" id="contact-form" method="post">
                <div class="messages">
                </div>
                <div class="controls">
                    <div class="form-group form-group-with-icon">
                        <i class="fa fa-lock">
                        </i>
                        <label>
                            Old Password
                        </label>
                        <input class="form-control" data-error="Password is required." id="form_name" name="name" placeholder="" required="required" type="text"/>
                        <div class="form-control-border">
                        </div>
                        <div class="help-block with-errors">
                        </div>
                    </div>
                    <div class="form-group form-group-with-icon">
                        <i class="fa fa-lock">
                        </i>
                        <label>
                            New Password
                        </label>
                        <input class="form-control" data-error="Password is required." id="form_name" name="name" placeholder="" required="required" type="text"/>
                        <div class="form-control-border">
                        </div>
                        <div class="help-block with-errors">
                        </div>
                    </div>
                    <div class="form-group form-group-with-icon">
                        <i class="fa fa-lock">
                        </i>
                        <label>
                            Confirm Password
                        </label>
                        <input class="form-control" data-error="Password is required." id="form_name" name="name" placeholder="" required="required" type="text"/>
                        <div class="form-control-border">
                        </div>
                        <div class="help-block with-errors">
                        </div>
                    </div>
                    <div class="g-recaptcha" data-sitekey="6LdqmCAUAAAAAMMNEZvn6g4W5e0or2sZmAVpxVqI">
                    </div>
                    <input class="button btn-send" type="submit" value="Change Password">
                    </input>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Contact Subpage -->
@endsection
