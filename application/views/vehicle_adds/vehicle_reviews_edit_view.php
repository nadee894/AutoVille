<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title">Comment Quick Edit</h4>
</div>
<form id="edit_review_form" name="edit_review_form" method="post">
    <div class="modal-body">

        <div class="form-group">
            <input type="hidden" id="review_id" name="review_id" value="<?php echo $review->id; ?>"
                   <input type="hidden" id="vehicle_id" name="vehicle_id" value="<?php echo $review->vehicle_id; ?>"
                   <label for="name">Description<span class="mandatory">*</span></label>
            <input id="description" class="form-control" name="description" type="text" value="<?php echo $review->description; ?>">
        </div>
        <span id="rtn_msg_edit"></span>
    </div>
    <div class="modal-footer">
        <button class="btn btn-default" type="submit">Save Changes</button>
        <button data-dismiss="modal" class="btn btn-success" type="button">Close</button>

    </div>
</form>
<script type="text/javascript">
    $("#edit_review_form").validate({
       // var vehicle_id= $('#vehicle_id').val();
       // alert(vehicle_id);
        rules: {
            description: "required"
        },
        messages: {
            description: "Please enter a transmission"
        }, submitHandler: function(form)
        {
            $.post(site_url + '/vehicle_reviews/edit_review', $('#edit_review_form').serialize(), function(msg)
            {
                if (msg == 1) {
                    $('#rtn_msg_edit').html('<div class="alert alert-success fade in"><button class="close close-sm" type="button" data-dismiss="alert"><i class="fa fa-times"></i></button><strong>Successfully saved!!.</strong></div>');

                    //window.location = site_url + '/vehicle_advertisements/vehicle_advertisement_detail_view/'+$('#vehicle_id').val()+;
                } else {
                    $('#rtn_msg_edit').html('<div class="alert alert-block alert-danger fade in"><button class="close close-sm" type="button" data-dismiss="alert"><i class="fa fa-times"></i></button><strong>An error occured.</strong></div>');

                }
            });


        }
    });
</script>
