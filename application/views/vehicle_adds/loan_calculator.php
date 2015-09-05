<div class="one-half col-241 search-area">
    <div class="small-12 large-3 columns loan-calculator" data-layer-category="loan-calculator">
        <legend><span class="bold">Loan</span> calculator</legend>
        <div class="payload">
            <div class="row options">
                <div class="form-group">
                    <label>Down Payment</label>

                    <input type="range" value="price" id="price-slider" min="0" max="<?php echo $vehicle_detail->price; ?>"><br>
                    <output value="#price-slider"> </output>
                </div>
                <br>
                <div class="form-group">
                    <label>Loan Term (Months)</label>

                    <input type="range" id="month-slider" min="1" max="120"><br>
                </div>

            </div>
        </div>
        <br>
        <div class="details">
            <div class="row">
                <!--<div class="medium-8 large-8 column" data-bank-period="1">-->
                <div class="car-value " id="carPrice">
                    <label>Car Value: </label>
                    <output> Rs.  <?php echo number_format($vehicle_detail->price); ?></output>

                </div>
            </div>
            <div class="row">
                <br>


                <label>Monthly Installment:</label>
                <div class="output" >
                    <!--<label> Rs</label>-->
                    <!--<output id="monthly-payment">Rs. 0</output>-->
                    <input type="text" id="val3" /><br>
                </div>
                <div class="medium-1 large-1 columns">
                    <i class="icon-info-circled" data-selector="monthly-instalment-tooltip" data-tooltip="" aria-haspopup="true" title=""></i>
                </div>

            </div>
            <br>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {


        var carvalue =<?php echo $vehicle_detail->price; ?>;
         
        print("carvalue");

        $("#price-slider").mousemove(function () {
            $("#val3").val(
                    parseInt(carvalue) - parseInt($("#price-slider").val()));
        });

        $("#month-slider").mousemove(function () {
            $("#val3").val(
                    (parseInt(carvalue) - parseInt($("#price-slider").val())) / parseInt($("#month-slider").val()));
        });

    });


</script>
