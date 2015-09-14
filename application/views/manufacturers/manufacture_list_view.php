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
            <header>
                <h2>Vehicle News</h2>
            </header>
            <?php foreach ($vehicle_news_results as $result) { ?>
                <strong><?php echo $result->title ?></strong>
                <p><?php echo substr($result->content,0,250).' ...'; ?></p>
                <a class="btn btn-primary" href="<?php echo site_url(); ?>/vehicle_news/list_vehicle_news">Read More </a>

            <?php } ?> 
        </div>
    </div>
</div>

