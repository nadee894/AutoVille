
<body onunload="" class="page-subpage page-blog-listing navigation-off-canvas" id="page-top">

<!-- Outer Wrapper-->
<div id="outer-wrapper">
    <!-- Inner Wrapper -->
    <div id="inner-wrapper">
        <!-- Navigation-->
        
        <!-- end Navigation-->
        <!-- Page Canvas-->
        <div id="page-canvas">
            <!--Off Canvas Navigation-->
            <nav class="off-canvas-navigation">
                <header>Navigation</header>
                <div class="main-navigation navigation-off-canvas"></div>
            </nav>
            
            <div id="page-content">
                <section class="container">
                    <div class="row">
                        <div class="col-md-16">   
                            <?php foreach ($vehicle_news_list as $value) { ?>                             
                            <article class="blog-post">
                                <header><a href="blog-detail.html"><h2><?php echo $value->title; ?></h2></a></header>
                                <a href="blog-detail.html"></a>
                                
                                <p><?php echo $value->content; ?></p>
                                
                            </article>
                             <?php } ?>
                            <!--Pagination-->
                            <nav>
                                <ul class="pagination pull-right">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#" class="previous"><i class="fa fa-angle-left"></i></a></li>
                                    <li><a href="#" class="next"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </nav>
                            <!--end Pagination-->
                        
                </section>
            </div>
            <!-- end Page Content-->
        </div>
        
    </div>
    <!-- end Inner Wrapper -->
</div>
<!-- end Outer Wrapper-->

<script type="text/javascript" src="assets/js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="assets/js/before.load.html"></script>
<script type="text/javascript" src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.html"></script>
<script type="text/javascript" src="assets/js/smoothscroll.html"></script>
<script type="text/javascript" src="assets/js/bootstrap-select.min.html"></script>
<script type="text/javascript" src="assets/js/jquery.hotkeys.js"></script>
<script type="text/javascript" src="assets/js/custom.html"></script>


</body>

