<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title">Transmission Quick Edit</h4>
</div>
<form id="edit_transmission_form" name="edit_transmission_form">
    <div class="modal-body">

        <div class="form-group">
            <label for="name">Title</label>
            <input id="name" class="form-control" name="name" type="text" value="<?php echo $transmission->name; ?>">
            <input id="transmission_id"  name="transmission_id" type="hidden" value="<?php echo $transmission->id; ?>">
        </div>
    </div>
    <div class="modal-footer">
        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
        <button class="btn btn-success" type="submit">Save changes</button>
    </div>
</form>

<script type="text/javascript">

    //edit transmission form validation
    $("#edit_transmission_form").validate({
        rules: {
            name: "required"
        },
        messages: {
            name: "Please enter a title"
        }, submitHandler: function(form)
        {
            $.post(site_url + '/transmission/edit_transmission', $('#edit_transmission_form').serialize(), function(msg)
            {
                if (msg == 1) {

                    window.location = site_url + '/transmission/manage_transmissions';
                } else {

                }
            });


        }
    });
</script>