<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title">Add New Transmission</h4>
</div>
<form id="add_transmission_form" name="add_transmission_form">
    <div class="modal-body">

        <div class="form-group">
            <label for="name">Title</label>
            <input id="name" class="form-control" name="name" type="text" value="<?php echo $transmission->name;?>">
            <input id="transmission_id"  name="transmission_id" type="hidden" value="<?php echo $transmission->id;?>">
        </div>
    </div>
    <div class="modal-footer">
        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
        <button class="btn btn-success" type="submit">Save changes</button>
    </div>
</form>