<html>
    <head>
        <title>ciBlog</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
        <script src="http://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary ">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo base_url(); ?>">ciBlog</a>
            </div>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>posts">Blog</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <a class="nav-link" href="<?php echo base_url(); ?>posts/create">Create Post</a>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        
