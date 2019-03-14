<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Student Info</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Social Buttons CSS -->
    <link href="../../vendor/bootstrap-social/bootstrap-social.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

        <!-- Page Content -->
        <div id="page-wrapper">
        
            <div class="container-fluid">
                <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Students List</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Table
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Adm_No</th>
                                    			<th>Name</th>
                                    			<th>Class</th>
                                    			<th>Stream</th>
                                    			<th>View</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <!-- <tr class="gradeU">
                                        <td>2577</td>
                                        <td>Dennis Kipkemboi</td>
                                        <td>Form 4</td>
                                        <td>East</td>
                                        <td><a class="fa fa-chevron-circle-right btn btn-md btn-info"></a></td>
                                    </tr>
                                    <tr class="gradeU">
                                        <td>7654</td>
                                        <td>DennisKipkemboi</td>
                                        <td>Form 4</td>
                                        <td>East</td>
                                        <td><a class="fa fa-chevron-circle-right btn btn-md btn-info"></a></td>
                                    </tr> -->
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            <div class="well">
                                <h4>Class Information</h4>
                                
                                                          </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
                
            </div>
            <!-- /.container-fluid -->
        </div>     
        
        <!-- /#page-wrapper -->


    <!-- jQuery -->
    <script src="../../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../vendor/metisMenu/metisMenu.min.js"></script>
    <!-- DataTables JavaScript -->
    <script src="../../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../dist/js/sb-admin-2.js"></script>
    <script src="../../dist/js/student.js"></script>
    
        <script>
    $(document).ready(function() {
        
        // calls when the table is ready
        $('#dataTables-example').ready( function(){
            // gets records from the db
            $.get( "../../db/students/list.php")
            .done(function( student ) {
              data = $.parseJSON(student);
            // checks if there is any record found
              if(data){
                var t= $('#dataTables-example').DataTable();
                //loops through an array of records found.
                for(i=0;i<data.length;i++){
                    //adds the record to the table
                    t.row.add([
                        data[i].adm_no,
                        data[i].student_first_name + ' ' + data[i].student_last_name,
                        data[i].class,
                        data[i].stream,
                        '<a onclick="get_prof('+ data[i].adm_no +')" class="fa fa-chevron-circle-right btn btn-md btn-info btn-view-prof"></a>'
                    ]).draw(false);
                }
            }
          });
        });
        //initializes data table
        $('#dataTables-example').DataTable({
            responsive: true
        });
        

    });
    // gets student profile
    function get_prof(adm){
        alert(adm);
    }
    </script>



</body>

</html>