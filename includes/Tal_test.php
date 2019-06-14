<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Progan Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <!-- mCustomScrollbar CSS============================================ -->
    <link rel="stylesheet" href="../css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- jvectormap CSS	============================================ -->
    <link rel="stylesheet" href="../css/jvectormap/jquery-jvectormap-2.0.3.css">
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
    
    <!-- Breadcomb area Start-->
    <div class="breadcomb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <h2 style="text-align:center">תיקונים</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcomb area End-->
    
    <!-- Search at Data Table Start-->
<script>
    function isExistingCellStartWith(children, length, filter) {
        let td;
         for (child = 1; child < length; child++) {  
             td = children[child];
             if(td.innerHTML.toUpperCase().includes(filter)) {
                 return true
             }
        }
        return false;
    }

    function myFunction() {
      let input, filter, a, i, j, td, trs, child, table;
      input = document.getElementById("mySearch");
      filter = input.value.toUpperCase();
      table = document.getElementById("data-table-basic");
      trs = table.getElementsByTagName("tr");
      for (i = 1; i < trs.length; i++) {
            if(isExistingCellStartWith(trs[i].children, trs[i].children.length, filter)) {
                trs[i].style.display = "";
            } else {
                trs[i].style.display = "none";
            }
        }
    }
</script>
<!-- Search at Data Table End-->

