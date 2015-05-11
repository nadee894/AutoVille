<!--toastr-->
<link href="<?php echo base_url(); ?>application_resources/assets/toastr-master/toastr.css" rel="stylesheet" type="text/css" />
<section class="container">
    <div class="row">
        <!--Content-->
        <div class="col-md-9">
            <header>
                <h1 class="page-title"><?php echo $heading; ?></h1>
            </header>
            <form id="form-submit" name="form-submit" role="form" method="post" enctype="multipart/form-data">

                <!--Vehicle details -->
                <section>
                    <h3>About Vehicle</h3>
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="manufacturer">Manufacturer<span class="mandatory">*</span></label>
                                <select name="manufacturer" id="manufacturer" title="This field is required." data-live-search="true" class="live_select" >
                                    <option value="" selected>Select Manufacturer</option>
                                    <?php foreach ($manufactures as $manufacture) { ?>
                                        <option value="<?php echo $manufacture->id; ?>"><?php echo $manufacture->name; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <!--/.col-md-4-->

                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="model">Model<span class="mandatory">*</span></label>
                                <div id="model_wrapper">
                                    <select name="model" id="model" title="This field is required." data-live-search="true" disabled="true">
                                        <option value="">Select Model</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="fabrication">Fabrication<span class="mandatory">*</span></label>
                                <select name="fabrication" id="fabrication" title="This field is required."  data-live-search="true">
                                    <option value="">Select Fabrication</option>
                                    <option value="1990">1990</option>
                                    <option value="1991">1991</option>
                                    <option value="1992">1992</option>
                                    <option value="1993">1993</option>
                                    <option value="1994">1994</option>
                                    <option value="1995">1995</option>
                                    <option value="1996">1996</option>
                                    <option value="1997">1997</option>
                                    <option value="1998">1998</option>
                                    <option value="1999">1999</option>
                                    <option value="2000">2000</option>
                                    <option value="2001">2001</option>
                                    <option value="2002">2002</option>
                                    <option value="2003">2003</option>
                                    <option value="2004">2004</option>
                                    <option value="2005">2005</option>
                                    <option value="2006">2006</option>
                                    <option value="2007">2007</option>
                                    <option value="2008">2008</option>
                                    <option value="2009">2009</option>
                                    <option value="2010">2010</option>
                                    <option value="2011">2011</option>
                                    <option value="2012">2012</option>
                                    <option value="2013">2013</option>
                                    <option value="2014">2014</option>
                                    <option value="2015">2015</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!--/.row-->
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="fuel_type">Fuel Type<span class="mandatory">*</span></label>
                                <select name="fuel_type" id="fuel_type" title="This field is required." data-live-search="true">
                                    <option value="">Select Fuel Type</option>
                                    <?php foreach ($fuel_types as $fuel_type) { ?>
                                        <option value="<?php echo $fuel_type->id; ?>"><?php echo $fuel_type->name; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <!--/.col-md-4-->
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="transmission">Transmission<span class="mandatory">*</span></label>
                                <select name="transmission" id="transmission" title="This field is required." data-live-search="true">
                                    <option value="">Select Transmission</option>
                                    <?php foreach ($transmissions as $transmission) { ?>
                                        <option value="<?php echo $transmission->id; ?>"><?php echo $transmission->name; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <!--/.col-md-4-->
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="body_type">Body Type<span class="mandatory">*</span></label>
                                <select name="body_type" id="body_type" title="This field is required." data-live-search="true">
                                    <option value="">Select Body Type</option>
                                    <?php foreach ($body_types as $body_type) { ?>
                                        <option value="<?php echo $body_type->id; ?>"><?php echo $body_type->name; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <!--/.col-md-4-->
                    </div>
                    <!--/.row-->

                    <!--/.row-->
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="doors">Doors<span class="mandatory">*</span></label>
                                <select name="doors" id="doors" title="This field is required." data-live-search="true">
                                    <option value="">Select Doors</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>

                                </select>
                            </div>
                        </div>
                        <!--/.col-md-4-->
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="location">Location<span class="mandatory">*</span></label>
                                <select name="location" id="location" title="This field is required." data-live-search="true">
                                    <option value="">Select Location</option>
                                    <?php foreach ($locations as $location) { ?>
                                        <option value="<?php echo $location->id; ?>"><?php echo $location->name; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <!--/.col-md-4-->
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="colour">Colour<span class="mandatory">*</span></label>
                                <select name="colour" id="colour" title="This field is required." data-live-search="true">
                                    <option value="">Select Colour</option>
                                    <option value="Blue">Blue</option>
                                    <option value="Yellow">Yellow</option>
                                    <option value="Purple">Purple</option>
                                    <option value="Pink">Pink</option>
                                    <option value="Red">Red</option>
                                    <option value="Green">Green</option>
                                    <option value="White">White</option>
                                    <option value="Black">Black</option>
                                    <option value="Silver">Silver</option>
                                </select>
                            </div>
                        </div>
                        <!--/.col-md-4-->
                    </div>
                    <!--/.row-->

                    <!--/.row-->
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="sale_type">Condition <span class="mandatory">*</span></label>
                                <select name="sale_type" id="sale_type" title="This field is required.">
                                    <option value="">Select Condition</option>
                                    <option value="new">New</option>
                                    <option value="used">Used</option>
                                    <option value="Reconditioned">Reconditioned</option>
                                </select>
                            </div>
                        </div>
                        <!--/.col-md-4-->
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="price">Price<span class="mandatory">*</span></label>
                                <input id="price" class="form-control" type="text" name="price" onkeypress="return numbersonly(this, event, '.')">
                            </div>
                        </div>
                        <!--/.col-md-4-->
                        <div class="col-md-4 col-sm-4">
                            <div class="row">
                                <div class="col-md-7 col-sm-7">

                                    <div class="form-group">
                                        <label for="chassis_no">VIN / Chassis Number<span class="mandatory">*</span></label>
                                        <input id="chassis_no" class="form-control" type="text" name="chassis_no">
                                    </div>
                                </div>
                                <div class="col-md-5 col-sm-5">

                                    <div class="form-group">
                                        <label for="kilo_meters">Hp / Kw <span class="mandatory">*</span></label>
                                        <input id="kilo_meters" class="form-control" type="text" name="kilo_meters" onkeypress="return numbersonly(this, event, '.')">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/.col-md-4-->
                    </div>
                    <!--/.row-->


                </section>

                <section>
                    <h3>Vehicle Description</h3>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <textarea id="vehicle-description-field" class="form-control" name="description" rows="7"></textarea>
                            </div>
                        </div>
                    </div>
                </section>    

                <!--Vehicle details -->

                <section>
                    <h3>Features</h3>
                    <ul class="list-unstyled checkboxes">
                        <?php foreach ($equipments as $equipment) { ?>
                            <li><div class="checkbox"><label><input type="checkbox" name="equipment[]" value="<?php echo $equipment->id; ?>"><?php echo $equipment->name; ?></label></div></li>
                        <?php } ?>
                    </ul>
                </section>


                <section>
                    <h3>Address & Contact</h3>

                    <!--/.row-->
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="phone-number">Phone Number</label>
                                <input type="text" readonly="true" class="form-control" id="phone-number" name="phone-number" pattern="\d*" value="<?php echo $this->session->userdata('USER_PHONE'); ?>">
                            </div>
                        </div>
                        <!--/.col-md-4-->
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" readonly="true" class="form-control" id="email" name="email" value="<?php echo $this->session->userdata('USER_EMAIL'); ?>">
                            </div>
                        </div>
                    </div>
                    <!--/.row-->

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="state">Address</label>
                                <textarea readonly="true" class="form-control" id="address" name="address">
                                    <?php echo $this->session->userdata('USER_ADDRESS'); ?>
                                </textarea>
                            </div>
                        </div>

                    </div>

                </section>
                <!--/#address-contact-->
            </form>

            <!--Gallery-->
            <section>
                <h3>Gallery</h3>

                <form  id="fileupload"  action="<?php echo site_url() . '/fileupload' ?>" method="POST" enctype="multipart/form-data">

                    <fieldset class = "adminList">
                        <div class="form-group">

                            <div class="right  no-padding fileupload-buttonbar">
                                <div class="span7">
                                    <!-- The fileinput-button span is used to style the file input field as button -->
                                    <span class="btn btn-success fileinput-button">
                                        <i class="glyphicon glyphicon-plus"></i>
                                        <span>Add files...</span>
                                        <input type="file" name="files[]" multiple>
                                    </span>
                                    <button type="submit" class="btn btn-primary start" id="start_upload" >
                                        <i class="glyphicon glyphicon-upload"></i>
                                        <span>Start upload</span>
                                    </button>
                                    <button type="reset" class="btn btn-warning cancel">
                                        <i class="glyphicon glyphicon-ban-circle"></i>
                                        <span>Cancel upload</span>
                                    </button>


                                </div>
                                <!-- The global progress information -->
                                <div class="span5 fileupload-progress fade">
                                    <!-- The global progress bar -->
                                    <div class="progress progress-success progress-striped active">
                                        <div class="bar" style="width:0%;"></div>
                                    </div>
                                    <!-- The extended global progress information -->
                                    <div class="progress-extended">&nbsp;</div>
                                </div>
                            </div>
                            <!-- The loading indicator is shown during file processing -->
                            <label><em>Attach vehicle images.</em></label>
                            <br>
                            <input type="hidden" id="last_vehicle_id" value="<?php echo $last_id; ?>" name="last_vehicle_id"/>
                            <input type="hidden" id="image_count" value="0" name="image_count"/>
                            <span id="image_msg"></span>
                            <!-- The table listing the files available for upload/download -->
                            <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
                        </div>   

                    </fieldset>

                </form>

                <!-- The template to display files available for upload -->
                <script id="template-upload" type="text/x-tmpl">
                    {% for (var i=0, file; file=o.files[i]; i++) { %}
                    <tr class="template-upload fade">
                    <td>
                    <span class="preview"></span>
                    </td>
                    <td>
                    <p class="name">{%=file.name%}</p>
                    <strong class="error text-danger"></strong>
                    </td>
                    <td>
                    <p class="size">Processing...</p>
                    <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
                    </td>
                    <td>
                    {% if (!i && !o.options.autoUpload) { %}
                    <button class="btn btn-primary start" disabled style="display:none;">
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Start</span>
                    </button>
                    {% } %}
                    {% if (!i) { %}
                    <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                    </button>
                    {% } %}
                    </td>
                    </tr>
                    {% } %}
                </script>
                <!-- The template to display files available for download -->
                <script id="template-download" type="text/x-tmpl">
                    {% for (var i=0, file; file=o.files[i]; i++) { %}
                    <tr class="template-download fade" style="display:none">
                    <td>
                    <span class="preview">
                    {% if (file.thumbnailUrl) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                    {% } %}
                    </span>
                    </td>
                    <td>
                    <p class="name">
                    {% if (file.url) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                    {% } else { %}
                    <span>{%=file.name%}</span>
                    {% } %}
                    </p>
                    {% if (file.error) { %}
                    <div><span class="label label-danger">Error</span> {%=file.error%}</div>
                    {% } %}
                    </td>
                    <td>
                    <span class="size">{%=o.formatFileSize(file.size)%}</span>
                    </td>
                    <td>
                    {% if (file.deleteUrl) { %}
                    <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Delete</span>
                    </button>
                    <input type="checkbox" name="delete" value="1" class="toggle">
                    {% } else { %}
                    <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                    </button>
                    {% } %}
                    </td>
                    </tr>
                    {% } %}
                </script>
            </section>
            <!--end Gallery-->
            <form>
                <hr>
                <section>
                    <figure class="pull-left margin-top-15">
                        <p>By clicking “Submit“ button you agree with <a href="terms-conditions.html" class="link">Terms & Conditions</a></p>
                    </figure>
                    <div class="form-group">
                        <button type="button" class="btn btn-default pull-right" id="add_addvertisement_btn">Submit</button>
                    </div>
                    <!-- /.form-group -->
                </section>
            </form>
            <!--/#form-submit-->
        </div>
        <!--/.col-md-9-->
        <!--Sidebar-->
        <!--        <div class="col-md-3">
                    <aside id="sidebar">
                        <div class="sidebar-box">
                            <h3>Payment</h3>
                            <div class="form-group">
                                <label for="package">Your Package</label>
                                <select name="package" id="package" class="framed">
                                    <option value="">Select your package</option>
                                    <option value="1">Free</option>
                                    <option value="2">Silver</option>
                                    <option value="3">Gold</option>
                                    <option value="4">Platinum</option>
                                </select>
                            </div>
                             /.form-group 
                            <h4>This package includes</h4>
                            <ul class="bullets">
                                <li>1 Property</li>
                                <li>1 Agent Profile</li>
                                <li class="disabled">Agency Profile</li>
                                <li class="disabled">Featured Properties</li>
                            </ul>
                        </div>
                    </aside>
                     /#sidebar
                </div>-->
        <!-- /.col-md-3-->
        <!--end Sidebar-->
    </div>
</section>

<script src="<?php echo base_url(); ?>application_resources/assets/toastr-master/toastr.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>application_resources/assets/js/jquery.validate.min.js"></script>

<script type="text/javascript">


                                            //Manufacturer on change 
                                            $('#manufacturer').on('change', function(e) {

                                                var manufacturer = $(this).val();

                                                $.post(site_url + '/vehicle_advertisements/get_models_for_manufacturer', {manufacturer: manufacturer}, function(msg)
                                                {
                                                    $('#model_wrapper').html(msg);
                                                });
                                            });

                                            // add project sumbit btn action
                                            $(document).on('click', '#add_addvertisement_btn', function() {
                                                if ($('#form-submit').valid()) {
                                                    $('#form-submit').submit();
                                                }
                                            });

//custom validator for drop down
                                            $.validator.addMethod('selectmanufacture', function(value) {
                                                return (value != '0');
                                            }, "");

                                            $(document).ready(function() {



                                                $('.form#form-submit select').on('change', function(e) {
                                                    $('.form#form-submit').validate().element($(this));
                                                });


                                                //Add advertisement form validate function
                                                $("form#form-submit").validate({
                                                    ignore: "hidden:not(.live_select)",
                                                    rules: {
                                                        manufacturer: 'required',
                                                        model: 'required',
                                                        fabrication: 'required',
                                                        fuel_type: 'required',
                                                        transmission: 'required',
                                                        body_type: 'required',
                                                        doors: 'required',
                                                        location: 'required',
                                                        colour: 'required',
                                                        sale_type: 'required',
                                                        price: 'required',
                                                        chassis_no: 'required',
                                                        kilo_meters: 'required'

                                                    }, submitHandler: function(form)
                                                    {
                                                        if ($('#image_count').val() != '0') {
                                                            $.post(site_url + '/vehicle_advertisements/add_new_advertisement', $('#form-submit').serialize(), function(msg)
                                                            {
                                                                if (msg == 1) {
                                                                    toastr.success("Successfully submited your advertisement !!", "AutoVille");
                                                                    setTimeout("location.href = site_url+'/dashboard';", 100);

                                                                } else {
                                                                    $("#add_project_msg").html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button>Error: The <a class="link" href="#">advertisement </a>has failed.</div>');
                                                                }
                                                            });
                                                        } else {
                                                            $("#image_msg").html('<label class="error">Please upload atleast one image.</label>');
                                                        }

                                                    },
                                                    //put error message behind each form element




                                                });


                                            });

                                            function numbersonly(myfield, e, dec) {
                                                var key;
                                                var keychar;

                                                if (window.event)
                                                    key = window.event.keyCode;
                                                else if (e)
                                                    key = e.which;
                                                else
                                                    return true;
                                                keychar = String.fromCharCode(key);

// control keys
                                                if ((key == null) || (key == 0) || (key == 8) ||
                                                        (key == 9) || (key == 13) || (key == 27))
                                                    return true;

// numbers
                                                else if ((("0123456789").indexOf(keychar) > -1))
                                                    return true;

// decimal point jump
                                                else if (dec && (keychar == ".")) {
                                                    myfield.form.elements[dec].focus();
                                                    return false;
                                                }
                                                else
                                                    return false;
                                            }



</script>
<script src="<?php echo base_url(); ?>application_resources/jupload/js/tmpl.min.js"></script>
<script src="<?php echo base_url(); ?>application_resources/jupload/js/load-image.min.js"></script>
<script src="<?php echo base_url(); ?>application_resources/jupload/js/canvas-to-blob.min.js"></script>
<script src="<?php echo base_url(); ?>application_resources/jupload/js/jquery.blueimp-gallery.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="<?php echo base_url(); ?>application_resources/jupload/js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="<?php echo base_url(); ?>application_resources/jupload/js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="<?php echo base_url(); ?>application_resources/jupload/js/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="<?php echo base_url(); ?>application_resources/jupload/js/jquery.fileupload-image.js"></script>
<!-- The File Upload audio preview plugin -->
<script src="<?php echo base_url(); ?>application_resources/jupload/js/jquery.fileupload-audio.js"></script>
<!-- The File Upload video preview plugin -->
<script src="<?php echo base_url(); ?>application_resources/jupload/js/jquery.fileupload-video.js"></script>
<!-- The File Upload validation plugin -->
<script src="<?php echo base_url(); ?>application_resources/jupload/js/jquery.fileupload-validate.js"></script>
<!-- The File Upload user interface plugin -->
<script src="<?php echo base_url(); ?>application_resources/jupload/js/jquery.fileupload-ui.js"></script>
<!-- The main application script -->
<script src="<?php echo base_url(); ?>application_resources/jupload/js/main.js"></script>

<!-- jQuery UI styles -->
<link rel="stylesheet" href="<?php echo base_url(); ?>application_resources/jupload/css/jquery-ui-1.8.21.custom.css" id="theme" />
<!-- jQuery Image Gallery styles -->

<!-- CSS to style the file input field as button and adjust the jQuery UI progress bars -->
<link rel="stylesheet" href="<?php echo base_url(); ?>application_resources/jupload/css/jquery.fileupload.css" />