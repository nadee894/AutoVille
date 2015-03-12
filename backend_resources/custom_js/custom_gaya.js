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
            }
        });
});

