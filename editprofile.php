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
            input {
                display: block;
                width: 265px;
                height: 35px;
                margin-left: auto;
                margin-right: auto;
                margin-top: 15px;
                padding-left: 10px;
                background-color: white;
                border: 1px solid #e0e0e0;
                outline: none;
                font-size: 11px;
                font-family: Gotham Book, Verdana, Helvetica;
            }
                ::-webkit-input-placeholder { /* Chrome/Opera/Safari */
                    font-family: Gotham Book, Verdana, Helvetica;
                    font-size: 11px;
                    color: #e0e0e0;
                }
                ::-moz-placeholder { /* Firefox 19+ */
                    font-family: Gotham Book, Verdana, Helvetica;
                    font-size: 11px;
                    color: #e0e0e0;
                }
                :-ms-input-placeholder { /* IE 10+ */
                    font-family: Gotham Book, Verdana, Helvetica;
                    font-size: 11px;
                    color: #e0e0e0;
                }
                :-moz-placeholder { /* Firefox 18- */
                    font-family: Gotham Book, Verdana, Helvetica;
                    font-size: 11px;
                    color: #e0e0e0;
                }
            
        </style>
    </head>
    <body>
        <?php
            session_start();
                    
            require_once "includes/define.php";
                    
            // Create connection
            $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            
            if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
            }
            
            $sql = "SELECT fname, lname, bdate, username FROM users";
            $result = mysqli_query($conn, $sql);
            
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        
                            echo '<input type="text" name="fname" placeholder="Change First Name..."/>';
                            echo '<input type="text" name="lname" placeholder="Change Last Name..."/>';
                            echo '<input type="text" name="bdate" placeholder="Change Birthdate (yyyy/mm/dd)..."/>';
                        
                    }
                }
                
            
            mysqli_close($conn);
        ?>
        
    </body>
</html>
