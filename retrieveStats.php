<html>
    <head>
        <title></title>

        <style>
        .retrieveStats {
                        display: block;
                        width: 320px;
                        height: auto;
                        margin-left: auto;
                        margin-right: auto;
                        margin-top: 15px;
                        background-color: #e0e0e0;
                    }
            .row {
                display: block;
                width: 290px;
                height: 70px;
                margin-left: auto;
                margin-right: auto;
                background-color: #e0e0e0;
            }
            .row2 {
                display: block;
                width: 290px;
                height: 20px;
                padding-top: 15px;
                margin-left: auto;
                margin-right: auto;
                background-color: #e0e0e0;
            }
                .row2_a {
                    display: block;
                    float: none;
                    width: 240px;
                    height: 20px;
                    padding-left: 10px;
                    font-family: 'Muli', sans-serif;
                    font-size: 10px;
                    font-weight: 600;
                    font-style: normal;
                    letter-spacing: 0.2px;
                    line-height: 20px;
                    text-align: center;
                    color: #3b3b3b;
                    overflow: hidden; 
                    background-color: #e0e0e0;
                }
                

            .hide_1 {
                display: block;
                width: 320px;
                height: 35px;
                margin-left: auto;
                margin-right: auto;
                margin-top: 25px;
                background-color: #e0e0e0;
            }
                        #reset2 {
                            display: inline-block;
                            float: left;
                            width: 140px;
                            height: 35px;
                            margin-left: 15px;
                            margin-top: 0px;
                            background-color: #cc0000;
                            color: white;
                            font-size: 12px;
                            font-weight: 400;
                            letter-spacing: 0.5px;
                            line-height: 32px;
                            border: none;
                            border-radius: 5px;
                            cursor: pointer;
                            outline: 0;
                            outline-offset: 0;
                            background-image: none;
                            -webkit-box-shadow: none;
                            box-shadow: none;
                        }
                        #reset2:hover {
                            background-color: #e53d00;
                            color: white;
                        }
                        #reset3 {
                            display: inline-block;
                            float: left;
                            width: 140px;
                            height: 35px;
                            margin-left: 10px;
                            background-color: #cc0000;
                            color: white;
                            font-size: 12px;
                            font-weight: 400;
                            letter-spacing: 0.5px;
                            line-height: 32px;
                            border: none;
                            border-radius: 5px;
                            cursor: pointer;
                            outline: 0;
                            outline-offset: 0;
                            background-image: none;
                            -webkit-box-shadow: none;
                            box-shadow: none;
                        }
                        #reset3:hover {
                            background-color: #e53d00;
                            color: white;
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
            
            $sql = "SELECT college1, college2, college3, college4, college5, college6, college7, college8, college9, college10, sports1, sports2, sports3, sports4, sports5, sports6, sports7, sports8, sports9, sports10, logo1, logo2, logo3, logo4, logo5, logo6, logo7, logo8, logo9, logo10, updated FROM colleges";
            $result = mysqli_query($conn, $sql);
            
                
                
                if ($row['stats'] == "") {
                    echo '<div class="empty">' . '<div class="emptyText">' . "Your statistics are currently empty." . '</div>' . '</div>';
                }
            
            
            mysqli_close($conn);
        ?>
        
    </body>
</html>
