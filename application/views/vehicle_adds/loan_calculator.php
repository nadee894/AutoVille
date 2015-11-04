<header><h2>Loan calculator</h2></header>
<figure>
    <form>
        <div class="form-group">
            <label>Down Payment</label>
            <input class="ui-slider" type="range" value="price" id="price-slider" min="0" max="<?php echo $vehicle_detail->price; ?>" start="50000"><br>
            <span id="output01">Rs. 0</span>&nbsp;<i class="fa fa-info-circle" style="color: #36b6ff"></i>
        </div>
        <br>
        <div class="form-group">
            <label>Loan Term (Months)</label>
            <input class="ui-slider" type="range" id="month-slider" min="12" max="120" start="60"><br>
             <span id="output02">Rs. 0</span>&nbsp;<i class="fa fa-info-circle" style="color: #36b6ff"></i>
        </div>
        <br>
        <div class="form-group">
            <label>Car Value: </label>
            <span> Rs.  <?php echo number_format($vehicle_detail->price, 2); ?></span>
        </div>
        <br>
        <div class="form-group">
            <label>Monthly Installment:</label>
            <div class="output" >
                <span id="val3">Rs. 0</span>&nbsp;<i class="fa fa-info-circle" style="color: #36b6ff"></i>
            </div>
        </div>
    </form>
</figure>

<script type="text/javascript">
    $(document).ready(function () {

        var carvalue =<?php echo $vehicle_detail->price; ?>;

        $("#price-slider").change(function () {
             $("#output01").html(parseFloat($("#price-slider").val()).toFixed(2));
            var month_val = parseInt(carvalue) - parseInt($("#price-slider").val());
            $("#val3").html("Rs. " + month_val.toFixed(2));
           
        });

        $("#month-slider").change(function () {
             $("#output02").html(parseInt($("#month-slider").val()));
            var month_val = (parseInt(carvalue) - parseInt($("#price-slider").val())) / parseInt($("#month-slider").val());
            $("#val3").html("Rs. " + month_val.toFixed(2));
        });

    });


</script>
