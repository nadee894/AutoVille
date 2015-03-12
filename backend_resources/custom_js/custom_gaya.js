$(document).ready(function() {

    $('#transmission_table').dataTable({
        "aaSorting": [[4, "desc"]]
    });


    $("#add_transmission_form").validate({
        rules: {
            name: "required"
        },
        messages: {
            name: "Please enter a title"
        }, submitHandler: function(form)
        {
            $.post(site_url + '/transmission/add_transmission', $('#add_transmission_form').serialize(), function(msg)
            {
                if (msg == 1) {
                    $("#add_project_msg").html('<div class="alert alert-success"><button class="close" data-dismiss="alert"></button>Success: The <a class="link" >project </a>has been added.</div>');
                    add_project_form.reset();
                    window.location = site_url + '/project/project_controller/manage_projects';
                } else {
                    $("#add_project_msg").html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button>Error: The <a class="link" href="#">project </a>has failed.</div>');
                }
            });


        }
    });
});

