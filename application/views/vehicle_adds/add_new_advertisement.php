<section class="container">
    <div class="row">
        <!--Content-->
        <div class="col-md-9">
            <header>
                <h1 class="page-title"><?php echo $heading; ?></h1>
            </header>
            <form id="form-submit" role="form" method="post" action="submit.html-.htm" enctype="multipart/form-data">
                <section>
                    <div class="form-group large">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                </section>

                <!--Vehicle details -->
                <section>
                    <h3>About Vehicle</h3>
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="manufacturer">Manufacturer<span class="mandatory">*</span></label>
                                <select name="manufacturer" id="manufacturer" title="Manufacturer" data-live-search="true">
                                    <?php foreach ($manufactures as $manufacture) { ?>
                                        <option value="<?php echo $manufacture->id; ?>"><?php echo $manufacture->name; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <!--/.col-md-4-->
                        <div class="col-md-4 col-sm-4">
                            <div class="row">
                                <div class="col-md-8 col-sm-8">
                                    <div class="form-group">
                                        <label for="model">Model<span class="mandatory">*</span></label>
                                        <select name="model" id="model" title="Model" data-live-search="true">
                                            <?php foreach ($models as $model) { ?>
                                                <option value="<?php echo $model->id; ?>"><?php echo $model->name; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="fabrication">Fabrication<span class="mandatory">*</span></label>
                                        <select name="fabrication" id="fabrication" title="Fabrication" data-live-search="true">
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
                        </div>
                        <!--/.col-md-4-->
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="street">Street</label>
                                <input type="text" class="form-control" id="street" name="street">
                            </div>
                        </div>
                        <!--/.col-md-4-->
                    </div>
                    <!--/.row-->
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="phone-number">Phone Number</label>
                                <input type="text" class="form-control" id="phone-number" name="phone-number" pattern="\d*">
                            </div>
                        </div>
                        <!--/.col-md-4-->
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                        </div>
                        <!--/.col-md-4-->
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="website">Website</label>
                                <input type="text" class="form-control" id="website" name="website">
                            </div>
                        </div>
                        <!--/.col-md-4-->
                    </div>
                    <!--/.row-->
                </section>
                <!--Vehicle details -->

                <section>
                    <h3>Address & Contact</h3>
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="state">State</label>
                                <input type="text" class="form-control" id="state" name="state">
                            </div>
                        </div>
                        <!--/.col-md-4-->
                        <div class="col-md-4 col-sm-4">
                            <div class="row">
                                <div class="col-md-8 col-sm-8">
                                    <div class="form-group">
                                        <label for="city">City</label>
                                        <input type="text" class="form-control" id="city" name="city">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="zip">ZIP</label>
                                        <input type="text" class="form-control" id="zip" name="zip" pattern="\d*">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/.col-md-4-->
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="street">Street</label>
                                <input type="text" class="form-control" id="street" name="street">
                            </div>
                        </div>
                        <!--/.col-md-4-->
                    </div>
                    <!--/.row-->
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="phone-number">Phone Number</label>
                                <input type="text" class="form-control" id="phone-number" name="phone-number" pattern="\d*">
                            </div>
                        </div>
                        <!--/.col-md-4-->
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                        </div>
                        <!--/.col-md-4-->
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="website">Website</label>
                                <input type="text" class="form-control" id="website" name="website">
                            </div>
                        </div>
                        <!--/.col-md-4-->
                    </div>
                    <!--/.row-->
                </section>
                <!--/#address-contact-->
                <section>
                    <h3>Map</h3>
                    <div id="map-simple" class="map-submit"></div>
                </section>
                <section>
                    <h3>Features</h3>
                    <ul class="list-unstyled checkboxes">
                        <li><div class="checkbox"><label><input type="checkbox" name="features[]" value="1">Free Parking</label></div></li>
                        <li><div class="checkbox"><label><input type="checkbox" name="features[]" value="2">Cards Accepted</label></div></li>
                        <li><div class="checkbox"><label><input type="checkbox" name="features[]" value="3">Wi-Fi</label></div></li>
                        <li><div class="checkbox"><label><input type="checkbox" name="features[]" value="4">Air Condition</label></div></li>
                        <li><div class="checkbox"><label><input type="checkbox" name="features[]" value="5">Reservations</label></div></li>
                        <li><div class="checkbox"><label><input type="checkbox" name="features[]" value="6">Team-buildings</label></div></li>
                        <li><div class="checkbox"><label><input type="checkbox" name="features[]" value="7">Places to seat</label></div></li>
                        <li><div class="checkbox"><label><input type="checkbox" name="features[]" value="8">Winery</label></div></li>
                        <li><div class="checkbox"><label><input type="checkbox" name="features[]" value="9">Draft Beer</label></div></li>
                        <li><div class="checkbox"><label><input type="checkbox" name="features[]" value="10">LCD</label></div></li>
                        <li><div class="checkbox"><label><input type="checkbox" name="features[]" value="11">Saloon</label></div></li>
                        <li><div class="checkbox"><label><input type="checkbox" name="features[]" value="12">Free Access</label></div></li>
                        <li><div class="checkbox"><label><input type="checkbox" name="features[]" value="13">Terrace</label></div></li>
                        <li><div class="checkbox"><label><input type="checkbox" name="features[]" value="14">Minigolf</label></div></li>
                        <li><div class="checkbox"><label><input type="checkbox" name="features[]" value="15">Night Bar</label></div></li>
                    </ul>
                </section>
                <!--Menu-->
                <section>
                    <h3>Menu & Wine List</h3>
                    <div class="row">
                        <div class="col-md-3">
                            <!-- Nav tabs -->
                            <ul class="nav nav-pills nav-stacked">
                                <li class="active"><a href="index.htm#tab-menu" data-toggle="tab">Menu</a></li>
                                <li><a href="index.htm#tab-daily-menu" data-toggle="tab">Daily Menu</a></li>
                                <li><a href="index.htm#tab-wine-list" data-toggle="tab">Wine List</a></li>
                            </ul>
                        </div>
                        <div class="col-md-9">
                            <!-- Tab panes -->
                            <div class="tab-content menu min-height-160">
                                <div class="tab-pane fade in active" id="tab-menu">
                                    <article>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="menu-icon"><i class="fa fa-cutlery"></i><span>1</span></div>
                                            </div>
                                            <div class="col-md-11">
                                                <div class="row">
                                                    <div class="col-md-10">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="menu-title[]" placeholder="Title">
                                                        </div>
                                                    </div>
                                                    <!-- /.col-md-10-->
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="menu-price[]" placeholder="Price">
                                                        </div>
                                                    </div>
                                                    <!-- /.col-md-2-->
                                                </div>
                                                <!-- /.row-->
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="menu-description[]" placeholder="Description">
                                                </div>
                                                <!-- /.form-group -->
                                                <div class="form-group">
                                                    <button type="submit" class="btn framed icon">Add More<i class="fa fa-plus"></i></button>
                                                </div>
                                                <!-- /.form-group -->
                                            </div>
                                            <!--/.col-md-11-->
                                        </div>
                                        <!--/.row-->
                                    </article>
                                </div>
                                <!--/#tab-menu-->
                                <div class="tab-pane fade" id="tab-daily-menu">
                                    <article>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="menu-icon"><i class="fa fa-cutlery"></i><span>1</span></div>
                                            </div>
                                            <div class="col-md-11">
                                                <div class="row">
                                                    <div class="col-md-10">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="menu-title[]" placeholder="Title">
                                                        </div>
                                                    </div>
                                                    <!-- /.col-md-10-->
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="menu-price[]" placeholder="Price">
                                                        </div>
                                                    </div>
                                                    <!-- /.col-md-2-->
                                                </div>
                                                <!-- /.row-->
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="menu-description[]" placeholder="Description">
                                                </div>
                                                <!-- /.form-group -->
                                                <div class="form-group">
                                                    <button type="submit" class="btn framed icon">Add More<i class="fa fa-plus"></i></button>
                                                </div>
                                                <!-- /.form-group -->
                                            </div>
                                            <!--/.col-md-11-->
                                        </div>
                                        <!--/.row-->
                                    </article>
                                </div>
                                <!--/#tab-daily-menu-->
                                <div class="tab-pane fade" id="tab-wine-list">
                                    <article>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="menu-icon"><i class="fa fa-glass"></i><span>1</span></div>
                                            </div>
                                            <div class="col-md-11">
                                                <div class="row">
                                                    <div class="col-md-10">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="menu-title[]" placeholder="Title">
                                                        </div>
                                                    </div>
                                                    <!-- /.col-md-10-->
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="menu-price[]" placeholder="Price">
                                                        </div>
                                                    </div>
                                                    <!-- /.col-md-2-->
                                                </div>
                                                <!-- /.row-->
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="menu-description[]" placeholder="Description">
                                                </div>
                                                <!-- /.form-group -->
                                                <div class="form-group">
                                                    <button type="submit" class="btn framed icon">Add More<i class="fa fa-plus"></i></button>
                                                </div>
                                                <!-- /.form-group -->
                                            </div>
                                            <!--/.col-md-11-->
                                        </div>
                                        <!--/.row-->
                                    </article>
                                </div>
                                <!--/#tab-wine-list-->
                            </div>
                            <!--end Tab panes-->
                        </div>
                        <!--/.col-md-9-->
                    </div>
                    <!--/.row-->
                </section>
                <!--end Menu-->
                <!--Gallery-->
                <section>
                    <h3>Gallery</h3>
                    <div id="file-submit" class="dropzone">
                        <input name="file" type="file" multiple>
                        <div class="dz-default dz-message"><span>Click or Drop Images Here</span></div>
                    </div>
                </section>
                <!--end Gallery-->
                <!--Opening Hours-->
                <section>
                    <h3>Opening Hours</h3>
                    <div class="opening-hours">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr class="day">
                                        <td class="day-name">Monday</td>
                                        <td class="from"><input class="oh-timepicker" type="text" placeholder="From" name="open-hour-from[]"></td>
                                        <td class="to"><input class="oh-timepicker" type="text" placeholder="To" name="open-hour-to[]"></td>
                                        <td class="non-stop"><div class="checkbox">
                                                <label>
                                                    <input type="checkbox">Non-stop
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <!--/.day-->
                                    <tr class="day">
                                        <td class="day-name">Tuesday</td>
                                        <td class="from"><input class="oh-timepicker" type="text" placeholder="From" name="open-hour-from[]"></td>
                                        <td class="to"><input class="oh-timepicker" type="text" placeholder="To" name="open-hour-to[]"></td>
                                        <td class="non-stop"><div class="checkbox">
                                                <label>
                                                    <input type="checkbox">Non-stop
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <!--/.day-->
                                    <tr class="day">
                                        <td class="day-name">Wednesday</td>
                                        <td class="from"><input class="oh-timepicker" type="text" placeholder="From" name="open-hour-from[]"></td>
                                        <td class="to"><input class="oh-timepicker" type="text" placeholder="To" name="open-hour-to[]"></td>
                                        <td class="non-stop"><div class="checkbox">
                                                <label>
                                                    <input type="checkbox">Non-stop
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <!--/.day-->
                                    <tr class="day">
                                        <td class="day-name">Thursday</td>
                                        <td class="from"><input class="oh-timepicker" type="text" placeholder="From" name="open-hour-from[]"></td>
                                        <td class="to"><input class="oh-timepicker" type="text" placeholder="To" name="open-hour-to[]"></td>
                                        <td class="non-stop"><div class="checkbox">
                                                <label>
                                                    <input type="checkbox">Non-stop
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <!--/.day-->
                                    <tr class="day">
                                        <td class="day-name">Friday</td>
                                        <td class="from"><input class="oh-timepicker" type="text" placeholder="From" name="open-hour-from[]"></td>
                                        <td class="to"><input class="oh-timepicker" type="text" placeholder="To" name="open-hour-to[]"></td>
                                        <td class="non-stop"><div class="checkbox">
                                                <label>
                                                    <input type="checkbox">Non-stop
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <!--/.day-->
                                    <tr class="day weekend">
                                        <td class="day-name">Saturday</td>
                                        <td class="from"><input class="oh-timepicker" type="text" placeholder="From" name="open-hour-from[]"></td>
                                        <td class="to"><input class="oh-timepicker" type="text" placeholder="To" name="open-hour-to[]"></td>
                                        <td class="non-stop"><div class="checkbox">
                                                <label>
                                                    <input type="checkbox">Non-stop
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <!--/.day-->
                                    <tr class="day weekend">
                                        <td class="day-name">Sunday</td>
                                        <td class="from"><input class="oh-timepicker" type="text" placeholder="From" name="open-hour-from[]"></td>
                                        <td class="to"><input class="oh-timepicker" type="text" placeholder="To" name="open-hour-to[]"></td>
                                        <td class="non-stop"><div class="checkbox">
                                                <label>
                                                    <input type="checkbox">Non-stop
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <!--/.day-->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
                <!--end Opening Hours-->
                <hr>
                <section>
                    <figure class="pull-left margin-top-15">
                        <p>By clicking “Submit & Pay” button you agree with <a href="terms-conditions.html" class="link">Terms & Conditions</a></p>
                    </figure>
                    <div class="form-group">
                        <button type="submit" class="btn btn-default pull-right" id="submit">Submit & Pay</button>
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