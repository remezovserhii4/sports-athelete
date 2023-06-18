<html>
    <head>
        <title>Database Delete Last</title>
        
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <!-- Javascript -->
		<script src="includes/js/jquery-3.2.1.min.js"></script>
		<script src="includes/js/jquery-ui.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        
        <style>
            html {
            font-family: Gotham Book, Verdana, Helvetica;
            background-color: white;
        }
        body {
            display: block;
            width: 100%;
            height: auto;
            margin-left: auto;
            margin-right: auto;
            padding: 0;
            margin-top: 0;
        }
        #mainHeader {
            display: block;
            width: 100%;
            height: 40px;
            margin-left: auto;
            margin-right: auto;
            background-color: white;
            border-bottom: 1px solid #e0e0e0;
        }
            .leftLogo {
                display: inline-block;
                float: left;
                width: 140px;
                height: 30px;
                margin-top: 5px;
                margin-left: 25px;
            }
                .leftLogo img {
                    display: inline-block;
                    float: left;
                    width: 30px;
                    height: 30px;
                }
                .headerName {
                    display: inline-block;
                    float: left;
                    width: 100px;
                    height: 30px;
                    margin-left: 10px;
                    color: #1e90ff;
                    font-family: Gotham Book, Verdana, Helvetica;
                    font-size: 20px;
                    letter-spacing: 0.2px;
                    line-height: 32px;
                }
            .navContainer {
                display: inline-block;
                float: right;
                width: 500px;
                height: 30px;
                margin-top: 5px;
                margin-right: 25px;
            }
                .navBar {
                    display: inline-block;
                    float: right;
                    width: 500px;
                    height: 30px;
                    overflow: hidden;
                }
                .navBar a {
                    display: inline-block;
                    float: left;
                    width: 100px;
                    height: 30px;
                    font-size: 11px;
                    color: #1e90ff;
                    font-family: Gotham Book, Verdana, Helvetica;
                    line-height: 32px;
                    text-decoration: none;
                    text-align: center;
                }
                .navBar a:hover {
                    color: #0077ea;
                }
                .navBar .icon {
                    display: none;
                }
        #loginContainer {
            display: block;
            width: 318px;
            height: auto;
            margin-left: auto;
            margin-right: auto;
            margin-top: 100px;
            background-color: white;
            border: 1px solid #e0e0e0;
        }
            .topSection {
                display: block;
                width: 318px;
                height: 100px;
                background-color: white;
                overflow: auto;
            }
                .imageContainer {
                    display: block;
                    width: 265px;
                    height: 60px;
                    margin-left: auto;
                    margin-right: auto;
                    margin-top: 20px;
                    overflow: auto;
                }
                .imageContainer img {
                    display: inline-block;
                    float: left;
                    width: 60px;
                    height: 60px;
                }
                .topHeader {
                    display: inline-block;
                    float: left;
                    width: 190px;
                    height: 40px;
                    padding-left: 15px;
                    color: #1e90ff;
                    font-family: Gotham Book, Verdana, Helvetica;
                    font-size: 30px;
                    letter-spacing: 0.3px;
                    line-height: 40px;
                }
                .topSubheader {
                    display: inline-block;
                    float: left;
                    width: 190px;
                    height: 20px;
                    padding-left: 15px;
                    color: #1e90ff;
                    font-family: Gotham Book, Verdana, Helvetica;
                    font-size: 13px;
                    line-height: 20px;
                }
            .middleSection {
                display: block;
                width: 318px;
                height: auto;
                overflow: auto;
                background-color: white;
                }
                .errors {
                    display: block;
                    width: 275px;
                    height: auto;
                    margin-left: auto;
                    margin-right: auto;
                    margin-top: 10px;
                    margin-bottom: 20px;
                    padding-left: 10px;
                    padding-right: 10px;
                    padding-top: 7px;
                    padding-bottom: 7px;
                    background-color: white;
                    color: black;
                    outline: none;
                    font-size: 12px;
                    font-family: Gotham Book, Verdana, Helvetica;
                    line-height: 20px;
                }
                .errors a {
                    display: block;
                    width: 275px;
                    height: 35px;
                    margin-left: auto;
                    margin-right: auto;
                    background-color: #1e90ff;
                    color: white;
                    font-size: 11px;
                    line-height: 37px;
                    text-decoration: none;
                    font-family: Gotham Book, Verdana, Helvetica;
                    border: none;
                    cursor: pointer;
                    text-align: center;
                }
                .errors a:hover {
                    background-color: #0077ea;
                }
                
@media only screen and (max-width: 900px) {
    #mainHeader {
            display: block;
            width: 320px;
            height: auto;
            margin-left: auto;
            margin-right: auto;
            border-bottom: none;
        }
            .leftLogo {
                display: block;
                float: none;
                width: 140px;
                height: 30px;
                margin-top: 20px;
                margin-left: auto;
                margin-right: auto;
            }
        .navContainer {
            display: block;
            float: none;
            width: 320px;
            height: auto;
        }
            .navBar {
                display: block;
                width: 320px;
                height: 35px;
                margin-top: 30px;
            }
            .navBar a {
                display: inline-block;
                float: left;
                width: 270px;
                height: 35px;
                background-color: #1e90ff;
                color: white;
                font-size: 12px;
                line-height: 37px;
                text-align: center;
                font-family: Gotham Book, Verdana, Helvetica;
            }
            .navBar a:hover {
                color: white;
            }
            .navBar a:not(:first-child) {
                display: none;
            }
            .navBar a.icon {
                display: inline-block;
                float: left;
                width: 50px;
                text-align: center;
            }
            .navBar.responsive {
                display: block;
                width: 320px;
                height: auto;
                margin-top: 30px;
                position: relative;
            }
            .navBar.responsive .icon {
                position: absolute;
                right: 0;
                top: 0;
            }
            .navBar.responsive a {
                float: none;
                display: block;
                width: 320px;
                height: 35px;
                border-bottom: 1px solid white;
                text-align: center;
                background-color: #1e90ff;
                color: white;
            }
            .navBar.responsive a:hover {
                background-color: #0077ea;
            }

}
    </style>
    <script type="text/javascript">
        function myFunction() {
            var x = document.getElementById("mynavBar");
            if (x.className === "navBar") {
                x.className += " responsive";
            } else {
                x.className = "navBar";
            }
        }
    </script>
    </head>
    
    <body>
