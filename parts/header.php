<!DOCTYPE html>
<?php include("functions.php"); ?>
<html lang="de">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Entwicklung einer wissenschaftlichen Methode zur Forschung auf online verfügbaren und verteilten Forschungsdatenbanken der Universitätsgeschichte.">
    <meta name="author" content="Thomas Riechert">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

    <title>Forschungsprojekt - Professorale Karrieremuster der Frühen Neuzeit</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>

      .en { display: none}

    </style>

</head>

<body id="page-top" class="index">
<?php # get base file
if (basename($_SERVER["SCRIPT_FILENAME"], '.php')=="index") $base=""; else $base="/";
?> 
    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?php echo $base;?>#page-top"><span class="de">Forschungsprojekt</span><span class="en">Research Project</span> (PCP-on-Web)</a>
            </div>




            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="<?php echo $base;?>#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="<?php echo $base;?>#partner"><span class="de">Partner</span><span class="en">Partners</span></a>
                    </li>
                    <li class="page-scroll">
                        <a href="<?php echo $base;?>#projektziele"><span class="de">Projektziele</span><span class="en">Objectives</span></a>
                    </li>
                    <li class="page-scroll">
                        <a href="<?php echo $base;?>#portfolio">Portfolio</a>
                    </li>
					<li class="page-scroll">
                        <a href="<?php echo $base;?>#dataset">Dataset</a>
                    </li>
                    <li class="page-scroll">
                        <a href="<?php echo $base;?>#blog">Blog</a>
                    </li>
		    <li class="page-scroll">
                        <a href="<?php echo $base;?>#publikationen"><span class="de">Publikationen</span><span class="en">Publications</span></a></a>
                    </li>
                    <li class="page-scroll">
                        <a href="<?php echo $base;?>#kontakt"><span class="de">Kontakt</span><span class="en">Contact</span></a></a>
                    </li>
                    <li class="page-noscroll">
                        <a href="#en" class="switch de"><u>DE</u> - EN</a><a href="#de" class="switch en">DE - <u>EN</u></a>
                    </li>


                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!-- Logo Section -->

