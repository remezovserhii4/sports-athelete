
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
                    
            require_once "includes/define.php";
 			require_once "classes/pdo.colleges.php";   
               
               
            $db = new Colleges();  
            
            if ($db->getusercolleges($_SESSION['userid'])){

		    	$info = $db->resultset();
			    foreach ($info as $row) {
					echo "<option data-src='images/colleges/".$row['image']."' value='".$row['id']."'>".$row['title']."</option>";
                	//echo $row['title']."\n";              
				}		
			}        

        ?>        
  
        
    </body>
</html>
