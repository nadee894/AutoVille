<form class="main-search" role="form" method="post">
                    <header class="clearfix">
                        <h3 class="pull-left">Search</h3>
                        <a href="#" class="show-more pull-right" data-toggle="collapse" aria-expanded="false" aria-controls="advanced-search">Advanced Search</a>
                    </header>
                    <div class="advanced-search collapse" id="advanced-search">
                        <h4>Features</h4>
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
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="type">Property Type</label>
                                <select name="type" multiple title="All" data-live-search="true" id="type">
                                    <option value="1">Stores</option>
                                    <option value="2" class="sub-category">Apparel</option>
                                    <option value="3" class="sub-category">Computers</option>
                                    <option value="4" class="sub-category">Nature</option>
                                    <option value="5">Tourism</option>
                                    <option value="6">Restaurant & Bars</option>
                                    <option value="7" class="sub-category">Bars</option>
                                    <option value="8" class="sub-category">Vegetarian</option>
                                    <option value="9" class="sub-category">Steak & Grill</option>
                                    <option value="10">Sports</option>
                                    <option value="11" class="sub-category">Cycling</option>
                                    <option value="12" class="sub-category">Water Sports</option>
                                    <option value="13" class="sub-category">Winter Sports</option>
                                </select>
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!--/.col-md-6-->
                        <div class="col-md-3 col-sm-3">
                            <div class="form-group">
                                <label for="bedrooms">Bedrooms</label>
                                <div class="input-group counter">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="fa fa-minus"></i></button>
                                    </span>
                                    <input type="text" class="form-control" id="bedrooms" name="bedrooms" placeholder="Any">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="fa fa-plus"></i></button>
                                    </span>
                                </div><!-- /input-group -->
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!--/.col-md-3-->
                        <div class="col-md-3 col-sm-3">
                            <div class="form-group">
                                <label for="bathrooms">Bathrooms</label>
                                <div class="input-group counter">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="fa fa-minus"></i></button>
                                    </span>
                                    <input type="text" class="form-control" id="bathrooms" name="bathrooms" placeholder="Any">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="fa fa-plus"></i></button>
                                    </span>
                                </div><!-- /input-group -->
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!--/.col-md-3-->
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="location">Location</label>
                                <div class="input-group location">
                                    <input type="text" class="form-control" id="location" placeholder="Enter Location">
                                    <span class="input-group-addon"><i class="fa fa-map-marker geolocation" data-toggle="tooltip" data-placement="bottom" title="Find my position"></i></span>
                                </div>
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Price</label>
                                <div class="ui-slider" id="price-slider" data-value-min="100" data-value-max="40000" data-value-type="price" data-currency="$" data-currency-placement="before">
                                    <div class="values clearfix">
                                        <input class="value-min" name="value-min[]" readonly>
                                        <input class="value-max" name="value-max[]" readonly>
                                    </div>
                                    <div class="element"></div>
                                </div>
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!--/.col-md-6-->
                    </div>
                    <!--/.row-->
                </form>