<?php
session_start(); 
if(!isset($_SESSION['login']))
{
    
    header("location:../index.php");
}
include 'controller/c_area.php';
?>
<!doctype html>
<html lang="en">
 
<head>
  <?php include 'styles.php';?>
    <script type="text/javascript">
         function deleteid(id)
    {
      if(confirm("Do you want to delete this?"))
      {
        window.location.href='controller/c_area.php?did='+id;
    }
  }
    </script>
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
                        
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Admin</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Area</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div >

                        <div class="row">
                             <!-- responsive table -->
                        <!-- ============================================================== -->
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                 <div class="card-header">
                                <h5 class="mb-0">Area Details</h5>
                               
                            </div>
                                <h5 class="card-header"><a href="area.php" class="btn btn-primary btn-lg">
                                    <li class="fas fa-plus" title="Add Category" style="padding: 3px 3px 3px 3px;"></li> Add
                            
                                </a></h5>
                                <div class="card-body">
                                    <div class="table-responsive ">
                                        <table class="table">
                                            <thead>
                                               
                                                <tr>
                                                    <th>Sr.No</th>
                                                    <th>Area Name</th>
                                                    <th>Pincode</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php

                                                if(empty($mtable))
                                                {
                                                    ?>
                                                    <td>rocrd is empty</td>
                                                    <?php
                                                }
                                                else
                                                {
                                                $i=1;
                                                foreach($mtable as $s)
                                                {
                                                    ?>
                                                <tr>
                                                    <th scope="row"><?php echo $i;?></th>
                                                    <td><?php echo ucfirst($s->area_name);?></td>
                                                    <td><?php echo $s->pincode;?></td>
                                                    <td><a href="javascript:deleteid(<?php echo $s->area_id;?>); "><i class="fas fa-trash-alt" title="Delete category"></i></a>  || <a href="u_area.php?aid=<?php echo $s->area_id; ?>"><i class="fas fa-edit" title="edit category"></i></a></td></td>
                                                </tr>
                                               <?php
                                               $i++;
                                                }
                                            }
                                               ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            </div>
                        <!-- ============================================================== -->
                        <!-- end responsive table -->
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