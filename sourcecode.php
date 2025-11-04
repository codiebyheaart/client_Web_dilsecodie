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
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="https://dilsecodie.com/index.php">

	
<meta property="og:site_name" content="Dilse Codie">

<meta property="og:url" content="https://dilsecodie.com">
<meta property="og:type" content="website">
<meta itemprop="name" content="dilse Codie">
<meta itemprop="url" content="https://dilsecodie.com">
<meta name="keywords" content="dilsecodie,cloud,cloud computing, java, core java ,tutorial, beginners, professionals">
<meta name="description" content="best competitive programming website , python interview questions , where to study data structures and algorithms , where to get python modules ,spring boot is an example of
, best java interview preparation website , most used programming language , most spoken language in world , aws best practices architecture , what is cloud computing in simple terms , what is flask used for
, how to start artificial intelligence , in future which company will grow , most important programming language to learn , best information technology websites , new technology 2022 in computer science
, best companies to work for in india , where to learn coding , how much software engineer earn in india , what is tester roles and responsibilities , best testing tools for web applications , 
erp stands for in computer , enterprise applications are useful for , best jobs in india with high salary">
<meta name="author" content="http://dilsecodie.com">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">



<meta name="google-site-verification" content="Qz0dVd5nxe4xl75XP5Nc75Keo-dtO4UqwOUMQxHEP5o">
<title>Dilsecodie | best code editor </title>
 
	<link rel="shortcut icon" type="image/x-icon" href="https://dilsecodie.com/index.php">
	<link rel="apple-touch-icon" href="https://dilsecodie.com/index.php">
  <link rel="dns-prefetch" href="//maps.googleapis.com">
<link rel="dns-prefetch" href="//fonts.googleapis.com">
<link rel="dns-prefetch" href="//s.w.org">
<link rel="alternate" type="application/rss+xml" title="dilse Codie » Java" href="https://dilsecodie.com/index.php">
<link rel="alternate" type="application/rss+xml" title="dilse Codie » Java  Coding" href="https://dilsecodie.com/index.php">
<link rel="alternate" type="application/rss+xml" title="dilse Codie » Home  Tutorials" href="https://dilsecodie.com/index.php"
<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="../../../../css/bootstrap.min.css">

<!-- animate -->
<link rel="stylesheet" type="text/css" href="../../../../css/animate.css">

<!-- owl-carousel -->
<link rel="stylesheet" type="text/css" href="../../../../css/owl.carousel.css">

<!-- fontawesome -->
<link rel="stylesheet" type="text/css" href="../../../../css/font-awesome.css">

<!-- themify -->
<link rel="stylesheet" type="text/css" href="../../../../css/themify-icons.css">

<!-- flaticon -->
<link rel="stylesheet" type="text/css" href="../../../../css/flaticon.css">

<!-- prettyphoto -->
<link rel="stylesheet" type="text/css" href="../../../../css/prettyPhoto.css">

<!-- shortcodes -->
<link rel="stylesheet" type="text/css" href="../../../../css/shortcodes.css">

<!-- main -->
<link rel="stylesheet" type="text/css" href="../../../../css/main.css">

<!-- responsive -->
<link rel="stylesheet" type="text/css" href="../../../../css/responsive.css">
<link href="../../../../prism/prism.min.css" rel="stylesheet">
        <link href="../../../../code-box-copy/css/code-box-copy.css" rel="stylesheet">
        <script src="../../../../js/jquery.min.js"></script>
        <script src="../../../../prism/prism.min.js"></script>
        <script src="../../../../clipboard/clipboard.min.js"></script>
        <script src="../../../../code-box-copy/js/code-box-copy.js"></script>
</head>

<body>

    <!--page start-->
    <div class="page sidebar-true">

        
        <?php include('sourcecodeheader.php'); ?>

        <!-- page-title -->
         

    <!--site-main start-->
    <div class="site-main">
        <!-- sidebar -->
        <div class="sidebar ttm-sidebar-right ttm-bgcolor-white clearfix">
            <div class="container">
                <!-- row -->
                <div class="row d-block">
                    <div class="col-lg-9 content-area pull-left">
                        <!-- ttm-blog-classic-->

                        <?php

                       // echo $_SERVER['REQUEST_URI'];
                            //    $id=$_REQUEST['subcategory'];
                     //       echo $_SERVER['REQUEST_URI'];
