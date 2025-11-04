<?php
include_once("databaseconnection.php");
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-XJMN793VCY"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-XJMN793VCY');
</script>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="https://dilsecodie.com/index.php">

	
<meta property="og:site_name" content="Dilse Codie">

<meta property="og:url" content="https://dilsecodie.com">
<meta property="og:type" content="education">
<meta itemprop="name" content="dilse Codie">
<meta itemprop="url" content="https://dilsecodie.com">
<meta name="keywords" content="dilsecodie,cloud,cloud computing, java, core,AI,ai,hr,python,bank,fd,rd,api,rest,code,project,companies,interview">
<meta name="description" content="Spring, Free Online, Dilsecodie provides code syntax , java code, cloud computing,
android, java frameworks, javascript, ajax,spring boot,microservices
,oracle database info, sql, python, php,bank,fd,rd">
<meta name="author" content="http://dilsecodie.com">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">



<meta name="google-site-verification" content="Qz0dVd5nxe4xl75XP5Nc75Keo-dtO4UqwOUMQxHEP5o">
<title>Dilsecodie</title>

	<link rel="shortcut icon" type="image/x-icon" href="https://dilsecodie.com/index.php">
	<link rel="apple-touch-icon" href="https://dilsecodie.com/index.php">
	<link href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900,300italic,400italic|Montserrat:100,200,300,400,500,600,700,800,900,300italic,400italic|PT+Sans:100,200,300,400,500,600,700,800,900,300italic,400italic|Ubuntu:100,200,300,400,500,600,700,800,900,300italic,400italic&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">
<link rel="dns-prefetch" href="//maps.googleapis.com">
<link rel="dns-prefetch" href="//fonts.googleapis.com">
<link rel="dns-prefetch" href="//s.w.org">
<link rel="alternate" type="application/rss+xml" title="dilse Codie » Java" href="https://dilsecodie.com/index.php">
<link rel="alternate" type="application/rss+xml" title="dilse Codie » Java  Coding" href="https://dilsecodie.com/index.php">
<link rel="alternate" type="application/rss+xml" title="dilse Codie » Home  Tutorials" href="https://dilsecodie.com/index.php">

<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<!-- animate -->
<link rel="stylesheet" type="text/css" href="css/animate.css">

<!-- owl-carousel -->
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">

<!-- fontawesome -->
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">

<!-- themify -->
<link rel="stylesheet" type="text/css" href="css/themify-icons.css">

<!-- flaticon -->
<link rel="stylesheet" type="text/css" href="css/flaticon.css">

<!-- prettyphoto -->
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">

<!-- shortcodes -->
<link rel="stylesheet" type="text/css" href="css/shortcodes.css">

<!-- main -->
<link rel="stylesheet" type="text/css" href="css/main.css">

<!-- responsive -->
<link rel="stylesheet" type="text/css" href="css/responsive.css">

<link rel="canonical" href="https://dilsecodie.com/index.php" />
</head>

<body>

    <!--page start-->
    <div class="page">

       
        <!--header start-->
        <?php include('header.php');  ?>
        <!-- page-title -->
        <div style="" class="bg-img1 ttm-page-title-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12"> 
                        <div class="title-box ttm-textcolor-white">
                             
                            <div class="breadcrumb-wrapper">
                                 <div class="">
								 <h2 style="text-align: center;" class="title"> Search best Education Repository</h2>
                                        <form id="subscribe-form" class="newsletter-form" method="post" action="searchdata.php" data-mailchimp="true">
                                            <div class="mailchimp-inputbox clearfix" id="subscribe-content">
                                                <i class="ti ti-search"></i>
                                                <input style="padding-left: 42px;" autocomplete="off" class="textSearch" type="text" name="searchdata" placeholder="" >
                                                <input type="submit" value="SUBMIT">
                                            </div>
                                            <div id="subscribe-msg"></div>
                                        </form>
                                    </div>
                                
                            </div>  
                        </div>
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- page-title end-->

    <!--site-main start-->
    <div class="site-main">

        <div class="section-title text-center with-desc ">
                            <div class="title-header">
                            
                                <h2 class="title">Discover best Education material from <span style="color: #fdb726;">#dilsecodie</span></h2>
                            </div>
                        </div>
        <section class="project-style2-section clearfix">
            <div class="container">
                <div class="row">
                <?php



try {
   
    $stmt = $conn->prepare("SELECT * FROM mainsubject");
    $stmt->execute();
  
    // set the resulting array to associative
    while ($row = $stmt->fetch()) {
    $nameofsub = $row["nameofsub"]; 
	$imagepath = $row["imagepath"];
    $id = $row["id"];
   
?>
                    <div class="col-md-3">
                        <!-- featured-imagebox -->
                        <div class="featured-imagebox featured-imagebox-portfolio ttm-box-view-top-image">
                            <div style="box-shadow: 0 0 15px 0 rgb(32 46 60 / 12%);padding: 10px;" class="ttm-box-view-content-inner">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail">
                               
                                    <a href="subcategorypro.php?subcategories=<?php echo $row["id"]; ?>"> 
                                    <?php
                                  if($imagepath == null){
                                ?>
                                        <img class="img-fluid" src="https://placehold.jp/360x270.png" alt="image"></a>

                                <?php
                                  }else{
                                ?>
 <img class="img-fluid" src="images/mainsubject/<?php echo $imagepath; ?>" alt="image"></a>

                                <?php
                                  }
                                ?>
                                </div><!-- featured-thumbnail end-->
                                <!-- ttm-box-view-overlay -->
                                
                            </div>
                            <div class="featured-content featured-content-portfolio text-center box-shadow2">
                                <div class="featured-title">
                                    <h5><a href="subcategorypro.php?subcategories=<?php echo $row["id"]; ?>"><?php echo $nameofsub;?></a></h5>
                                </div>
                            </div>
                        </div><!-- featured-imagebox -->
                    </div>
					<?php
 }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
                      ?> 

                </div>
            </div>
        </section>
        <!-- faq-section end -->
        
    </div><!--site-main end-->

    <!--footer start-->
    <?php include('footer.php');  ?>
    <!--footer end-->

    <!--back-to-top start-->
    <a id="totop" href="#top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--back-to-top end-->

</div><!-- page end -->


    <!-- Javascript -->

    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.js"></script>    
    <script src="js/jquery-waypoints.js"></script>    
    <script src="js/jquery-validate.js"></script> 
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/numinate.min.js?ver=4.9.3"></script>
    <script src="js/main.js"></script>
    <script src="js/chart.js"></script>

    <!-- Javascript end-->

</body> 
</html>