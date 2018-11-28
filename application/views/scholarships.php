<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" href="<?php echo base_url('assets/img/ucsc.png'); ?>">
    <title>Program</title>
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/css/style.css" rel="stylesheet">
	 <link rel="stylesheet" type="text/css" href="../../assets/css/font-awesome.min.css" />
	 <link href="../../assets/css/animate.css" rel="stylesheet" type="text/css" media="all">
	 <link href="../../assets/css/ken-burns.css" rel="stylesheet" type="text/css" media="all" />
	 <link href="https://fonts.googleapis.com/css?family=Old+Standard+TT" rel="stylesheet">

   <script src="../../assets/js/jquery-2.1.1.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>

  </head>

<body>
<?php include 'header.php' ?>

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
                                    <li class="active_1"><a href="<?php echo base_url();?>index.php/scholarship/sch_mod">SCHOLARSHIPS</a></li>
                                    <li><a href="<?php echo base_url();?>index.php/Forum/view_forum">FORUM</a></li>

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


<?php
    foreach($records as $rec){
        echo '<section id="blog">
                <div class="blog_2">
                      <div class="ih-item square effect10 left_to_right">
                          <a href="forum.php">
                
                                      <div class="info">
                                          
                                        <h3>asdadada</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odionec odio. Praesent libero. 
                Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta.!
                                        </p>
                                          
                                      </div>
                          </a>
                      </div>
                      <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odionec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.Class aptent taciti sociosqu ad torquent per conubia nostra, per inceptos . Curabitursodales ligula in libero. Sed dignissim lacinia nunc.
                      </h5>
                 </div>
              
            </section>';
    }
?>


<?php include 'footer.php' ?>
<script src="js/classie.js"></script>
<script src="js/cbpAnimatedHeader.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
    $('#myCarousel').carousel({
	    interval: 10000
	})
});
	</script>
<script type="text/javascript">
	$(document).on('click', '.panel-heading span.icon_minim', function (e) {
    var $this = $(this);
    if (!$this.hasClass('panel-collapsed')) {
        $this.parents('.panel').find('.panel-body').slideUp();
        $this.addClass('panel-collapsed');
        $this.removeClass('glyphicon-minus').addClass('glyphicon-plus');
    } else {
        $this.parents('.panel').find('.panel-body').slideDown();
        $this.removeClass('panel-collapsed');
        $this.removeClass('glyphicon-plus').addClass('glyphicon-minus');
    }
});
$(document).on('focus', '.panel-footer input.chat_input', function (e) {
    var $this = $(this);
    if ($('#minim_chat_window').hasClass('panel-collapsed')) {
        $this.parents('.panel').find('.panel-body').slideDown();
        $('#minim_chat_window').removeClass('panel-collapsed');
        $('#minim_chat_window').removeClass('glyphicon-plus').addClass('glyphicon-minus');
    }
});
$(document).on('click', '#new_chat', function (e) {
    var size = $( ".chat-window:last-child" ).css("margin-left");
     size_total = parseInt(size) + 400;
    alert(size_total);
    var clone = $( "#chat_window_1" ).clone().appendTo( ".container" );
    clone.css("margin-left", size_total);
});
$(document).on('click', '.icon_close', function (e) {
    //$(this).parent().parent().parent().parent().remove();
    $( "#chat_window_1" ).remove();
});

	</script>	
</body>
</html>
