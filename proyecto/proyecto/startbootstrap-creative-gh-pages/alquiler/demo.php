<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Table Quick Edit</title>
    <link href="css/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/css/font-awesome.min.css" rel="stylesheet">
    <style>
    .table.user-select-none {
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }
    </style>
</head>
<body onload="viewData()">
    
    <div class="container" style="margin-top:35px">
        <div class="row">
            <div class="col-md-12">
                <h4>Table Quick Edit &amp; CRUD</h4>
                <table id="mytable" class="table table-bordered table-striped">
                    <caption>
                        Click the table cells/buttons to edit.
                    </caption>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.tabledit.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script>
    function viewData(){
        $.ajax({
            url: 'demos/demos.php?p=view',
            method: 'GET'
        }).done(function(datas){
            $('tbody').html(datas)
            tableData()
        })
    }
    function tableData(){
    $('#mytable').Tabledit({
        url: 'demos/demos.php',
        eventType: 'click', //dblclick
        editButton: true,
        deleteButton: true,
        hideIdentifier: false,
        saveButton: true,
        autoFocus: true,
        restoreButton: true,
        rowIdentifier: 'id',
        buttons: {
            edit: {
                class: 'btn btn-sm btn-warning',
                html: '<span class="glyphicon glyphicon-pencil"></span> &nbsp Edit',
                action: 'edit'
            },
            delete: {
                class: 'btn btn-sm btn-danger',
                html: '<span class="glyphicon glyphicon-trash"></span> &nbsp Trash',
                action: 'delete'
            },
            save: {
                class: 'btn btn-sm btn-success',
                html: 'Save'
            },
            restore: {
                class: 'btn btn-sm btn-warning',
                html: '<span class="fa fa-undo"></span> Restore',
                action: 'restore'
            },
            confirm: {
                class: 'btn btn-sm btn-default',
                html: 'Are you sure?' //Confirm btn-danger
            }
        },
        columns: {
            identifier: [0, 'id'],
            editable: [[1, 'name'],[2, 'address'],[3, 'campo1'],[4, 'campo2'],[5, 'campo3'],[6, 'campo4'],[7, 'total']]
        },
        onSuccess: function(data, textStatus, jqXHR) {
            viewData()
        },
        onFail: function(jqXHR, textStatus, errorThrown) {
            console.log('onFail(jqXHR, textStatus, errorThrown)');
            console.log(jqXHR);
            console.log(textStatus);
            console.log(errorThrown);
        },
        onAjax: function(action, serialize) {
            console.log('onAjax(action, serialize)');
            console.log(action);
            console.log(serialize);
        }
    });
    }
    </script>
</body>
</html>