<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light"> <a class="navbar-brand" href="<?php echo base_url();?>">Navbar</a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active"> <a class="nav-link" href="<?php echo base_url();?>">Home <span class="sr-only">(current)</span></a> </li>
            <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>users/register">Register</a> </li>
            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Dropdown
</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div> <a class="dropdown-item" href="#">Something else here</a> </div>
            </li>
            <li class="nav-item"> <a class="nav-link disabled" href="#">Disabled</a> </li>
        </ul>
    </div>
</nav>

    <div class="container">
        <div class="row">
            <div class="col-xs-4">
                <?php $this->load->view('users/login_view');?>
            </div>
            <div class="col-xs-7">
                <?php $this->load->view($main_view);?>
            </div>
        </div>
    </div>
</body>
</html>