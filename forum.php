<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="./images/favicon.png" type="image/png" sizes="16x16">
<title>E-Scooter Rental | Forum</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<link href="assets/css/slick.css" rel="stylesheet">
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
		<link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"> 
</head>
<body>

<!-- Start Switcher -->
<?php include('includes/colorswitcher.php');?>
<!-- /Switcher -->  
        
<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header --> 

<!-- Modal -->
<div id="ReplyModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Reply Question</h4>
      </div>
      <div class="modal-body">
        <form name="frm1" method="post">
          <input type="hidden" id="commentid" name="Rcommentid">
          <div class="form-group">
            <label for="usr">Write your name:</label>
            <input type="text" class="form-control" name="Rname" required>
          </div>
          <div class="form-group">
            <label for="comment">Write your reply:</label>
            <textarea class="form-control" rows="5" name="Rmsg" required></textarea>
          </div>
          <input type="button" id="btnreply" name="btnreply" class="btn btn-primary" value="Reply">
        </form>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="panel panel-default" style="margin-top:50px">
    <div class="panel-body">
      <h3>Community forum</h3>
      <hr>
      <form name="frm" method="post">
        <input type="hidden" id="commentid" name="Pcommentid" value="0">
        <div class="form-group" data-aos="fade-left" data-aos-duration="1500">
          <label for="usr">Write your name:</label>
          <input type="text" class="form-control" name="name" required>
        </div>
        <div class="form-group" data-aos="fade-right" data-aos-duration="1500">
          <label for="comment">Write your question:</label>
          <textarea class="form-control" rows="5" name="msg" required></textarea>
        </div>
        <input type="button" id="butsave" name="save" class="btn btn-primary" value="Send">
      </form>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-body" data-aos="fade right" data-aos-duration="1000">
      <h4>Recent questions</h4>
      <table class="table" id="MyTable" style="background-color: #edfafa; border:0px;border-radius:10px">
        <tbody id="record">
          <!-- Comments will be loaded here by JavaScript -->
        </tbody>
      </table>
    </div>
  </div>
</div>

<script>
$(document).ready(function(){
    // Fetch and display comments on page load
    fetchComments();

    // Handle form submission
    $('#butsave').on('click', function() {
        var name = $("input[name='name']").val();
        var msg = $("textarea[name='msg']").val();
        var commentid = $("input[name='Pcommentid']").val();

        if(name != "" && msg != "") {
            $.ajax({
                url: "save.php",
                type: "POST",
                data: {name: name, msg: msg, commentid: commentid},
                success: function(data){
                    var result = JSON.parse(data);
                    if(result.status == 'success') {
                        fetchComments();
                        $("input[name='name']").val('');
                        $("textarea[name='msg']").val('');
                    }
                }
            });
        }
    });

    // Handle reply button click
    $('#btnreply').on('click', function() {
        var name = $("input[name='Rname']").val();
        var msg = $("textarea[name='Rmsg']").val();
        var commentid = $("input[name='Rcommentid']").val();

        if(name != "" && msg != "") {
            $.ajax({
                url: "save.php",
                type: "POST",
                data: {name: name, msg: msg, commentid: commentid},
                success: function(data){
                    var result = JSON.parse(data);
                    if(result.status == 'success') {
                        fetchComments();
                        $('#ReplyModal').modal('hide');
                        $("input[name='Rname']").val('');
                        $("textarea[name='Rmsg']").val('');
                    }
                }
            });
        }
    });

    // Fetch and display comments
    function fetchComments() {
        $.ajax({
            url: "view.php",
            type: "GET",
            success: function(data) {
                var comments = JSON.parse(data);
                var commentHtml = '';

                comments.forEach(function(comment) {
                    if(comment.parent_id == 0) {
                        commentHtml += '<tr><td><strong>' + comment.name + ':</strong> ' + comment.message + '</td><td><button class="btn btn-primary" onclick="replyComment(' + comment.id + ')">Reply</button></td></tr>';
                        comments.forEach(function(reply) {
                            if(reply.parent_id == comment.id) {
                                commentHtml += '<tr><td style="padding-left:30px"><strong>' + reply.name + ':</strong> ' + reply.message + '</td></tr>';
                            }
                        });
                    }
                });

                $('#record').html(commentHtml);
            }
        });
    }
});

function replyComment(commentId) {
    $('#commentid').val(commentId);
    $('#ReplyModal').modal('show');
}
</script>
<?php include('includes/footer.php');?>
<!-- /Footer--> 

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 

<!--Register-Form -->
<?php include('includes/registration.php');?>

<!--/Register-Form --> 

<!--Forgot-password-Form -->
<?php include('includes/forgotpassword.php');?>
<!--/Forgot-password-Form --> 

<!-- Scripts --> 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<!--Switcher-->
<script src="assets/switcher/js/switcher.js"></script>
<!--bootstrap-slider-JS--> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({});
    
  </script>
</body>
</html>
