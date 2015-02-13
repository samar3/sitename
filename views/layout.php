<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">  
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Home</title>
</head>
<body data-spy="scroll" data-target=".navbar-example">
<section class="container">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                     data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
                <a class="navbar-brand" href="#">Site Name</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="home.php">Home<span class="sr-only">(current)</span></a></li>
                <li><a href="team.php">Teams</a></li>
                <li><a href="gallery.php">Galleries</a></li>
                <li><a href="service.php">Services</a></li>
                <li><a href="contact.php">Contacts</a></li>
                <li><a href="mainsetting.php">Mainsettings</a></li>
                <li><a href="section.php">Sections</a></li>
                <li><a href="slider.php">Sliders</a></li>
                <li><a href="admin.php">Admins</a></li>
            </ul>   
        </div>
        
    </nav>

    <div class="row">
        <?php include $view; ?>
    </div>
  

    <footer class="row">
        <div class="span3">
         <p>&copy; All Rights Recervied</p>
      </div>
    </footer>
      
    

</div>
</section>
</body>
</html>