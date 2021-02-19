<?php include 'controller/c_stock.php';?>
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
                                <h2 class="pageheader-title">stock</h2>
                                <p class="pageheader-text"></p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Admin</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Stock</li>
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
                                    <h5 class="card-header">Stock</h5>
                                    <div class="card-body">
                                        <form method="post">
                                            <div class="form-group">  

                                                <div>
                                                        <label>product Name</label>
                                                            <select name="pname" class="form-control 

                                                            dropdown-item">
                                                                    <option class="dropdown-item active" value="select">--select--</option>
                                                            <?php foreach($product as $nalue) {
                                                        ?>          
                                                        <option value="<?php echo $nalue->p_id;?>"><?php echo $nalue->p_name;?></option>
                                                            <?php
                                                    }
                                                    ?>        
                                                        </select>
                                                <div style="color: red;"><?php echo $value; ?></div>          
                                                            
                                             </div>

                                                <label >Qty:</label>    
                                                <input  type="text" placeholder="" class="form-control" name="qty" value="<?php echo $qty; ?>">

                                                <div class="error" style="color: red;"><?php echo $val; ?> 
                                                </div>

                                        
                                        </div>            
                                            <button type="submit" class="btn btn-primary" name="sub">Submit
                                                </button>
                                            <button type="reset" class="btn btn-danger" onclick="history.back(-1)">Cancel</button>
                                            
                                        </form>
                                    </div>
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