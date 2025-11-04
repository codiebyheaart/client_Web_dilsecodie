<?php
include_once("databaseconnection.php");

//echo "https://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
//$uRL1 = explode("/",$_SERVER['QUERY_STRING']);


//echo $_SERVER['REQUEST_URI'] ;

//echo $uRL1[0];

//echo $_SERVER['QUERY_STRING'] ;

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
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="https://dilsecodie.com/index.php">
<meta property="og:site_name" content="Dilse Codie">

<meta property="og:url" content="https://dilsecodie.com">
<meta property="og:type" content="education">
<meta itemprop="name" content="dilse Codie">
<meta itemprop="url" content="https://dilsecodie.com">
<meta name="keywords" content="dilsecodie,cloud,cloud computing, java, core,AI,ai,hr,python,bank,fd,rd,api,rest,code,project,companies,interview">
<meta name="description" content="world best business opportunity , where to study system design , what is design pattern , how to get job in aws cloud , what is computer network 
, what do you mean by algorithm in computer , why to use database system , how analytics help business ,analytics used in marketing , how to read data from excel in selenium , how to read data from excel
, how to get anaconda prompt , where to use go language , what is bitcoin , where to start bitcoin mining , best bitcoins to invest today , how to start studying computer science ,how to make chatbot in python
, ai algorithms list , ai use cases ,Spring, Free Online, Dilsecodie provides code syntax , java code, cloud computing,
android, java frameworks, javascript, ajax,spring boot,microservices
,oracle database info, sql, python, php,bank,fd,rd">
<meta name="author" content="http://dilsecodie.com">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">



<meta name="google-site-verification" content="Qz0dVd5nxe4xl75XP5Nc75Keo-dtO4UqwOUMQxHEP5o">

<title>Dilsecodie | Snippet Piece of Code</title>
 	<link rel="shortcut icon" type="image/x-icon" href="https://dilsecodie.com/index.php">
	<link rel="apple-touch-icon" href="https://dilsecodie.com/index.php">
  <link rel="dns-prefetch" href="//maps.googleapis.com">
<link rel="dns-prefetch" href="//fonts.googleapis.com">
<link rel="dns-prefetch" href="//s.w.org">
<link rel="alternate" type="application/rss+xml" title="dilse Codie » Java" href="https://dilsecodie.com/index.php">
<link rel="alternate" type="application/rss+xml" title="dilse Codie » Java  Coding" href="https://dilsecodie.com/index.php">
<link rel="alternate" type="application/rss+xml" title="dilse Codie » Home  Tutorials" href="https://dilsecodie.com/index.php"

<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">

<!-- animate -->
<link rel="stylesheet" type="text/css" href="../../css/animate.css">

<!-- owl-carousel -->
<link rel="stylesheet" type="text/css" href="../../css/owl.carousel.css">

<!-- fontawesome -->
<link rel="stylesheet" type="text/css" href="../../css/font-awesome.css">

<!-- themify -->
<link rel="stylesheet" type="text/css" href="../../css/themify-icons.css">

<!-- flaticon -->
<link rel="stylesheet" type="text/css" href="../../css/flaticon.css">

<!-- prettyphoto -->
<link rel="stylesheet" type="text/css" href="../../css/prettyPhoto.css">

<!-- shortcodes -->
<link rel="stylesheet" type="text/css" href="../../css/shortcodes.css">

<!-- main -->
<link rel="stylesheet" type="text/css" href="../../css/main.css">

<!-- responsive -->
<link rel="stylesheet" type="text/css" href="../../css/responsive.css">

</head>

<body>

    <!--page start-->
    <div class="page sidebar-true">

      
        <!--header start-->
         <?php include('subheader.php');  ?>

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
                                 
                                <div class="ttm-service-description mb-30">
                                    <h4>Industry standard code</h4>
                                    <p>Use Snippet Piece of Code 
                                    </p>
                                </div>

                               
                                <div class="row mb-30">
                                <?php
                                
                              //  $_SERVER['REQUEST_URI'];
                            //    $uRL = explode("/",$_SERVER['REQUEST_URI']);
                             //   echo $uRL[0];
                                $uRL =str_replace("/subcategorypro/subcategories/","",$_SERVER['REQUEST_URI']);
                                $uRL =str_replace("-"," ",$uRL);
                               // echo $uRL;
                            //    $id=$_REQUEST['subcategories'];

try {
   
  //  $stmt = $conn->prepare("SELECT * FROM mainsubcategory where parentid =$id");
    $stmt = $conn->prepare("SELECT * FROM mainsubcategory where parentid = 
    (select id from mainsubject where nameofsub = '". $uRL ."')");
    $stmt->execute();
  
    // set the resulting array to associative
    while ($row = $stmt->fetch()) {
    $mainsubcategory = $row["mainsubcategory"]; 
     
    $subcategory = $row["id"];
   
?>
                                    <div class="col-md-4">
                                        <div class="">
                                            <aside class="widget widget-nav-menu">
												<ul class="widget-menu">
													<li><a href="../../SingleTutPage?category=<?php echo  $row["parentid"]; ?>&&subcategory=<?php echo  $subcategory;?>"><?php echo $row["mainsubcategory"]; ?></a></li>
												</ul>
											</aside>
                                        </div>
                                    </div>
                                    <?php
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
       <?php include('subfooter.php');  ?>
        <!--footer end-->

        <!--back-to-top start-->
        <a id="totop" href="#top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!--back-to-top end-->

    </div><!-- page end -->


    <!-- Javascript -->

    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/tether.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/jquery.easing.js"></script>    
    <script src="../../js/jquery-waypoints.js"></script>    
    <script src="../../js/jquery-validate.js"></script> 
    <script src="../../js/owl.carousel.js"></script>
    <script src="../../js/jquery.prettyPhoto.js"></script>
    <script src="../../js/numinate.min.js?ver=4.9.3"></script>
    <script src="../../js/main.js"></script>
    <script src="../../js/chart.js"></script>

   

    <!-- Javascript end-->

</body> 
</html>