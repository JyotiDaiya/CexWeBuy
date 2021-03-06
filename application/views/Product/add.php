<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>srtdash - ICO Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/metisMenu.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/typography.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/default-css.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="<?php echo base_url(); ?>/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <div class="page-container">
        <?php $this->load->view('sidebar'); ?>
        <!-- main content area start -->
        <div class="main-content">
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Category</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><span>Add</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Admin <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <!-- sales report area start -->
                <div class="sales-report-area mt-5 mb-5">
                    <div class="row">
                        
                    </div>
                </div>
                <!-- market value area end -->
                <!-- row area start -->
                <div class="row">
                    <div class="col-lg-6 col-ml-12">
                        <div class="row">
                            <!-- Textual inputs start -->
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <?php echo form_open('Product/submit');?>

                                            <h4 class="header-title">Add Product</h4>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-form-label">title</label>
                                                <input class="form-control" type="text" id="title" name="title">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-form-label">Description</label>
                                                <input class="form-control" type="text" id="description" name="description">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-form-label">Category</label>
                                                <select id="category_id" name="category_id">
                                                    <?php
                                                        foreach ($categoryData as $category) {
                                                            ?>
                                                            <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                                                            <?php
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-form-label">Image</label>
                                                <input class="form-control" type="text" id="image" name="image">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-form-label">Price</label>
                                                <input class="form-control" type="text" id="price" name="price">
                                            </div>
                                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                                        <?php echo form_close(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>?? Copyright 2018. All right reserved. Template by <a href="https://colorlib.com/wp/">Colorlib</a>.</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- jquery latest version -->
    <script src="<?php echo base_url(); ?>/assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="<?php echo base_url(); ?>/assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/metisMenu.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="<?php echo base_url(); ?>/assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="<?php echo base_url(); ?>/assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="<?php echo base_url(); ?>/assets/js/plugins.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/scripts.js"></script>
</body>

</html>