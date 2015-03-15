<!-- page start-->
<section class="panel">
    <header class="panel-heading">
        All Advertisements
        <span class="pull-right">
            <button type="button" id="loading-btn" class="btn btn-warning btn-xs"><i class="fa fa-refresh"></i> Refresh</button>
            <a href="#" class=" btn btn-success btn-xs"> Create New Project</a>
        </span>
    </header>
    <div class="panel-body">
        <div class="row">

            <div class="col-md-12">
                <div class="input-group"><input type="text" placeholder="Search Here" class="input-sm form-control"> <span class="input-group-btn">
                        <button type="button" class="btn btn-sm btn-success"> Go!</button> </span></div>
            </div>
        </div>
    </div>
    <table class="table table-hover p-table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Transmission</th>
                <th>Fuel Type</th>
                <th>Body Type</th>
                <th>Color</th>
                <th>Price</th>
                <th>Active Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="p-name">
                    <a href="project_details.html">Toyota Prius N77 Model</a>
                    <br>
                    <small>Created 13.03.2015</small>
                </td>
                <td class="p-team">
                    Auto
                </td>
                <td class="p-team">
                    Petrol
                </td>
                <td class="p-team">
                    Body Type
                </td>
                <td class="p-team">
                    Red
                </td>
                <td class="p-progress">
                   Rs.56000000.00
                </td>
                <td>
                    <span class="label label-primary">Active</span>
                </td>
                <td>
                    <a href="project_details.html" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                    <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                </td>
            </tr>
            
        </tbody>
    </table>
</section>
<!-- page end-->


<!-- active selected menu -->

<script type="text/javascript">
    $('#advertisements_menu').addClass('active');
</script>