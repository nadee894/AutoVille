<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title">Manufacture Quick edit</h4>
</div>
<form id="edit_manufacture_form" name="edit_manufacture_form">
    <div class="modal-body">

        <div class="form-group">
            <label for="name">Title</label>
            <input id="name" class="form-control" name="name" type="text" value="<?php echo $manufacture->name; ?>">
            <input id="manufacture_id"  name="manufacture_id" type="hidden" value="<?php echo $manufacture->id; ?>">
        </div>
    </div>
    <div class="modal-footer">
        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
        <button class="btn btn-success" type="submit">Save changes</button>
    </div>
</form>

<script type="text/javascript">
    //edit manufacture form validation
    $("#edit_manufacture_form").validate({
        rules: {
            name: "required"
        },
        message: {
            name: "Please enter a title"
        }, submitHandler: function(form)
        {
            $.post(site_url + '/manufacture/edit_manufacture', $('#edit_manufacture_form').serialize(), function(msg) 
            {
                if (msg == 1) {
                    window.location = site_url + '/manufacture/manage_manufactures';
                } else {
                    
                }
            });
        }
    });
</script>

