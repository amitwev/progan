<?php
    session_start();
?>
<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Progan Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- OUR CSS ============================================ -->
    <link rel="stylesheet" href="../css/ourCss/style.css">
    <!-- Google Fonts ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS ============================================ -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- font awesome CSS ============================================ -->
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <!-- owl.carousel CSS ============================================ -->
    <link rel="stylesheet" href="../css/owl.carousel.css">
    <link rel="stylesheet" href="../css/owl.theme.css">
    <link rel="stylesheet" href="../css/owl.transitions.css">
    <!-- meanmenu CSS ============================================ -->
    <link rel="stylesheet" href="../css/meanmenu/meanmenu.min.css">
    <!-- animate CSS ============================================ -->
    <link rel="stylesheet" href="../css/animate.css">
    <!-- normalize CSS ============================================ -->
    <link rel="stylesheet" href="../css/normalize.css">
    <!-- notika icon CSS ============================================ -->
    <link rel="stylesheet" href="../css/notika-custom-icon.css">
    <!-- main CSS ============================================ -->
    <link rel="stylesheet" href="../css/main.css">
    <!-- wave CSS ============================================ -->
    <link rel="stylesheet" href="../css/wave/waves.min.css">
    <!-- style CSS ============================================ -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- responsive CSS	============================================ -->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- modernizr JS ============================================ -->
    <script src="../js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!-- START Include for Header -->
   <?php include "../php/header.php" ?> 
    <!-- END Include for Header -->
    <!-- START Include for Menu -->
     <?php include "../php/menu.php" ?> 
    <!-- END Include for Menu-->
    
    <h1>We are here!!!!</h1>
    <?php
        /*echo  time() .'<- the time';
        require_once('../php/woocommerce/Client.php');
        $url = 'http://vmedu187.mtacloud.co.il';
        $consumer_key = 'ck_ef79e2e5d63f28bde196ca12cf14c96c965fc84a';
        $consumer_secret ='cs_eb7cbbc0723b6e21e04962d86a008cde568e13e7';
        $options = null;
        $woocommerce = new Client($url, $consumer_key, $consumer_secret, 
        [
            'version' => 'wc/v3',
            'timeout' => '5',
            'verify_ssl' => 'false',
            'query_string_auth' => 'true',
            'oauth_timestamp' => time()
            
        ]
        );
        print_r($woocommerce);
        echo '<br>';
        $result = $woocommerce->get('');
        print_r($result);*/
    //    echo rawurlencode('http://vmedu187.mtacloud.co.il');
        
        $url = 'https://progangar.wixsite.com/mysite/_functions-dev/getTheProducs/allProducts?productId=81126';

        $resultFromSite = json_decode(file_get_contents($url, true));

        var_dump($resultFromSite);

        
      //$signature = base64_encode(hash_hmac('SHA1', $signatureBaseString, $key, 1));
    //  $signature =  hash_hmac('sha256', 'The quick brown fox jumped over the lazy dog.', 'secret');
    	//$hash_algorithm = strtolower( str_replace( 'HMAC-', '', $params['oauth_signature_method'] ) );
      //  echo base64_encode( hash_hmac( $hash_algorithm, $string_to_sign, $secret, true ) );

      /*
      $nonce = md5(mt_rand());
      $url = 'http://vmedu187.mtacloud.co.il/wp-json/wc/v3/products?oauth_consumer_key=ck_ef79e2e5d63f28bde196ca12cf14c96c965fc84a&oauth_signature_method=HMAC-SHA1&oauth_timestamp='.time().'&oauth_nonce='.$nonce.'&oauth_version=1.0
      &oauth_signature='.$signature .'&page=2';
        echo '<br> = ' .$url;
    //  $testingAPI = file_get_contents($url);
 //     var_dump($testingAPI);*/
        
      /*  
        $store_url = 'http://vmedu187.mtacloud.co.il/';
        $endpoint = '/wc-auth/v1/authorize';
        $params = [
            'app_name' => 'My App Name',
            'scope' => 'write',
            'user_id' => 123,
            'return_url' => 'http://app.com',
            'callback_url' => 'https://app.com'
        ];
        $query_string = http_build_query( $params );
        
        echo $store_url . $endpoint . '?' . $query_string; */
    ?>
    
    
    
    

    <!-- End Realtime sts area-->
    <!-- Start Footer area-->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © Amit Salim, Tal Marziano, Chen Rahamim.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer area-->
    <!-- jquery ============================================ -->
    <script src="../js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS ============================================ -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- wow JS ============================================ -->
    <script src="../js/wow.min.js"></script>
    <!-- owl.carousel JS ============================================ -->
    <script src="../js/owl.carousel.min.js"></script>
    <!-- scrollUp JS ============================================ -->
    <script src="../js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS ============================================ -->
    <script src="../js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS ============================================ -->
    <script src="../js/counterup/jquery.counterup.min.js"></script>
    <script src="../js/counterup/waypoints.min.js"></script>
    <script src="../js/counterup/counterup-active.js"></script>
    <!-- jvectormap JS ============================================ -->
    <script src="../js/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../js/jvectormap/jvectormap-active.js"></script>
    <!-- sparkline JS ============================================ -->
    <script src="../js/sparkline/jquery.sparkline.min.js"></script>
    <script src="../js/sparkline/sparkline-active.js"></script>
    <!-- flot JS ============================================ -->
    <script src="../js/flot/jquery.flot.js"></script>
    <script src="../js/flot/jquery.flot.resize.js"></script>
    <script src="../js/flot/jquery.flot.pie.js"></script>
    <script src="../js/flot/jquery.flot.tooltip.min.js"></script>
    <script src="../js/flot/jquery.flot.orderBars.js"></script>
    <script src="../js/flot/curvedLines.js"></script>
    <script src="../js/flot/flot-active.js"></script>
    <!-- knob JS ============================================ -->
    <script src="../js/knob/jquery.knob.js"></script>
    <script src="../js/knob/jquery.appear.js"></script>
    <script src="../js/knob/knob-active.js"></script>
    <!--  wave JS ============================================ -->
    <script src="../js/wave/waves.min.js"></script>
    <script src="../js/wave/wave-active.js"></script>
    <!--  Chat JS ============================================ -->
	<script src="../js/chat/moment.min.js"></script>
    <script src="../js/chat/jquery.chat.js"></script>
    <!--  todo JS ============================================ -->
    <script src="../js/todo/jquery.todo.js"></script>
    <!-- plugins JS ============================================ -->
    <script src="../js/plugins.js"></script>

</body>

</html>