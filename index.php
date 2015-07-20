<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Digest Newsletter Generator</title>

 
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    

    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
	body {
  padding-top: 50px;
}
.starter-template {
  padding: 40px 15px;
  text-align: center;
}

* {
  .border-radius(0) !important;
}

#field {
    margin-bottom:20px;
}

.entry:not(:first-of-type)
{
    margin-top: 10px;
}

.glyphicon
{
    font-size: 12px;
}

	</style>
    
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><i class="fa fa-envelope"></i> Digest Email Generator v1.0 Beta</a>
        </div>
        <div class="collapse navbar-collapse">
         
        </div><!--/.nav-collapse -->
      </div>
    </div>

 <div class="container">

      <div class="starter-template">
        <h1>Digest Email Generator</h1>
        <p class="lead">Enter post URL's below to create a Digest Newsletter. </p> 
		
  </div>
  
  <div class="container">
	<div class="row">
        <div class="control-group" id="fields">
           
            <div class="controls"> 
                <form role="form" action="build.php" method="post" autocomplete="off">
				   <div class="form-group">
				   <div class="entry input-group col-lg-8 col-lg-offset-2">
                        <input class="form-control" name="header" type="text" placeholder="Name your Newsletter" />
				   </div>
				   </div>
                   <div class="form-group" id="inputs">
				   <div class="entry input-group col-lg-8 col-lg-offset-2">
                        <input class="form-control" name="item[]" type="text" placeholder="Enter Post URL" />
                    	<span class="input-group-btn">
                            <button class="btn btn-success btn-add" type="button">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>
                        </span>						 
                    </div>					
			</div>
					
					 <button type="submit" class="btn btn-lg btn-success col-lg-2 col-lg-offset-5"><i class="fa fa-thumbs-o-up"></i> Let's Do This</button>
					
                </form>
           
      
            </div>
        </div>
	</div>
</div>  
        
</div>
      
   </div><!-- /.container -->



   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script>
	$(function()
{
    $(document).on('click', '.btn-add', function(e)
    {
  
		e.preventDefault();

        var controlForm = $('#inputs'),
            currentEntry = $(this).parents('.entry:first'),
            newEntry = $(currentEntry.clone()).appendTo(controlForm);

        newEntry.find('input').val('');
        controlForm.find('.entry:not(:last) .btn-add')
            .removeClass('btn-add').addClass('btn-remove')
            .removeClass('btn-success').addClass('btn-danger')
            .html('<span class="glyphicon glyphicon-minus"></span>');
    }).on('click', '.btn-remove', function(e)
    {
		$(this).parents('.entry:first').remove();
		
		e.preventDefault();
		return false;
	});
});

$('.btn-add').click(function(){

$("input.form-control").attr("placeholder", "Paste Post URL");

});



</script>
   
  </body>
</html>
