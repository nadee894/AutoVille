<div>
    <h3><span class="bold">Comments</span></h3>
    <?php foreach ($vehicle_reviews as $value) { ?>
        <p><?php echo $value->description; ?></p>
    <?php } ?>               
</div><br>
<div id="container">
    <div class="comment_input">
        <form name="form1">
<!--        	<input type="text" name="name" placeholder="Name..."/></br></br>-->
            <textarea name="comments" placeholder="Leave Comments Here..." style="width:635px; height:100px;"></textarea></br></br>
            <button  type="submit" onClick="commentSubmit()" class="btn btn-primary">Post</button>
        </form>
    </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>
    function commentSubmit(){
		if(form1.comments.value == ''){ //exit if one of the field is blank
			alert('Enter your message !');
			return;
		}
		var comments = form1.comments.value;
                
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url();?>/vehicle_reviews/add_vehicle_reviews",
                    data: "description="+comments,
                    success:function (msg){
                    if(msg==1){
                        alert('success');
                    }
                    else{
                        alert('error');
                    }
                }
                });
		
	}
</script>
    