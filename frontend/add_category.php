<?php require_once '../lib/_header.php'; ?>

<div class="span9">
    <div class="content">
        <div class="module">
            <div class="module-head">
                <h3>Add Category</h3>
            </div>
            <div class="module-body">
                <form class="form-horizontal row-fluid">
                    <div class="control-group">
                        <label class="control-label">Category Name</label>
                        <div class="controls">
                            <input type="text" placeholder="Type Category Name here..." class="span8">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <input type="submit" value="Save" class="btn btn-success">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="span9">
    <div class="content">
        <div class="module">
            <div class="module-head">
                <h3>Manage Category</h3>
            </div>
            <div class="module-body table">
                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
                    <thead>
                    <tr>
                        <th>SL.</th>
                        <th>Category Name</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="odd gradeX">
                        <td>1</td>
                        <td>Book</td>
                        <td>
                            <a class="btn btn-small btn-danger">Delete</a> <a class="btn btn-small btn-info">Edit</a>
                        </td>
                    </tr>
                    <tr class="odd gradeX">
                        <td>2</td>
                        <td>Apple</td>
                        <td>
                            <a class="btn btn-small btn-danger">Delete</a> <a class="btn btn-small btn-info">Edit</a>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.datatable-1').dataTable();
        $('.dataTables_paginate').addClass("btn-group datatable-pagination");
        $('.dataTables_paginate > a').wrapInner('<span />');
        $('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
        $('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
    } );
</script>
<?php require_once '../lib/_footer.php'; ?>
