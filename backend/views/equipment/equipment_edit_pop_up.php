<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title">Equipment Quick Edit</h4>
</div>
<form id="edit_equipment_form" name="edit_equipment_form">
    <div class="modal-body">

        <div class="form-group">
            <label for="name">Title</label>
            <input id="name" class="form-control" name="name" type="text" value="<?php echo $equipment->name; ?>">
            <input id="equipment_id"  name="equipment_id" type="hidden" value="<?php echo $equipment->id; ?>">
        </div>
    </div>
    <div class="modal-footer">
        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>        
        <button class="btn btn-success" type="submit">Save changes</button>
    </div>
</form>

<script type="text/javascript">
    
    $("#edit_equipment_form").validate({
        rules :{
            name: "required"
        },
        messages: {
            name: "Please enter a title"
        }, submitHandler : function (form){
            
            $.post(site_url + '/equipment/edit_equipment', $('#edit_equipment_form').serialize(), function(msg)
            {
                if (msg == 1) {
                    window.location = site_url + '/equipment/manage_equipment';
                } else {
                    alert("error occured");
                }
            });
        }
                
    });

</script>