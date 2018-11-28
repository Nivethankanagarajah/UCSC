
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

<div class="container">

    <h1 class="my-4"> Ask your Question </h1>
    <br>
<div class="container">

    <div class="my-4 text-right"></div>
    <?php

    if(!empty($questions)) {

        foreach ($questions as $quest) {

            $qid=$quest->question_id;
            echo '<div class="row">';

            echo '<div class="my-4">';
            echo "<h2 style='text-underline: black'>";
            echo "Question";
            echo "</h2>";
            echo '<h3>';
            echo $quest->quest_title;
            echo '</h3>';
            echo "<p> $quest->question </p>";

            echo '<br>';
            echo  "<p align='right'>By: $quest->student_name</p>";
            echo "<div class=\"text-right\">";
            echo "<a  class=\"btn btn-danger\" href=\"";
            echo base_url('index.php/Forum/full_quest');
            echo "?id=$quest->question_id\"";
            echo ">Reply</a>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "<br><hr>";
            foreach ($replies as $reply){
                $rid=$reply->q_id;
                if($rid==$qid){

                    echo '<div class="row">';
                    echo '<div class="my-4 text-right">';
                    echo '<h3>';
                    echo 'Reply';
                    echo '</h3>';
                    echo $reply->answer;
                    echo '<br>';
                    echo "<p>$reply->time</p>";
                    echo '</div>';
                    echo '</div>';


                }

            }

        }

    }

    ?>
</div>

    <hr>

</div>