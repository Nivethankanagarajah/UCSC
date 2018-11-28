

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UCSC STUDENT WELFARE SYSTEM</title>
    <link rel="icon" href="<?php echo base_url('assets/img/ucsc.png'); ?>">
    <link href="<?php echo base_url()."assets/";?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()."assets/";?>css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/";?>css/font-awesome.min.css" />
    <link href="<?php echo base_url()."assets/";?>css/animate.css" rel="stylesheet" type="text/css" media="all">
    <link href="<?php echo base_url()."assets/";?>css/ken-burns.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo base_url()."assets/";?>https://fonts.googleapis.com/css?family=Old+Standard+TT" rel="stylesheet">

    <script src="<?php echo base_url()."assets/";?>js/jquery-2.1.1.min.js"></script>
    <script src="<?php echo base_url()."assets/";?>js/bootstrap.min.js"></script>

</head>

<body>





<?php include 'header.php'; ?>
<section id="header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <div class="header_1">
                        <nav class="navbar navbar-default" role="navigation">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                                </button>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li ><a href="<?php echo base_url();?>index.php">HOME</a></li>
                                    <li><a href="<?php echo base_url();?>index.php/Scholarship/sch_mod">SCHOLARSHIPS</a></li>
                                    <li class="active_1"><a href="<?php echo base_url();?>index.php/Forum/view_forum">FORUM</a></li>

                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
    </div>
</section>



<h3 class="my-4 text-center" ><b>Reply</b></h3>
<div class="container"style="padding-top: 30px" >

    <div class="container" style="background-color: #b8b6d8; font-size: large">

<h4 style="padding: 10px"><b><?php echo $question['title'] ?></b></h4>
    <div>
        <p style="padding: 20px"> <?php echo $question['question']; ?> </p>
    <strong> Asked by </strong><p ><?php echo $question['student_name']; ?> </p>
        <p><?php echo $question['time'] ?></p>
    </div>
        <br>
    </div>

<form method="post" action="<?php echo base_url('index.php/Forum/add_reply'); ?>"
    <div class="form-group">
        <label for="txt_msg">Text your reply here</label>
        <textarea name="reply" class="form-control"  style="width: 100%; height: 150px;"></textarea>

        <label> Admin id</label>
        <input type="txt" class="form-control" name="a_id" style="width: 100px">

        <label> Question id</label>
        <input type="txt" class="form-control" name="q_id" style="width: 100px">

        <br>
        <input type="submit" class="btn btn-danger" >
<!--        <a href="--><?php //echo base_url('index.php/Forum/view_forum')?><!--" class="btn btn-danger"><i class="fas fa-plus-circle"></i> Post Reply</a>-->
    </div>




</form>




</div>
</div>
<br><br>
</body>