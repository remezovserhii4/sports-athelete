<html>
    <head>
        <title></title>
        
        <style>
            .row {
                display: block;
                width: 275px;
                height: 70px;
                background-color: white;
            }
            .row2 {
                display: block;
                width: 275px;
                height: 20px;
                background-color: white;
                padding-top: 7px;
            }
                .row2_a {
                    display: block;
                    float: none;
                    width: 275px;
                    height: 20px;
                    margin-top: 0px;
                    margin-left: auto;
                    margin-right: auto;
                    background-color: white;
                    font-family: Gotham Book, Verdana, Helvetica;
                    font-size: 11px;
                    font-style: italic;
                    line-height: 20px;
                    text-align: right;
                    overflow: hidden; 
                }
            div2 {
                background-color: white;
            }
            div3 {
                background-color: white;
            }
            .hide_1 {
                display: block;
                width: 275px;
                height: 65px;
                margin-left: auto;
                margin-right: auto;
                background-color: white;
            }
        </style>
    </head>
    <body>
        <?php
            session_start();
                    
            define("DB_HOST", "localhost");
            define("DB_USER", "theproto_test");
            define("DB_PASS", ")@?xCqMD,;V2");
            define("DB_NAME", "theproto_test");
                    
            // Create connection
            $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            
            if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
            }
            
            
            $sql = "SELECT scholarship1, scholarship2, scholarship3, scholarship4, scholarship5, scholarship6, scholarship7, scholarship8, scholarship9, scholarship10, date1, date2, date3, date4, date5, date6, date7, date8, date9, date10, updatescholar FROM scholarships";
            $result = mysqli_query($conn, $sql);
            $time = date("Y/m/d h:i:s");
            
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {

                        if ($row['scholarship1'] != null) {
                            echo '<div class="row">' . '<div1 style="background-color: #e0e0e0;"></div1>' . '<div2>' . $row["scholarship1"] . '</div2>' . '<div3>' . $row["date1"]. '</div3>' . '</div>';
                        }
                        if ($row['scholarship2'] != null) {
                            echo '<div class="row">' . '<div1 style="background-color: #e0e0e0;"></div1>' . '<div2>' . $row["scholarship2"]. '</div2>' . '<div3>' . $row["date2"]. '</div3>' . '</div>';
                        }
                        if ($row['scholarship3'] != null) {
                            echo '<div class="row">' . '<div1 style="background-color: #e0e0e0;"></div1>' . '<div2>' . $row["scholarship3"]. '</div2>' . '<div3>' . $row["date3"]. '</div3>' . '</div>';
                        }
                        if ($row['scholarship4'] != null) {
                            echo '<div class="row">' . '<div1 style="background-color: #e0e0e0;"></div1>' . '<div2>' . $row["scholarship4"]. '</div2>' . '<div3>' . $row["date4"]. '</div3>' . '</div>';
                        }
                        if ($row['scholarship5'] != null) {
                            echo '<div class="row">' . '<div1 style="background-color: #e0e0e0;"></div1>' . '<div2>' . $row["scholarship5"]. '</div2>' . '<div3>' . $row["date5"]. '</div3>' . '</div>';
                        }
                        if ($row['scholarship6'] != null) {
                            echo '<div class="row">' . '<div1 style="background-color: #e0e0e0;"></div1>' . '<div2>' . $row["scholarship6"]. '</div2>' . '<div3>' . $row["date6"]. '</div3>' . '</div>';
                        }
                        if ($row['scholarship7'] != null) {
                            echo '<div class="row">' . '<div1 style="background-color: #e0e0e0;"></div1>' . '<div2>' . $row["scholarship7"]. '</div2>' . '<div3>' . $row["date7"]. '</div3>' . '</div>';
                        }
                        if ($row['scholarship8'] != null) {
                            echo '<div class="row">' . '<div1 style="background-color: #e0e0e0;"></div1>' . '<div2>' . $row["scholarship8"]. '</div2>' . '<div3>' . $row["date8"]. '</div3>' . '</div>';
                        }
                        if ($row['scholarship9'] != null) {
                            echo '<div class="row">' . '<div1 style="background-color: #e0e0e0;"></div1>' . '<div2>' . $row["scholarship9"]. '</div2>' . '<div3>' . $row["date9"]. '</div3>' . '</div>';
                        }
                        if ($row['scholarship10'] != null) {
                            echo '<div class="row">' . '<div1 style="background-color: #e0e0e0;"></div1>' . '<div2>' . $row["scholarship10"]. '</div2>' . '<div3>' . $row["date10"]. '</div3>' . '</div>';
                        }
                        
                        echo '<div class="row2">' . '<div class="row2_a">' . "Updated:&nbsp&nbsp" . $row["updatescholar"] . '</div>' . '</div>';
                        
                        echo '<div class="hide_1">' . '<form action="deletelastscholarships.php" method="post">' . '<button type="reset2" id="reset2">Delete Last</button>' . '</form>' . '<form action="deletescholarships.php" method="post">' . '<button type="reset2" id="reset2" style="margin-left: 15px;">Delete All</button>' . '</form>' . '</div>';
                    }
                }
                
                if(empty($_POST['scholarship1'])) {
                    echo '<div class="retrieveScholarships">' . '<form name="newItem" id="newItem">' . '<a id="toggle3" href="javascript:toggle3();">Search/Add Scholarships to List</a>' . '<div id="showHide">' . '</div>' . '</form>' . '</div>';
                }
            
            
            mysqli_close($conn);
        ?>
        
    </body>
</html>
