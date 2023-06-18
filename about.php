<!DOCTYPE HTML>
<html>
<head>
    <title>Prototyp Features</title>

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
        <link href="https://fonts.googleapis.com/css?family=Muli:200,300,400,600,700,800,900" rel="stylesheet">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <!-- Javascript -->
		<script src="includes/js/jquery-3.2.1.min.js"></script>
		<script src="includes/js/jquery-ui.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

    <style>
        html {
            font-family: 'Muli', sans-serif;
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
        #topContainer {
            display: inline-block;
            float: left;
            width: 500px;
            height: auto;
            margin-left: 200px;
            margin-top: 100px;
            margin-bottom: 100px;
        }
            #loginContainer {
                display: block;
                width: 320px;
                height: auto;
                margin-left: auto;
                margin-right: auto;
                margin-top: 0px;
            }
                .topHeader {
                    display: block;
                    width: 500px;
                    height: 35px;
                    background-color: #006ad1;
                    color: white;
                    font-size: 14px;
                    font-weight: 400;
                    line-height: 35px;
                    letter-spacing: 0.5px;
                    text-align: center;
                    border-top-left-radius: 5px;
                    border-top-right-radius: 5px;
                }
                .middleSection {
                    display: block;
                    width: 500px;
                    height: auto;
                    padding-bottom: 15px;
                    overflow: auto;
                    background-color: #e0e0e0;
                    border-bottom: 1px solid white;
                }
                .middleImage {
                    display: inline-block;
                    float: left;
                    margin-left: 15px;
                    margin-top: 15px;
                    width: 60px;
                    height: 60px;
                }
                .middleHeader {
                    display: inline-block;
                    float: left;
                    width: 335px;
                    height: 60px;
                    margin-top: 15px;
                    margin-left: 15px;
                    padding-left: 75px;
                    color: #006ad1;
                    font-size: 13px;
                    font-weight: 600;
                    font-family: 'Muli', sans-serif;
                    letter-spacing: 0.4px;
                    line-height: 60px;
                    text-align: left;
                }
                .middleText {
                    display: inline-block;
                    float: left;
                    width: 470px;
                    height: 75px;
                    padding-left: 15px;
                    padding-right: 15px;
                    padding-bottom: 5px;
                    margin-top: 5px;
                    color: #3b3b3b;
                    font-size: 12px;
                    font-weight: 400;
                    font-family: 'Muli', sans-serif;
                    letter-spacing: 0.2px;
                    line-height: 18px;
                    text-align: left;
                }

    #topContainer2 {
        display: inline-block;
        float: left;
        width: 500px;
        height: auto;
        margin-left: 100px;
        margin-top: 100px;
        margin-bottom: 100px;
    }

                
@media only screen and (max-width: 900px) {
    
        #topContainer {
            display: block;
            float: none;
            width: 320px;
            height: auto;
            margin-left: auto;
            margin-right: auto;
            margin-top: 50px;
            margin-bottom: 0px;
        }
            #loginContainer {
                display: block;
                width: 320px;
                height: auto;
                margin-left: auto;
                margin-right: auto;
                margin-top: 0px;
            }
                .topHeader {
                    display: block;
                    width: 320px;
                }
                .middleSection {
                    display: block;
                    float: none;
                    width: 320px;
                }
                .middleHeader {
                    display: inline-block;
                    float: left;
                    width: 215px;
                    height: 60px;
                    margin-top: 15px;
                    margin-left: 15px;
                    padding-left: 15px;
                    color: #006ad1;
                    font-size: 13px;
                    font-weight: 600;
                    font-family: 'Muli', sans-serif;
                    letter-spacing: 0.4px;
                    line-height: 60px;
                    text-align: left;
                }
                .middleText {
                    display: inline-block;
                    float: left;
                    width: 290px;
                    font-size: 11px;

                }
        #topContainer2 {
            display: block;
            float: none;
            width: 320px;
            height: auto;
            margin-left: auto;
            margin-right: auto;
            margin-top: 35px;
            margin-bottom: 0px;
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

    <div class="header">
        <?php include 'includes/header.html';?>
    </div>


<div id="topContainer">
    <div class="loginContainer">
        <div class="topHeader">How The Prototyp Works</div>
        <div class="middleSection">
            <div class="middleImage"><img src="images/profile-60.png" /></div>
            <div class="middleHeader">Create A Profile</div>
            <div class="middleText">Whether an Athlete or Fan, create a customized profile and stay up-to-date in the world of high school athletics. Athletes, both male and female, as well as any caliber are welcome.</div>
        </div>
        <div class="middleSection">
            <div class="middleImage"><img src="images/college-60.png" /></div>
            <div class="middleHeader">Pick Colleges</div>
            <div class="middleText">For athletes making the jump to college, keeps friends, family, and fans informed with your top college selections. From a D-I powerhouse to a D-III community college, each level of athletic competition is important.</div>
        </div>
        <div class="middleSection">
            <div class="middleImage"><img src="images/scholarship-60.png" /></div>
            <div class="middleHeader">List Scholarships</div>
            <div class="middleText">Receiving a scholarship to attend college is a big deal! Let the world know by including scholarship offers along with colleges that make the cut for your top 10.</div>
        </div>
        <div class="middleSection">
            <div class="middleImage"><img src="images/stats-60.png" /></div>
            <div class="middleHeader">Update Statistics</div>
            <div class="middleText">Legitimate statistics for high school athletes are difficult to find, so take control of yours and get discovered.</div>
        </div>
        <div class="middleSection">
            <div class="middleImage"><img src="images/target-60.png" /></div>
            <div class="middleHeader">Target Recruits</div>
            <div class="middleText">As fans, we just want to feel "in the know". Target your favorite recruits or those flying under the radar and get the latest information straight from the source. Don't rely on "sources" ever again!</div>
        </div>
    </div>
</div>

<div id="topContainer2">
    <div class="loginContainer">
            <div class="topHeader">Supported Prep Sports</div>
        <div class="middleSection">
            <div class="middleImage"><img src="images/football.png" /></div>
            <div class="middleHeader">Football</div>

        </div>
        <div class="middleSection">
            <div class="middleImage"><img src="images/basketball.png" /></div>
            <div class="middleHeader">Men's & Women's Basketball</div>

        </div>
        <div class="middleSection">
            <div class="middleImage"><img src="images/baseball.png" /></div>
            <div class="middleHeader">Baseball & Softball</div>

        </div>
        <div class="middleSection">
            <div class="middleImage"><img src="images/soccer.png" /></div>
            <div class="middleHeader">Men's & Women's Soccer</div>

        </div>
        <div class="middleSection">
            <div class="middleImage"><img src="images/golf.png" /></div>
            <div class="middleHeader">Men's & Women's Golf</div>

        </div>
    </div>
</div>

<div id="topContainer2">
    <div class="loginContainer">
            

                </div>
    </div>
</div>

</body>
</html>
