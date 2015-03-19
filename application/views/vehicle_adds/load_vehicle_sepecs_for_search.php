<div class="inner">
    <div class="container">
        <h1>Find Your Dream Car</h1>
        <div class="search-bar horizontal">
            <form class="main-search border-less-inputs background-color-grey-dark dark-inputs" role="form" method="post" action="index-cars.html-.htm">
                <div class="input-row">
                    <div class="form-group">
                        <label for="manufacturer">Manufacturer</label>
                        <select name="manufacturer" id="manufacturer" multiple title="Manufacturer" data-live-search="true">
                            <option value="1">Audi</option>
                            <option value="2">BMW</option>
                            <option value="3">Jeep</option>
                            <option value="4">Ford</option>
                            <option value="5">Mazda</option>
                            <option value="6">Opel</option>
                            <option value="7">Toyota</option>
                        </select>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label for="model">Model</label>
                        <select name="model" id="model" multiple title="Model" data-live-search="true">
                            <option value="1">C-Max</option>
                            <option value="2">Escort</option>
                            <option value="3">Mondeo</option>
                            <option value="4">Focus</option>
                            <option value="5">Mustang</option>
                            <option value="6">Ranger</option>
                            <option value="7">Transit</option>
                        </select>
                    </div>        
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label for="model">Body Type</label>
                        <select name="model" id="model" multiple title="Model" data-live-search="true">
                            <option value="1">C-Max</option>
                            <option value="2">Escort</option>
                            <option value="3">Mondeo</option>
                            <option value="4">Focus</option>
                            <option value="5">Mustang</option>
                            <option value="6">Ranger</option>
                            <option value="7">Transit</option>
                        </select>
                    </div>        
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label>Year</label>
                        <div class="ui-slider" id="year-slider" data-value-min="1920" data-value-max="2015" data-step="1">
                            <div class="values clearfix">
                                <input class="value-min" name="value-min[]" readonly>
                                <input class="value-max" name="value-max[]" readonly>
                            </div>
                            <div class="element"></div>
                        </div>
                    </div>
                    <!-- /.form-group -->
                </div>
                <div class="input-row">                    
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label for="fuel">Fuel</label>
                        <select name="manufacturer" id="fuel" multiple title="Any">
                            <option value="1">Gasoline</option>
                            <option value="2">Diesel</option>
                            <option value="3">Electric</option>
                            <option value="4">Hybrid</option>
                            <option value="5">Gas</option>
                        </select>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label for="type">Sale Type</label>
                        <select name="type" id="type" multiple title="Any">
                            <option value="1">New</option>
                            <option value="2">Used</option>
                        </select>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label for="type">Color</label>
                        <select name="type" id="type" multiple title="Any">
                            <option value="1">New</option>
                            <option value="2">Used</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <div class="ui-slider" id="price-slider" data-value-min="100" data-value-max="40000" data-value-type="price" data-currency="$" data-currency-placement="before" data-step="10">
                            <div class="values clearfix">
                                <input class="value-min" name="value-min[]" readonly>
                                <input class="value-max" name="value-max[]" readonly>
                            </div>
                            <div class="element"></div>
                        </div>
                    </div>

                </div>
                <div class="input-row">
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label for="type">Transmission</label>
                        <select name="type" id="type" multiple title="Any">
                            <option value="1">New</option>
                            <option value="2">Used</option>
                        </select>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label for="type">Kilometers</label>
                        <select name="type" id="type" multiple title="Any">
                            <option value="1">New</option>
                            <option value="2">Used</option>
                        </select>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label for="type">Location</label>
                        <select name="type" id="type" multiple title="Any">
                            <option value="1">New</option>
                            <option value="2">Used</option>
                        </select>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label for="keyword">Keyword</label>
                        <input type="text" class="form-control" id="keyword" placeholder="Enter Keyword">
                    </div>  
                    <!-- /.form-group -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                    <!-- /.form-group -->
                </div>
            </form>
            <!-- /.main-search -->
        </div>
        <!-- /.search-bar -->
    </div>
</div>
<div class="background">
    <img src="<?php echo base_url(); ?>application_resources/assets/img/cars-bg.jpg" alt="">
</div>