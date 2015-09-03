<?php for ($i = 0; $i < 3; $i++) { ?>
    <div class="col-md-2 form-group">        
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
<?php } ?>
<div class=" col-md-1 form-group">        
    <br/>
    <button type="button" class="btn btn-default" onclick=""><i class="fa fa-search"></i></button>
</div>
