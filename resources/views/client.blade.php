<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>I need haircut </title>
    <link rel='stylesheet' href='https://s3-us-west-2.amazonaws.com/s.cdpn.io/172203/smart-forms.css'>
    <link rel='stylesheet' href='https://s3-us-west-2.amazonaws.com/s.cdpn.io/172203/font-awesome.min.css'>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <style>
    @font-face {
        font-family: 'FontAwesome';
        src: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/172203/fontawesome-webfontba72.eot?#iefix') format('embedded-opentype'), url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/172203/fontawesome-webfontba72.woff') format('woff'), url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/172203/fontawesome-webfontba72.ttf') format('truetype'), url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/172203/fontawesome-webfontba72.svg#FontAwesome') format('svg');
        font-weight: normal;
        font-style: normal;
    }
    </style>
</head>

<body>
    <div class="smart-wrap">
        <div class="smart-forms smart-container wrap-2">
            <div class="form-header header-danger">
                <h4><i class="fa fa-scissors"></i>I need haircut</h4>
                <form method="post" id="new_post" name="new_post" action="" class="wpcf7-form"
                    enctype="mu ltipart/form-data">
                    <div class="form-body">
                        <div class="spacer-b30">
                            <div class="tagline"><span>Profile details</span></div><!-- .tagline -->
                        </div>

                        <div class="section">
                            <label for="useremail" class="field prepend-icon">
                                <input type="email" name="useremail" id="useremail" class="gui-input"
                                    placeholder="Fullname">
                                <label for="useremail" class="field-icon"><i class="fa fa-user"></i></label>
                            </label>
                        </div><!-- end section -->

                        <div class="section">
                            <label for="text" class="field prepend-icon">
                                <input type="text" name="text" id="text" class="gui-input" placeholder="Phone number">
                                <label for="text" class="field-icon"><i class="fa fa-phone"></i></label>
                            </label>
                        </div><!-- end section -->

                        <div class="section">
                            <label for="text" class="field prepend-icon">
                                <input type="text" name="text" id="text" class="gui-input" placeholder="Email address">
                                <label for="text" class="field-icon"><i class="fa fa-envelope"></i></label>
                            </label>
                        </div><!-- end section -->

                        <div class="spacer-t40 spacer-b30">
                            <div class="tagline"><span> Location </span></div><!-- .tagline -->
                        </div>

                        <div class="section">
                            <p class="small-text fine-grey"> Location are auto pickd by GPS which is </p>
                            <p class="medium-text fine-dark"> GPS - Latitude: <span style="font-weight: bold;">{{$latitude}}</span> Longitude: <span style="font-weight: bold;">{{$longitude}}</span></p>
                            <p class="medium-text fine-dark"> Vista Alam Apartment, Shah Alam, Selangor</p>
                        </div><!-- end section -->

                        <div class="frm-row">
                            <div class="section colm colm6">
                                <label for="firstname" class="field prepend-icon">
                                    <input type="text" name="_prospecto_nombre" id="firstname" class="gui-input"
                                        placeholder="Floor">
                                    <label for="firstname" class="field-icon"><i class="fa fa-home   "></i></label>
                                </label>
                            </div><!-- end section -->

                            <div class="section colm colm6">
                                <label for="lastname" class="field prepend-icon">
                                    <input type="text" name="_prospecto_apellido_paterno" id="lastname"
                                        class="gui-input" placeholder="Unit number">
                                    <label for="lastname" class="field-icon"><i class="fa fa-home   "></i></label>
                                </label>
                            </div><!-- end section -->
                        </div><!-- end .frm-row section -->

                        <div class="section">
                            <label for="text" class="field prepend-icon">
                                <input type="text" name="text" id="text" class="gui-input"
                                    placeholder="Navigation instruction">
                                <label for="text" class="field-icon"><i class="fa  fa-map-marker "></i></label>
                            </label>
                        </div><!-- end section -->


                        <div class="spacer spacer-t10 spacer-b20"> </div>


                    </div><!-- end .form-body section -->

                    <div class="container">
                        <div class="row">
                            <div class="col text-center">
                                <button class="btn btn-lg btn-block btn-primary text-light">Submit request</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div><!-- end .smart-forms section -->
        </div><!-- end .smart-wrap section -->
        <!-- partial -->

</body>

</html>