<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="device-width,initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css">
    <link rel="stylesheet" href="css/listview-grid.css">
    <script src="js/jquery-2.1.0.min.js"></script>
    <script src="js/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
    <div data-role="page" id="home" class="my-page">
        <div data-role="header" data-theme="b">
            <h1>Home </h1>
        </div>

        <div data="main" class="ui-content" >

        <ul data-role="listview" data-inset="true" data-filter="true" data-filter-placeholder="請輸入關鍵字!!">
        <?php
        $servername = "localhost";
        $username = "jason";
        $password = "123456";
        $dbname = "demoDB";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        mysqli_query($conn,"SET NAMES UTF8");
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }else{
            $sql = "SELECT book_id, image_name, description FROM product";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {

                    echo '<li><a href="#"><img src="image/'.$row["image_name"].'" alt="" class="ui-li-thumb"><h2>這是標題'.$row["book_id"].'</h2><p>'.$row["description"].'</p><p class="ui-li-aside">'.$row["book_id"].'</p></a></li>';   

                    // echo '  <div data-role="content">
                    //             <ul data-role="listview" data-inset="true">
                    //             <li><a href="#">
                    //             <img src="image/'.$row["image_name"].'">
                    //             <h2>ID: '.$row["book_id"].'</h2>
                    //             <p>'.$row["description"].'</p>   
                    //             <p class="ui-li-aside">Tizen</p>                         
                    //             </a></li>
                    //             </ul>
                    //         </div>';




                    // LISTVIEW
                    // echo '  <ul data-role="listview">
                    //         <li><a href="#"><img src="image/'.$row["image_name"].'"<h3>ID: '.$row["book_id"].'</h3><p>'.$row["description"].'
                    //         </p></a></li>                        
                    //         </ul>';

                    // POPUP
                    // echo '<a href="#'.$row["book_id"].'" data-rel="popup" data-position-to="window">
                    //     <img src="image/'.$row["image_name"].'" alt="" width="48%">
                    // </a>
                    // <div data-role="popup" id="'.$row["book_id"].'" data-dismissible="false">
                    //     <a href="#" data-role="button" data-theme="b" data-icon="delete" data-iconpos="notext" class="ui-btn-right" data-rel="back">Button</a>
                    //     <img src="image/'.$row["image_name"].'" alt="">
                    //     <p>ID: '.$row["book_id"].'</p>
                    //     <p>Description: '.$row["description"].'</p>
                    // </div>';

                    // 印出圖片
                    // echo '
                    //         <img src="image/'.$row["image_name"].'" alt="" width="45%">
                    //         <p>ID: '.$row["book_id"].'</p>
                    //         <p>Description: '.$row["description"].'</p>
                    //      ';


                    //印出資料
                    // echo "id: " . $row["book_id"]. " img Name: " . $row["image_name"]. " Description:" . $row["description"]. "<br>";
                }
            } else {
                echo "0 results";
            }
        }        
        ?>

        </ul>
            
        </div>

        <div data-role="footer" data-position="fixed" data-theme="b">
            <h1>footer</h1>
        </div>
    </div>    
</body>
</html>



