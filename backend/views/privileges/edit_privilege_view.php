<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title">Privilege Quick Edit</h4>
</div>
<form id="edit_privilege_form" name="edit_privilege_form">
    <div class="modal-body">
        <div class="form-group">
            <label class="form-label">Master Privilege</label>
            <span style="color: red">*</span>
            <select name="master_privilege_code" id="master_privilege_code" class="select2 form-control"  >
                <?php foreach ($master_privileges as $master_privilege) {
                    ?> 
                    <option value="<?php echo $master_privilege->privilege_master_code; ?>" <?php if ($master_privilege->privilege_master_code == $privilege->privilege_master_code) { ?> selected="true" <?php } ?>><?php echo $master_privilege->master_privilege; ?></option>
                <?php } ?>
            </select>    
        </div>

        <div class="form-group">
            <label class="form-label">Privilege</label>
            <span style="color: red">*</span>
            <input id="privilege" class="form-control" type="text" name="privilege" value="<?php echo $privilege->privilege; ?>" onkeyup="auto_write_human_friendly_code()" style="width: 50%">                              
        </div>


        <div class="form-group">
            <label class="form-label">Privilege Description</label>
            <span style="color: red">*</span>

            <input id="privilege_desc" class="form-control" type="text" name="privilege_desc" value="<?php echo $privilege->privilege_description; ?>" style="width: 50%">                              
        </div>

        <div class="form-group">
            <label class="form-label">Human Friendly Privilege Code</label>
            <span style="color: red">*</span>

            <input id="privilege_hf" class="form-control" type="text" name="privilege_hf" value="<?php echo $privilege->priviledge_code_HF; ?>" style="width: 50%" readonly="true">                              
        </div>

        <div class="form-group">
            <label class="form-label">Assign For</label>
            <span style="color: red">*</span>

            <select name="assign_for" id="assign_for" class="select2 form-control" style="width: 50%" >
                <option value="1" <?php if ($this->config->item('ADMIN') == $privilege->assign_for) { ?> selected="true" <?php } ?>>Admin</option>
                <option value="2" <?php if ($this->config->item('COMPANY_OWNER') == $privilege->assign_for) { ?> selected="true" <?php } ?>>Company Owner</option>
                <option value="3" <?php if ($this->config->item('EMPLOYEE') == $privilege->assign_for) { ?> selected="true" <?php } ?>>Employee</option>
                <option value="4" <?php if ($this->config->item('ALL') == $privilege->assign_for) { ?> selected="true" <?php } ?>>All</option>

            </select>                               
        </div>
        <div id="rtn_msg_edit" class="form-row"> </div>
        <input type="hidden" id="privilege_code" name="privilege_code" value="<?php echo $privilege->privilege_code; ?>"/>
    </div>
    <div class="modal-footer">

        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
        <button class="btn btn-success" type="submit">Save changes</button>
    </div>
</form>

<script type="text/javascript">

//edit Privilege Form
    $('#edit_privilege_form').validate({
        rules: {
            master_privilege_code: {
                required: true
            },
            privilege: {
                required: true
            },
            privilege_desc: {
                required: true
            },
            privilege_hf: {
                required: true
            },
            assign_for: {
                required: true
            }

        }, submitHandler: function(form)
        {
            $.post(site_url + '/privilege/edit_privilege', $('#edit_privilege_form').serialize(), function(msg)
            {
                if (msg == 1) {
                    $('#rtn_msg_edit').html('<div class="alert alert-success fade in"><button class="close close-sm" type="button" data-dismiss="alert"><i class="fa fa-times"></i></button><strong>Successfully saved!!.</strong></div>');

                    window.location = site_url + '/privilege/manage_privileges';
                } else {
                    $('#rtn_msg_edit').html('<div class="alert alert-block alert-danger fade in"><button class="close close-sm" type="button" data-dismiss="alert"><i class="fa fa-times"></i></button><strong>An error occured.</strong></div>');
                }
            });
        }
    });
</script>