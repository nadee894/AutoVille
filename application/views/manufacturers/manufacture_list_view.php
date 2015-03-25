<div class="container">
    <div class="row">
        <div class="col-md-9 col-sm-9">
            <header><h2>Manufacturers</h2></header>
            <?php foreach ($names as $name) { ?>
                <ul class="categories">
                    <li><a href=""><?php echo $name->name ?></a>                         
                        <ul class="sub-category">                            
                            <li><a href=""><?php echo $name->modelname ?></a></li>                            
                        </ul>
                    </li>
                </ul>
            <?php } ?>
            <!--/.categories-->
        </div>
        <div class="col-md-3 col-sm-3">
            <header><h2>Text Widget</h2></header>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque lectus turpis, rutrum
                at dictum ac, mollis sed turpis. Integer commodo condimentum quam sit amet pellentesque.
                In convallis orci sit amet dictum ultricies. Donec iaculis libero sed euismod blandit
            </p>
        </div>
    </div>

</div>