<div id="mainHeader">
    <div class="leftLogo">
        <img src="images/proto-logo-30.png" alt="The Prototyp Logo"/>
        <span class="headerName">Prototyp</span>
    </div>
    <div class="navContainer">
        <div class="navBar" id="mynavBar">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Members</a>
            <a href="#">Contact</a>
            <a href="#">Login</a>
            <a href="javascript:void(0);" style="font-size: 15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </div>
    </div>
</div>
        
        <div id="loginContainer">
            <div class="topSection">
                <div class="imageContainer">
                    <img src="images/proto-logo-60.png" />
                    <div class="topHeader">Prototyp</div>
                    <div class="topSubheader">For Athletes Everywhere</div>
                </div>
            </div>
                <div class="errors">
                            <a href="#" onclick="history.back();">Return to Profile</a><br/>

            <?php
                session_start();
                                
                define("DB_HOST", "localhost");
                define("DB_USER", "theproto_test");
                define("DB_PASS", ")@?xCqMD,;V2");
                define("DB_NAME", "theproto_test");
                                
                // Create connection
                $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
                        
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                            
                    if ($result = mysqli_query($conn, "SELECT scholarship1, scholarship2, scholarship3, scholarship4, scholarship5, scholarship6, scholarship7, scholarship8, scholarship9, scholarship10, date1, date2, date3, date4, date4, date5, date6, date7, date8, date9, date10 FROM scholarships")) {
                        $row_cnt = mysqli_num_rows($result);
                        
                        if (($row_cnt) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                                
                            if ($row['scholarship10'] != null) {
                                $sql = mysqli_query($conn, "UPDATE scholarships SET scholarship10 = NULL, date10 = NULL WHERE scholarship10 IS NOT NULL");
                                echo "Record deleted successfully";
                            }
                            if (($row['scholarship10'] == null) AND ($row['scholarship9'] != null)) {
                                $sql = mysqli_query($conn, "UPDATE scholarships SET scholarship9 = NULL, date9 = NULL WHERE scholarship10 IS NULL");
                                echo "Record deleted successfully";
                            }
                            if (($row['scholarship9'] == null) AND ($row['scholarship8'] != null)) {
                                $sql = mysqli_query($conn, "UPDATE scholarships SET scholarship8 = NULL, date8 = NULL WHERE scholarship9 IS NULL");
                                echo "Record deleted successfully";
                            }
                            if (($row['scholarship8'] == null) AND ($row['scholarship7'] != null)) {
                                $sql = mysqli_query($conn, "UPDATE scholarships SET scholarship7 = NULL, date7 = NULL WHERE scholarship8 IS NULL");
                                echo "Record deleted successfully";
                            }
                            if (($row['scholarship7'] == null) AND ($row['scholarship6'] != null)) {
                                $sql = mysqli_query($conn, "UPDATE scholarships SET scholarship6 = NULL, date6 = NULL WHERE scholarship7 IS NULL");
                                echo "Record deleted successfully";
                            }
                            if (($row['scholarship6'] == null) AND ($row['scholarship5'] != null)) {
                                $sql = mysqli_query($conn, "UPDATE scholarships SET scholarship5 = NULL, date5 = NULL WHERE scholarship6 IS NULL");
                                echo "Record deleted successfully";
                            }
                            if (($row['scholarship5'] == null) AND ($row['scholarship4'] != null)) {
                                $sql = mysqli_query($conn, "UPDATE scholarships SET scholarship4 = NULL, date4 = NULL WHERE scholarship5 IS NULL");
                                echo "Record deleted successfully";
                            }
                            if (($row['scholarship4'] == null) AND ($row['scholarship3'] != null)) {
                                $sql = mysqli_query($conn, "UPDATE scholarships SET scholarship3 = NULL, date3 = NULL WHERE scholarship4 IS NULL");
                                echo "Record deleted successfully";
                            }
                            if (($row['scholarship3'] == null) AND ($row['scholarship2'] != null)) {
                                $sql = mysqli_query($conn, "UPDATE scholarships SET scholarship2 = NULL, date2 = NULL WHERE scholarship3 IS NULL");
                                echo "Record deleted successfully";
                            }
                            if (($row['scholarship2'] == null) AND ($row['scholarship1'] != null)) {
                                echo "Please choose 'Delete All' to create a new list";
                            }
                            }
                        }
                        
                        else {
                                echo "Error while updating database";
                            }
                            echo '<div class="hide_1" style="display: none;">' . '</div>';
                            
                            mysqli_free_result($result);
                    }
                

                mysqli_close($conn);
            ?>
            
                </div>
            </div>
        </div>
    </body>
</html>

