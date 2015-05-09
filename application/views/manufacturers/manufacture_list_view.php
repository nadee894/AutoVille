<div class="container">
    <div class="row">
        <div class="col-md-8 col-sm-9">
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
        <div class="row">
<!--        <div class="col-md-6 col-sm-3" >-->
            <header><h2>Vehicle News</h2></header>
              <?php foreach ($vehicle_news_results as $result) { ?>
                 <ul class="categories">
                     <li><a><?php echo $result->title ?></a>                         
                         <ul class="sub-category" >                            
                            <li><a><?php echo $result->content ?></a></li> 
                            <button  type="submit" class="btn btn-primary"><a href="<?php echo site_url();?>/vehicle_news/list_vehicle_news">Read More </a></button>
                        </ul>
                     </li>
                 </ul>
              <?php } ?> 
             
<!--        </div>-->
        </div>
    </div>

</div>

