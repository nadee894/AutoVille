<script>
    $(window).load(function() {
        $(".list-slider").owlCarousel({
            rtl: false,
            items: 1,
            responsiveBaseWidth: ".slide",
            nav: true,
            navText: ["", ""]
        });
    });


</script>
<div class="list-slider owl-carousel">
    <div class="slide">
                            <a href="#"><img src="<?php echo base_url() ?>application_resources/assets/img/ad-banner-sidebar.png" alt=""></a>
        <!-- /.list-item -->
    </div>
    <!-- /.slide -->
    <div class="slide">
                            <a href="#"><img src="<?php echo base_url() ?>application_resources/assets/img/ad-banner-sidebar.png" alt=""></a>
        <!-- /.list-item -->
    </div>
    <!-- /.slide -->
</div>
<!-- /.list-slider -->