<!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2 style="text-align:center">תיקונים בטיפול</h2>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="centerTableTr">שמור</th>
                                        <th class="centerTableTr">סטטוס</th>
                                        <th class="centerTableTr">מספר ימים משוער לתיקון</th>
                                        <th class="centerTableTr">תאריך פתיחת טיפול</th>
                                        <th class="centerTableTr">מחיר משוער</th>
                                        <th class="centerTableTr">פירוט הבעיה</th>
                                        <th class="centerTableTr">ת"ז לקוח</th>
                                        <th class="centerTableTr">שם לקוח</th>
                                        <th class="centerTableTr">מק"ט</th>
                                        <th class="centerTableTr">שם המוצר</th>
                                        <th class="centerTableTr">מס' תיקון</th>
                                        <input type="text" id="mySearch" onchange="myFunction()" placeholder="חפש תיקון" title="Type in a category">
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                        require_once('../php/Database.php');
                                        global $db;
                                        $db->query("SET CHARACTER SET 'hebrew'");
                                        $db->query("SET NAMES 'utf8'");
                                        $result = $db ->query('select * from repair r JOIN customers c ON r.customerId=c.customerId JOIN repairStatuses rs ON rs.customerId=c.customerId');
                                        
                                        //print_r($result);
                                        //$result = $result->fetch_assoc();  //for testing
                                        
                                       while($row = $result->fetch_assoc()){
                                           //print_r($row);
                                         if ($row['repairStatus'] == 1){
                                            echo '<tr>';
                                            echo 
                                            '<td> <input class="marginAndFloat" type="submit" value="&#x2705 " name="updateRepai"r</td>';
                                                echo '<td class="centerTableTr">
                                                     <select name=selectStatus>  
                                                         <option value="1" selected>בטיפול</option>  
                                                         <option value="2"> הושלם</option>  
                                                         <option value="3">נאסף</option>  
                                                     </select> </td>';
                                                     
                                           echo '<td class="centerTableTr" contenteditable="true">' .$row['estimateRepairDays'] .'</td>';
                                           echo ' <td class="centerTableTr" contenteditable="true">' .$row['dateCreated'] .'</td>';
                                           echo ' <td class="centerTableTr" contenteditable="true">' .$row['estimatePrice'] .'</td>';
                                          echo ' <td class="centerTableTr" contenteditable="true">' .$row['repairDescription'] .'</td>';
                                          echo ' <td class="centerTableTr" contenteditable="true">' .$row['customerId'] .'</td>';
                                          echo ' <td class="centerTableTr" contenteditable="true">' .$row['firstName'] . " " . $row['lastName']. '</td>';
                                          echo ' <td class="centerTableTr" contenteditable="true">' .$row['repairProductId'] .'</td>';
                                          echo ' <td class="centerTableTr" contenteditable="true">' .$row['repairProductName'] .'</td>';
                                       echo '</tr> ';
                                        }
                                       }
                                    ?>


                                    

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->
    
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
        
        
        
        <script>
            
            var selectStatus = document.getElementById("selectStatus");
            var estimateRepairDays = document.getElementById("estimateRepairDays");
            var dateCreated = document.getElementById("dateCreated");
            var estimatePrice = document.getElementById("estimatePrice");
            var repairDescription = document.getElementById("repairDescription");
            var customerId = document.getElementById("customerId");
            var firstName = document.getElementById("firstName");
            var repairProductId = document.getElementById("repairProductId");
            var emailEdit = document.getElementById("emailEdit");
            var xhr = new XMLHttpRequest(); 
            xhr.open("GET", "../php/ajaxReq.php", true);
            xhr.setRequestHeader('Content-type', 'application/json');
            xhr.onreadystatechange = function(){
                //console.log('ready State: ' + xhr.readyState);
                if(xhr.readyState < 4){
                    address1.innerHTML = 'Loading..';
                    city.innerHTML = 'Loading..';
                    country.innerHTML = 'Loading..';
                    phone.innerHTML = 'Loading..';
                    fullName.innerHTML = 'Loading..';
                    email.innerHTML = 'Loading..';
                }
                if(xhr.readyState == 4 && xhr.status == 200){
                    var json = JSON.parse(xhr.responseText);
                    //console.log(json);
                   // console.log(typeof json);
                    address1.innerHTML = json.Address1;
                    city.innerHTML = json.City;
                    country.innerHTML = json.Country;
                    phone.innerHTML = json.Phone;
                    email.innerHTML = json.email;
                    fullName.innerHTML = json.firstName +' ' + json.lastName;
                    emailEdit.innerHTML = json.email;
                    lastNameEdit.innerHTML = json.lastName;
                    firstNameEdit.innerHTML = json.firstName;
                    $('#address1Edit').attr('placeholder','');
                    $('#address1Edit').attr('placeholder','New Text Here');
                    window['city'] = json.City;
                }
            }
            xhr.send();
        </script>
        
    <script>
            function myFunctionToEdit() {
                console.log('Ok');
             //input = document.getElementById("Edit");
              //filter = input.value.toUpperCase();
              table = document.getElementById("data-table-basic");
              trs = table.getElementsByTagName("tr");
              for (i = 1; trs[i].children[9].innerHTML == 'חרמש'; i++) {
                  trs[i].children[3].innerHTML = '8';
              }
    }
    </script>
    
    <?php
      if($_POST['addRepair']){
            require_once('../php/Database.php');
            global $db;
            $db->query("SET CHARACTER SET 'hebrew'");
            $db->query("SET NAMES 'utf8'");
            if(!$db->get_connection()){
                die("Connection failed!");
            }
            else{
                $firstName = filter_input(INPUT_POST, 'firstName'); 
                $lastName = filter_input(INPUT_POST, 'lastName'); 
                $phone = filter_input(INPUT_POST, 'phone');
                $customerEmail = filter_input(INPUT_POST, 'customerEmail');
                $customerId = filter_input(INPUT_POST, 'customerId');
                $repairProductName = filter_input(INPUT_POST, 'repairProductName');
                $repairProductId = filter_input(INPUT_POST, 'repairProductId');
                $repairDescription = filter_input(INPUT_POST, 'repairDescription');
                $estimatePrice = filter_input(INPUT_POST, 'estimatePrice');
                $estimateRepairDays = filter_input(INPUT_POST, 'estimateRepairDays');
                $totalPriceRepair = filter_input(INPUT_POST, 'totalPriceRepair');
                $repairComment = filter_input(INPUT_POST, 'repairComment');
                $repairStatusId = filter_input(INPUT_POST, '1');
                /*if(User::checkUserName($email)){
    		        echo "<script type='text/javascript'>Swal.fire('Failed to register', 'Email is invalid.', 'error')</script>";
                }
      
                else if(User::checkNameAndLastName($firstName, $lastName)){
    		        echo "<script type='text/javascript'>Swal.fire('Failed to register', 'Name or Last name is invalid.', 'error')</script>";
                }
    
               else{*/
                    //$repairid = $db->query("SELECT orderid FROM orders ORDER BY orderid DESC LIMIT 0, 1");
                    //echo $orderid['orderid'];
                    
                    $sql1 = "INSERT INTO customers(firstName, lastName, phone, email, customerId, dateCreated) 
                    values ('" .$firstName ."','" .$lastName ."','" .$phone ."','" .$customerEmail ."','" .$customerId ."', now())";
                    echo $sql1 .' This is after sql query '; 
                    $result1 = $db->query($sql1);
                   	Print_r ($result1); 
                   	$sql2 = "INSERT INTO repair(repairProductName, repairProductId, repairDescription, estimatePrice, estimateRepairDays, totalPriceRepair, repairComment, customerId, dateCreated) 
                    values ('".$repairProductName ."'," .$repairProductId. ",'".$repairDescription."',".$estimatePrice.", ".$estimateRepairDays.", ".$totalPriceRepair.", '".$repairComment."', '" .$customerId ."', now())";
                    echo $sql2; 
                    $result2 = $db->query($sql2);
                   	Print_r ($result2); 
                   	$sql3 = "INSERT INTO repairStatuses(repairStatus, customerId, productId) 
                    values ('1','".$customerId."','".$repairProductId."')";
                    echo $sql3; 
                    $result3 = $db->query($sql3);
                   	Print_r ($result3); 
            
                    if(!$result1 || !$result2 || !$result3){
                        global $errorAddedUser;
                        $errorAddedUser = TRUE;
                        $invalidRegister = TRUE;
                    }
                    else{
                        $invalidRegister = FALSE;
                        global $userAddedSucessfuly;
                        $userAddedSucessfuly = TRUE;
                       // echo '<meta http-equiv="refresh" content="0">'; //for reload page
                }
                
              /*  while($row = $result3->fetch_assoc()){
                                            echo '<tr>';
                                            if ($row['repairStatus'] == 1){
                                                echo '<td class="centerTableTr">בטיפול</td>';
                                            }
                                            else if ($row['repairStatus'] == 2){
                                                echo '<td class="centerTableTr">הושלם</td>'
                                            }
                                            else{
                                                    echo '<td class="centerTableTr">נאסף</td>';

                                            }
                                           echo '<td class="centerTableTr">' .$row['email'] .'</td>';
                                           echo ' <td class="centerTableTr">' .$row['userName'] .'</td>';
                                           echo ' <td class="centerTableTr">' .$row['lastName'] .'</td>';
                                          echo ' <td class="centerTableTr">' .$row['firstName'] .'</td>';
                                       echo '</tr> ';
                                        }*/
                                        
          } 
            }
      //}
      

          
?>
        
        
    <!-- jquery ============================================ -->
    <script src="../js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS ============================================ -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- wow JS ============================================ -->
    <script src="../js/wow.min.js"></script>
    <!-- price-slider JS ============================================ -->
    <script src="js/jquery-price-slider.js"></script>
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
    <!-- mCustomScrollbar JS ============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
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
    <!-- main JS ============================================ -->
    <script src="../js/main.js"></script>

</body>

</html>