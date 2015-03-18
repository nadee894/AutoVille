<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                Manage Privileges
                <span class="tools pull-right">
                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                    <a href="javascript:;" class="fa fa-times"></a>
                </span>
            </header>
            <div class="panel-body">
                <div class="adv-table">
                    <div class="clearfix">
                        <div class="btn-group">
                            <a id="editable-sample_new" class="btn btn-shadow btn-primary" href="#transmission_add_modal" data-toggle="modal">
                                Add New
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                    </div>
                    <table class="display table table-bordered table-striped" id="privilege_table" >
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Master Privilege</th>
                                <th>Privilege</th>
                                <th>Human Friendly Code</th>
                                <th>Assign For</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($privileges as $privilege) {
                                ?> 
                                <tr  id="privileges_<?php echo $privilege->privilege_code; ?>">
                                    <td><?php echo $privilege->privilege_code; ?></td>
                                    <td><?php echo $privilege->master_privilege; ?></td>
                                    <td><?php echo $privilege->privilege; ?></td>
                                    <td><?php echo $privilege->priviledge_code_HF; ?></td>
                                    <td>
                                        <?php if ($this->config->item('ADMIN') == $privilege->assign_for) { ?> 
                                            <span class="label label-important">Admin</span>
                                        <?php } else if ($this->config->item('COMPANY_OWNER') == $privilege->assign_for) { ?>
                                            <span class="label label-important">Company Owner</span>
                                        <?php } else if ($this->config->item('EMPLOYEE') == $privilege->assign_for) { ?>
                                            <span class="label label-important">Employee</span>
                                        <?php } else { ?>
                                            <span class="label label-important">All</span>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary btn-xs" href="<?php echo site_url(); ?>/settings/privilege_controller/edit_privileges_view/<?php echo $privilege->privilege_code; ?>">
                                            <i class="fa fa-pencil"  data-original-title="Update"></i>
                                        </a>
                                        <a class="btn btn-danger btn-xs"   title="Delete this Privilege" onclick="delete_privilege(<?php echo $privilege->privilege_code; ?>)">
                                            <i class="fa fa-trash-o " title="" data-original-title="Remove"></i>
                                        </a>

                                    </td>
                                </tr>
                            <?php } ?>    
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="add_privilege_modal" tabindex="-1" role="dialog" aria-labelledby="add_privilege_modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Add New Privilege</h4>
            </div>
            <form id="add_privilege_form" name="add_privilege_form">
                <div class="modal-body">
                    <div class="row form-row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="form-label">Master Privilege</label>
                                <span style="color: red">*</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-with-icon  right">                                       
                                <i class=""></i>
                                <select name="master_privilege_code" id="master_privilege_code" class="select2 form-control"  >
                                    <?php foreach ($master_privileges as $master_privilege) {
                                        ?> 
                                        <option value="<?php echo $master_privilege->privilege_master_code; ?>"><?php echo $master_privilege->master_privilege; ?></option>
                                    <?php } ?>
                                </select>                               
                            </div>
                        </div>
                    </div>
                    <div class="row form-row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="form-label">Privilege</label>
                                <span style="color: red">*</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-with-icon  right">                                       
                                <i class=""></i>
                                <input id="privilege" class="form-control" type="text" name="privilege" onkeyup="auto_write_human_friendly_code()">                              
                            </div>
                        </div>
                    </div>
                    <div class="row form-row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="form-label">Privilege Description</label>
                                <span style="color: red">*</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-with-icon  right">                                       
                                <i class=""></i>
                                <input id="privilege_desc" class="form-control" type="text" name="privilege_desc">                              
                            </div>
                        </div>
                    </div>
                    <div class="row form-row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="form-label">Human Friendly Privilege Code</label>
                                <span style="color: red">*</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-with-icon  right">                                       
                                <i class=""></i>
                                <input id="privilege_hf" class="form-control" type="text" name="privilege_hf" readonly="true">                              
                            </div>
                        </div>
                    </div>

                    <div class="row form-row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="form-label">Assign For</label>
                                <span style="color: red">*</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-with-icon  right">                                       
                                <i class=""></i>
                                <select name="assign_for" id="assign_for" class="select2 form-control"  >
                                    <option value="1">Admin</option>
                                    <option value="2">Company Owner</option>
                                    <option value="3">Employee</option>
                                    <option value="4">All</option>

                                </select>                              
                            </div>
                        </div>
                    </div>

                </div>
                <div id="add_privilege_msg" class="form-row"> </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                </div>

            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<script type="text/javascript">
                                        $('#settings_parent_menu').addClass('active open');
</script>