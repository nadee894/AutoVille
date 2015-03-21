<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title">Fuel Type Quick Edit</h4>
</div>
<form id="edit_fuel_type_form" name="edit_fuel_type_form">
    <div class="modal-body">

        <div class="form-group">
            <label for="name">Fuel Type</label>
            <input id="name" class="form-control" name="name" type="text" value="<?php echo $fuel_type->name; ?>">
            <input id="fuel_type_id"  name="fuel_type_id" type="hidden" value="<?php echo $fuel_type->id; ?>">
        </div>
    </div>
    <div class="modal-footer">
        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
        <button class="btn btn-success" type="submit">Save changes</button>
    </div>
</form>

<script type="text/javascript">

    //edit fuel_type form validation
    $("#edit_fuel_type_form").validate({
        rules: {
            name: "required"
        },
        messages: {
            name: "Please enter a fuel type"
        }, submitHandler: function (form) {

            $.post(site_url + '/fuel_type/edit_fuel_type', $('#edit_fuel_type_form').serialize(), function (msg)
            {
                if (msg == 1) {
                    $('#rtn_msg_edit').html('<div class="alert alert-success fade in"><button class="close close-sm" type="button" data-dismiss="alert"><i class="fa fa-times"></i></button><strong>Successfully saved!!.</strong></div>');
                    window.location = site_url + '/fuel_type/manage_fuel_types';
                } else {
                    $('#rtn_msg_edit').html('<div class="alert alert-block alert-danger fade in"><button class="close close-sm" type="button" data-dismiss="alert"><i class="fa fa-times"></i></button><strong>An error occured.</strong></div>');
                }
            });
        }

    });

</script>

