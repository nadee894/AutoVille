<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title">Comment Quick Edit</h4>
</div>
<form id="edit_review_form" name="edit_review_form" method="post">
    <div class="modal-body">

        <div class="form-group">
            <input type="hidden" id="review_id" name="review_id" value="<?php echo $review->id; ?>"
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

