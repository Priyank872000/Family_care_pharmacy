<?php include 'controller/c_purchase_details.php';?>
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
        <?php include 'navbar.php';?>
        <?php include 'sidebar.php';?>
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Product Details</h2>
                                <p class="pageheader-text"></p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">E-Commerce Dashboard Template</li>
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

                        <div class="row">
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Product Details</h5>
                                    <div class="card-body">
                                        <form method="post">
                                           
                                            <div class="form-group">   
                                                <label >Supliername</label>
                                                <select class="form-control dropdown-item" name="upsname" style="border:1px solid #d2d2e4; ">
                                                    <option class="dropdown-item active" value="select">--Select--</option>
                                                    
                                                            <?php 
                                                        foreach ($sup as $nalue) {
                                                            ?>
                                                        <option value="<?php echo $nalue->sup_id;?>"
                                                            >
                                                                <?php echo $nalue->sup_name; ?>
                                                        </option> 
                                                        <?php           
                                                        }
                                                        ?>
                                                        
                                                    
                                                </select>
                                                <div class="error" style="color: red;"><?php echo $err1; ?></div>
                                               </div>
                                            <div class="form-group">   
                                                <label >Purchase Name</label>
                                                              <input  type="text"  name="uppname" class="form-control" value="<?php echo $selv->pur_name;?>">
                                                              <div class="error" style="color: red;"><?php echo $err2; ?>
                                                          </div>
                                            </div>
                                                 <div class="form-group">   
                                                <label >Decription:</label>
                                                              <input  type="text" placeholder="" 
                                                              class="form-control" name="updecrip" value="<?php echo $selv->description;?>"/>
                                                <div class="error" style="color: red;"><?php echo $err3; ?></div>
                                            </div>
                                            <div class="form-group">   
                                                <label >Date of Purchase:</label>
                                                              <input  type="date" placeholder="" class="form-control" name="uppdate" value="<?php echo $selv->date_purchase;?>"  />
                                                <div class="error" style="color: red;"><?php echo $err4; ?></div>
                                               </div>
                                       

                                           
                                            <div align="center">
                                   <button type="submit" class="btn btn-primary" name="upsub">Submit</button>
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