<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Source Code</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/css/bootstrap.min.css'?>">
    <!-- MetisMenu CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/css/MetisMenu.min.css'?>">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/css/sb-admin-2.css'?>">
    <!-- Custom Fonts -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/font-awesome/css/font-awesome.min.css'?>">
    <!-- data tables bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/bootstrap-datatables.css'?>">
    <!-- my css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/css/mystyle.css'?>"> 

    <!-- jQuery Version 1.11.0 -->
    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery-1.11.0.js'?>"></script>
    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.min.js'?>"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/metisMenu.min.js'?>"></script>
    <!-- Custom Theme JavaScript -->
    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/sb-admin-2.js'?>"></script>
    <!-- Jquery validation -->
    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/jQuery.validate.js'?>"></script>
    <!-- data tables js -->
    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery.dataTables.min.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/dataTables.tableTools.min.js'?>"></script>

</head>

<body>
    <script>
    $.ajaxSetup({
       beforeSend: function() {
        $('#general-ajax-load ').fadeIn();
    },complete: function() {
        $('#general-ajax-load ').fadeOut();
    },success: function() {
        $('#general-ajax-load ').fadeOut();
    }
});    </script>

