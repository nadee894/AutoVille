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
  
                    add_transmission_form.reset();
                    window.location = site_url + '/transmission/manage_transmissions';
                } else {
                    
                }
            });


        }
    });
});

