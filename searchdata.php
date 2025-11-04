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

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '283118113795902');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=283118113795902&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:site_name" content="DilseCodie">

<meta property="og:url" content="https://dilsecodie.com">
<meta property="og:type" content="education">
<meta property="og:title" content="Aboutus Dilsecodie(Developers Repository)">
<meta property="og:description" content="This page search result ,Struggle of coders,developers,engineers,software experts,education ,repositories , teachers,industrialist,school,acdemic">
<meta itemprop="name" content="dilse Codie">
<meta itemprop="url" content="https://dilsecodie.com">
<meta name="keywords" content="dilsecodie,cloud,cloud computing, java, core,AI,ai,hr,python,bank,fd,rd,api,rest,code,project,companies,interview,sap,android,php,javascript,jquery,mobile,ecommerce,excel,pdf,nlp,resume,data,acdemic">
<meta name="description" content="get java code , get testing ,why python use , what is java , Best website for developer , get quality code , where to find all coding , what is use of selenium
,how to make bot , what is AI , search coding , where to learns aws , what is server , what is database , best development centre , what is vps , from where to get cloud , best cloud code , best cloud coding
, what is microsoft azure  , interview questions and answers for freshers , how to get jobs , what to study in 2022 , treading technology , best tatorials , education , where to find expert solutions,
banks details info , what is cloud system , what is microservices , what is spring boot , which programming language should i learn , which programming language should i learn first as a beginner
, which programming language should i learn first as a beginner in india ,what is the best programming language to learn first">
<meta name="author" content="http://dilsecodie.com">

<meta name="google-site-verification" content="Qz0dVd5nxe4xl75XP5Nc75Keo-dtO4UqwOUMQxHEP5o">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>where to find all programming languages in one day</title>
 	<link rel="shortcut icon" type="image/x-icon" href="https://dilsecodie.com/index.php">
	<link rel="apple-touch-icon" href="https://dilsecodie.com/index.php">
  <link rel="dns-prefetch" href="//maps.googleapis.com">
<link rel="dns-prefetch" href="//fonts.googleapis.com">
<link rel="dns-prefetch" href="//s.w.org">
<link rel="alternate" type="application/rss+xml" title="dilse Codie » Java" href="https://dilsecodie.com/index.php">
<link rel="alternate" type="application/rss+xml" title="dilse Codie » Java  Coding" href="https://dilsecodie.com/index.php">
<link rel="alternate" type="application/rss+xml" title="dilse Codie » Home  Tutorials" href="https://dilsecodie.com/index.php"

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

</head>

<body>

    <!--page start-->
    <div class="page sidebar-true">

      
        <!--header start-->
         <?php include('header.php');  ?>

        <!-- page-title -->
         
        <!--site-main start-->
        <div class="site-main">
            <!-- sidebar -->
            <div class="sidebar ttm-sidebar-left ttm-bgcolor-white clearfix">
                <div class="container">
                    <!-- row -->
                    <div class="row d-block">
                        <div class="col-lg-12 content-area">
                            <!-- ttm-service-single-content-are -->
                            <div class="ttm-service-single-content-area">
                                 <?php
                                $key=$_REQUEST['searchdata'];

try {
   
    $stmt = $conn->prepare("SELECT * FROM mainsubcategory LEFT JOIN mainsubject ON mainsubcategory.parentid = mainsubject.id WHERE keysearch LIKE '%$key%'");
    $stmt->execute();

    if($row = $stmt->fetch() > 0){

    ?>
                                <div class="ttm-service-description mb-30">
                                    <h4>Industry standard code</h4>
                                    <p>Use Snippet Piece of Code 
                                    </p>
                                </div>

                               
                                <div class="row mb-30">
                               
  
<?php

    while ($row = $stmt->fetch()) {
    $mainsubcategory = $row["mainsubcategory"]; 

 $value = str_replace(" ","-",$row["nameofsub"]);
    $subcategory = $row["id"];
     $mainsubcategorysend = str_replace(" ","-",$mainsubcategory);
   
?>
                                    <div class="col-md-4">
                                        <div class="">
                                            <aside class="widget widget-nav-menu">
												<ul class="widget-menu">
												<!--	<li><a href="SingleTutPage?category=<?php echo $row["parentid"]; ?>&&subcategory=<?php echo  $subcategory;?>"><?php echo $row["mainsubcategory"]; ?></a></li> -->
												
												<li><a href="sourcecode/topic/<?php echo $value ?>/tutorial/<?php echo $mainsubcategorysend?>"><?php echo $row["mainsubcategory"]; ?></a></li>
												</ul>
											</aside>
                                        </div>
                                    </div>

                                    <?php
    }}else{

        $stmt1 = $conn->prepare("SELECT * FROM mainsubcategory ORDER BY mainsubcategory ASC LIMIT 20");
        $stmt1->execute();
      
                                     ?>

                           <div class="ttm-service-description mb-30">
                                    <h4>Do you mean ?</h4>
                                    <p> 
                                    </p>
                                </div>
                                <div class="row mb-30">
                                <?php
                                  while ($row1 = $stmt1->fetch()) {
                                    $mainsubcategory1 = $row1["mainsubcategory"]; 
                                
                                    $subcategory1 = $row1["id"];
                                 ?> 
                                
                                <div class="col-md-4">
                                        <div class="">
                                            <aside class="widget widget-nav-menu">
												<ul class="widget-menu">
													<li><a href="SingleTutPage?category=<?php echo $row1["parentid"]; ?>&&subcategory=<?php echo  $subcategory1;?>"><?php echo $row1["mainsubcategory"]; ?></a></li>
												</ul>
											</aside>
                                        </div>
                                    </div>


                                    <?php
    }
}

} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}

                      ?> 
                                </div> 
                          
								
                                 
                            </div>
                            <!-- ttm-service-single-content-are end -->
                        </div>
                        
						
                    </div><!-- row end -->
                </div>
            </div>
            <!-- sidebar end -->
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