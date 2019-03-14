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

<style type="text/css">
    
    .register-right{
        background: #f8f9fa;
        border-top-left-radius: 10% 50%;
        border-bottom-left-radius: 10% 50%;
    }
    
    .register-form{
        padding-left: 10%;
        padding-right: 10%;
        padding-top: 2%;
        /* margin-top: 10%; */
    }
    .register-heading{
        text-align: center;
        color: #495057;
    }
</style>
</head>

<body>

        <!-- Page Content -->
        <div id="page-wrapper">
        
            <div class="container-fluid">
                <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">New Student</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                    <div class="register-right register-form">
                        
                        <div class="row">
                            <div class="col-md-5">
                                <div class="panel panel-yellow">
                                    <div class="panel-heading">Personal Info</div>
                                    <div class="panel-body">

                                        <div class="form-group">
                                            <label for="Fname" class="cols-sm-2 control-label">First Name</label>
                                            <div class="cols-sm-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control" name="Fname" id="Fname"  placeholder="Enter First Name"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="Mname" class="cols-sm-2 control-label">Middle Name</label>
                                            <div class="cols-sm-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control" name="Mname" id="Mname"  placeholder="Enter Middle Name"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="Lname" class="cols-sm-2 control-label">Last Name</label>
                                            <div class="cols-sm-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control" name="Lname" id="Lname"  placeholder="Enter Last Name"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="gender" class="cols-sm-2 control-label">Gender</label>
                                            <div class="cols-sm-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                    <select type="number" class="form-control" name="gender" id="gender">
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="panel panel-green">
                                    <div class="panel-heading">School Info</div>
                                    <div class="panel-body">
    
                                        <div class="form-group">
                                            <label for="adm" class="cols-sm-2 control-label">Adm no</label>
                                            <div class="cols-sm-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-institution fa" aria-hidden="true"></i></span>
                                                    <input type="number" class="form-control" name="adm" id="adm"  placeholder="Enter Adm no"/>
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="form-group">
                                            <label for="doa" class="cols-sm-2 control-label">Date of Adm</label>
                                            <div class="cols-sm-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-institution fa" aria-hidden="true"></i></span>
                                                    <input type="date" class="form-control" name="doa" id="doa"  placeholder=""/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="class" class="cols-sm-2 control-label">Class</label>
                                            <div class="cols-sm-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-institution fa" aria-hidden="true"></i></span>
                                                    <select type="text" class="form-control" name="class" id="class"  placeholder=""></select>
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="form-group">
                                            <label for="dom" class="cols-sm-2 control-label">Boading</label>
                                            <div class="cols-sm-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-institution fa" aria-hidden="true"></i></span>
                                                    <select type="text" class="form-control" name="dom" id="dom"  placeholder=""></select>
                                                </div>
                                            </div>
                                        </div>
    
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                    <div class="panel panel-red">
                                        <div class="panel-heading">Contact Info</div>
                                        <div class="panel-body">
        
                                            <div class="form-group">
                                                <label for="Pphone" class="cols-sm-2 control-label">Primary phone</label>
                                                <div class="cols-sm-10">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" name="Pphone" id="Pphone"  placeholder="Enter Phone number"/>
                                                    </div>
                                                </div>
                                            </div>
        
                                            <div class="form-group">
                                                <label for="Sphone" class="cols-sm-2 control-label">Secondary Phone</label>
                                                <div class="cols-sm-10">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-phone-square fa" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" name="Sphone" id="Sphone"  placeholder="Enter secondary phone number"/>
                                                    </div>
                                                </div>
                                            </div>
        
                                            <div class="form-group">
                                                <label for="Pemail" class="cols-sm-2 control-label">Primary Email</label>
                                                <div class="cols-sm-10">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                                        <input type="mail" class="form-control" name="Pemail" id="Pemail"  placeholder="Enter primary Email"/>
                                                    </div>
                                                </div>
                                            </div>
        
                                            <div class="form-group">
                                                <label for="Semail" class="cols-sm-2 control-label">Secondary Email</label>
                                                <div class="cols-sm-10">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-envelope-o fa" aria-hidden="true"></i></span>
                                                        <input type="email" class="form-control" name="Semail" id="Semail"  placeholder="Enter secondary Email"/>
                                                    </div>
                                                </div>
                                            </div>
        
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-5">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">Other Info</div>
                                            <div class="panel-body">
            
                                                <div class="form-group">
                                                    <label for="dob" class="cols-sm-2 control-label">D.O.B</label>
                                                    <div class="cols-sm-10">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-tag fa" aria-hidden="true"></i></span>
                                                            <input type="Date" class="form-control" name="dob" id="dob"  placeholder=""/>
                                                        </div>
                                                    </div>
                                                </div>
            
                                                <div class="form-group">
                                                    <label for="home" class="cols-sm-2 control-label">Home</label>
                                                    <div class="cols-sm-10">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-home fa" aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control" name="home" id="home"  placeholder="Enter home ground"/>
                                                        </div>
                                                    </div>
                                                </div>
            
                                                <div class="form-group">
                                                    <label for="health" class="cols-sm-2 control-label">Health Problems</label>
                                                    <div class="cols-sm-10">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-medkit fa" aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control" name="health" id="health"  placeholder="Enter health problems"/>
                                                        </div>
                                                    </div>
                                                </div>
            
                                                <div class="form-group">
                                                    <label for="hobies" class="cols-sm-2 control-label">Curriculum Activities</label>
                                                    <div class="cols-sm-10">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-heart-o fa" aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control" name="hobies" id="hobies"  placeholder="Enter Curriculum Activities"/>
                                                        </div>
                                                    </div>
                                                </div>
            
                                            </div>
                                        </div>
                                    </div>
                        </div>
                </div>
                
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
    

</body>

</html>