$uRL = str_replace("/sourcecode/topic/","",$_SERVER['REQUEST_URI']);
//echo  $uRL;
$uarray= explode("/tutorial", $uRL);
//echo $uarray[1];
$uRL =str_replace("-"," ",$uarray[1]);
$uRL1 =str_replace("/","",$uRL);
//echo  $uRL1;
try {
   
    $stmt = $conn->prepare("SELECT * FROM maincontent WHERE maincategoryid = (SELECT id FROM mainsubcategory WHERE mainsubcategory = '". $uRL1 ."')");
    $stmt->execute();
  
    // set the resulting array to associative
    while ($row = $stmt->fetch()) {
    $mainsubcategory = $row["subject"]; 
    $maincontent1  = '';
    $id = $row["refid"];
    $content1 = $row["contentpart1"];
    
    if(stristr($content1, '<?php')){
        $maincontent1 = highlight_string($row["contentpart1"]);
        
        
    }else{
        $maincontent1 = $row["contentpart1"]; 
        
    }
    
   
?>
                        <article class="post ttm-blog-classic">
                           <div class="featured-imagebox featured-imagebox-post">
                                <div class="featured-thumbnail">
                                    <img class="img-fluid" src="../../../../images/subimage/<?php echo $row["imagepath"]; ?>" alt="">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-color-skincolor ttm-icon_element-size-xs">
                                            <a href= "" onclick="printDiv();" ><i class="ti ti-pencil"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="featured-content featured-content-post">
                                    <div class="post-meta">
                                        
                                    </div>
                                    <div class="separator">
                                        <div class="sep-line solid mt-10 mb-20"></div>
                                    </div>
                                    <div class="featured-desc"><h3><?php echo $row["subject"]; ?></h3>
                                   <div class="code-box-copy">
    <button class="code-box-copy__btn" data-clipboard-target="#example-html" title="Copy"></button>
    <pre><code class="language-html" id="example-html"> <?php echo $maincontent1; ?><?php echo trim($row["contentpart2"]) ?><?php echo trim($row["contentpart3"]) ?></code></pre>
</div>
                                       
                                      
                                    </div>
                                </div>
                            </div>
                             
                        </article>
<!-- 
                        <script type="text/javascript">

function printDiv() {

    let token = encodeURIComponent();
    alert(token);
    var a = window.open("", "", "height=500, width=500");
      a.document.write("<html><body>");

      a.document.write("Copy Script Paste In your Project !" + "<br><br>");
      a.document.write(token + "<br>");
      a.document.write("</body></html>");
      a.document.close();

}
    </script> -->
                        <?php
 }
} catch(PDOException $e) {
  //echo "Error: " . $e->getMessage();
}
                      ?> 
                        <!-- ttm-blog-classic end -->
                    </div>
                    <div class="col-lg-3 widget-area ttm-bgcolor-grey pull-right">
                         
                        <aside class="widget widget-categories">
                            <h3 class="widget-title">Categories</h3>
                            <?php
                             //   $subcategory=$_REQUEST['category'];
                             $uRLval = str_replace("/sourcecode/topic/","",$_SERVER['REQUEST_URI']);
                           //  echo $uRLval;
                           //  $uRLarray =str_replace("-"," ",$uRL);
                             $uRLarray= explode("/tutorial", $uRLval);
                        //     echo $uRLarray[0];
                             $mainval = str_replace("-"," ",$uRLarray[0]);
try {
   
    $stmt = $conn->prepare("SELECT * FROM mainsubcategory where parentid = 
    (select id from mainsubject where nameofsub = '". $mainval ."')");
    $stmt->execute();
  $count = 1; 
    // set the resulting array to associative
    while ($row = $stmt->fetch()) {
    $mainsubcategory = $row["mainsubcategory"]; 

    $subid = $row["id"];
    $mainsubcategorysend = str_replace(" ","-",$mainsubcategory);
   
?>
                            <ul>
                                <li> <span><?php echo  $count; ?></span><a href="../../../../sourcecode/topic/<?php echo $uRLarray[0] ?>/tutorial/<?php echo $mainsubcategorysend; ?>"><?php echo $row["mainsubcategory"]; ?></a></li>
                               
                            </ul>

                            <?php
                            $count++;
 }
} catch(PDOException $e) {
 // echo "Error: " . $e->getMessage();
}
                      ?> 
                        </aside>
                         
                        
                    </div>
                </div><!-- row end -->

            </div>
        </div>
        <!-- sidebar end -->
    </div><!--site-main end-->

    <!--footer start-->
   <?php include('sourcecodefooter.php');  ?>
    <!--footer end-->

    <!--back-to-top start-->
    <a id="totop" href="#top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--back-to-top end-->

</div><!-- page end -->


    <!-- Javascript -->
 
    <script src="../../../../js/tether.min.js"></script>
    <script src="../../../../js/bootstrap.min.js"></script>
    <script src="../../../../js/jquery.easing.js"></script>    
    <script src="../../../../js/jquery-waypoints.js"></script>    
    <script src="../../../../js/jquery-validate.js"></script> 
    <script src="../../../../js/owl.carousel.js"></script>
    <script src="../../../../js/jquery.prettyPhoto.js"></script>
    <script src="../../../../js/numinate.min.js?ver=4.9.3"></script>
    <script src="../../../../js/main.js"></script>
    <script src="../../../../js/chart.js"></script>
    <script>
            $('.code-box-copy').codeBoxCopy({
                tooltipText: 'Copied',
                tooltipShowTime: 1000,
                tooltipFadeInTime: 300,
                tooltipFadeOutTime: 300
            });
        </script>

    <!-- Javascript end-->

</body> 
</html>