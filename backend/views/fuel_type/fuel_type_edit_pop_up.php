<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title">Fuel Type Quick Edit</h4>
</div>
<form id="edit_fuel_type_form" name="edit_fuel_type_form">
    <div class="modal-body">

        <div class="form-group">
            <label for="name">Title</label>
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
            name: "Please enter a title"
        }, submitHandler: function(form)
        {
            $.post(site_url + '/fuel_type/edit_fuel_type', $('#edit_fuel_type_form').serialize(), function(msg)
            {
                if (msg == 1) {

                    window.location = site_url + '/fuel_type/manage_fuel_types';
                } else {

                }
            });


        }
    });
</script>

