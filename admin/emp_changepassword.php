<?php include 'controller/c_emp_changepassword.php';?>
<!doctype html>
<html lang="en">
<head>
  <?php include 'styles.php';?>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <?php include 'emp_nav.php';?>
         <?php include 'emp_sidebar.php';?>
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper" >
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Employee panel</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">change password</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">

                        <div class="row"    >
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 col-12" >
                                <div class="card">
                                    <h5 class="card-header">Change Password</h5>
                                    <div class="card-body">
                                        <form method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                            <label>Old password:</label>
                                                              <input  type="password" placeholder="" class="form-control" name="opas" value="<?php echo $opas;?>"/>
                                                <div class="error" style="color: red;"><?php echo $val1; ?></div>
                                            </div>   
                                                
                                            <div class="form-group">   
                                                <label>New password</label>
                                                              <input  type="password" placeholder="" class="form-control" name="npas" value="<?php echo $npas;?>"/>
                                                <div class="error" style="color: red;"><?php echo $val2; ?></div>
                                            </div>

                                            <div class="form-group">   
                                                <label>Conform password</label>
                                                              <input  type="password" placeholder="" class="form-control" name="n2pas" value="<?php echo $n2pas;?>"/>
                                                <div class="error" style="color: red;"><?php echo $val3; ?></div>
                                            </div>
                                            <div align="center">
                        <button type="submit" class="btn btn-primary" name="sub">Submit</button>
                                    <button type="reset" class="btn btn-danger" onclick="history.back(-1)">Cancel</button>
                                </div>

                             </div>

                         </div>
                    </form>
                                   
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
           <?php include 'footer.php';?>
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
   <?php include 'scripts.php';?>
</body>
 
</html>