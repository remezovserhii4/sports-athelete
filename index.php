<!DOCTYPE html>

<html>
<head>
    <title>The Prototyp | Prep Athletics Network</title>
    <link href="https://fonts.googleapis.com/css?family=Muli:200,300,400,600,700,800,900" rel="stylesheet">
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="High school athletes keep friends, family, and fans in the know regarding their college decisions, statistics, and commitment status.">
    <meta name=viewport content="width=device-width, initial-scale=1">
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    
    <style>
        
        html {
            font-family: 'Muli', sans-serif;
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
            height: 50px;
            margin-left: auto;
            margin-right: auto;
            background-color: #006ad1;
        }
            .leftLogo {
                display: inline-block;
                float: left;
                width: 200px;
                height: 40px;
                margin-top: 5px;
                margin-left: 25px;
            }
                .leftLogo img {
                    display: inline-block;
                    float: left;
                    padding-top: 5px;
                }
                .headerName {
                    display: inline-block;
                    float: left;
                    width: 100px;
                    height: 40px;
                    margin-left: 10px;
                    color: white;
                    font-size: 20px;
                    letter-spacing: 1.2px;
                    line-height: 40px;
                    font-weight: 600;
                }
        .comingSoon {
            display: block;
            width: 700px;
            height: 100px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 75px;
        }
            .csText {
                display: inline-block;
                float: left;
                width: 220px;
                height: 100px;
                color: #006ad1;
                font-size: 24px;
                font-weight: 200px;
                text-align: center;
                line-height: 100px;
                letter-spacing: 1px;
            }
            .hr1 {
                display: inline-block;
                float: left;
                width: 238px;
                border-top: 2px solid #006ad1;
                margin-top: 50px;
            }
            .hr2 {
                display: inline-block;
                float: left;
                width: 238px;
                border-top: 2px solid #006ad1;
                margin-top: 50px;
            }
        .middleContent {
            display: block;
            width: 700px;
            height: auto;
            margin-left: auto;
            margin-right: auto;
            margin-top: 50px;
            overflow: auto;
        }
            .col {
                display: inline-block;
                float: left;
                width: 140px;
                height: auto;
                background-color: white;
            }
                .colIcon {
                    display: block;
                    width: 140px;
                    height: 100px;
                }
                    .colIcon img {
                        display: block;
                        margin-left: auto;
                        margin-right: auto;
                        padding-top: 20px;
                    }
                .colHeader {
                    display: block;
                    width: 140px;
                    height: 35px;
                    color: #3b3b3b;
                    font-size: 14px;
                    font-weight: 600;
                    text-align: center;
                    line-height: 35px;
                }
                .colText {
                    display: block;
                    width: 130px;
                    height: auto;
                    color: #3b3b3b;
                    font-size: 12px;
                    font-weight: 300;
                    text-align: left;
                    line-height: 20px;
                    padding: 5px;
                }
        .bottomContent {
            display: block;
            width: 700px;
            height: auto;
            margin-left: auto;
            margin-right: auto;
            margin-top: 75px;
            background-color: #006ad1;
            overflow: auto;
        }
            .bottomText {
                display: block;
                width: 600px;
                height: 100px;
                margin-left: auto;
                margin-right: auto;
                color: white;
                font-size: 24px;
                font-weight: 200px;
                line-height: 100px;
                letter-spacing: 1px;
                text-align: center;
            }
        #form {
            display: block;
            width: 700px;
            height: auto;
            margin-top: 35px;
            margin-left: auto;
            margin-right: auto;
        }
        .formContainer {
            display: block;
            width: 700px;
            height: auto;
        }
            .beta {
                display: block;
                width: 700px;
                height: 35px;
                margin-left: auto;
                margin-right: auto;
                color: #3b3b3b;
                font-size: 14px;
                line-height: 35px;
                font-weight: 600;
                text-align: center;
            }
            #emailBeta {
                display: inline-block;
                float: left;
                width: 200px;
                height: 31px;
                margin-left: 168px;
                margin-top: 15px;
                padding-left: 10px;
                background-color: white;
                border: 1px solid #3b3b3b;
                outline: none;
                font-size: 12px;
                font-weight: 600;
                color: #3b3b3b;
                font-family: 'Muli', sans-serif;
                letter-spacing: 0.3px;
            }
                ::-webkit-input-placeholder {
                    font-size: 12px;
                    font-weight: 600;
                    font-family: 'Muli', sans-serif;
                    letter-spacing: 0.2px;
                    color: #3b3b3b;
                }
                ::-moz-placeholder { 
                    font-size: 12px;
                    font-weight: 600;
                    font-family: 'Muli', sans-serif;
                    letter-spacing: 0.2px;
                    color: #3b3b3b;
                }
                :-ms-input-placeholder { 
                    font-size: 12px;
                    font-weight: 600;
                    font-family: 'Muli', sans-serif;
                    letter-spacing: 0.2px;
                    color: #3b3b3b;
                }
                :-moz-placeholder {
                    font-size: 12px;
                    font-weight: 600;
                    font-family: 'Muli', sans-serif;
                    letter-spacing: 0.2px;
                    color: #3b3b3b;
                }
                .submit2 {
                    display: inline-block;
                    float: left;
                    width: 140px;
                    height: 35px;
                    margin-left: 15px;
                    margin-top: 15px;
                    background-color: #006ad1;
                    color: white;
                    font-size: 12px;
                    font-weight: 400;
                    letter-spacing: 0.5px;
                    line-height: 32px;
                    border: none;
                    border-radius: 5px;
                    cursor: pointer
                }
                .submit2:hover {
                    background-color: #1e90ff;
                    color: white;
                }
                .submit2.active.focus,
                .submit2.active:focus,
                .submit2.focus,
                .submit2.focus:active,
                .submit2:active:focus,
                .submit2:focus {
                    outline: 0;
                    outline-offset: 0;
                    background-image: none;
                    -webkit-box-shadow: none;
                    box-shadow: none;
                }
                
@media only screen and (max-width: 900px) {
    #mainHeader {
            width: 100%;
            overflow: auto;
        }
            .leftLogo {
                display: block;
                float: none;
                width: 35%;
                height: 40px;
                margin-top: 10px;
                margin-left: auto;
                margin-right: auto;
            }
                .leftLogo img {
                    padding-top: 0px;
                }
                .headerName {
                    width: auto;
                    height: 30px;
                    line-height: 30px;
                    text-align: center;
                }
        .comingSoon {
            display: block;
            width: 100%;
            margin-top: 25px;
        }
            .csText {
                width: 50%;
                font-size: 20px;
            }
            .hr1 {
                width: 24.5%;
            }
            .hr2 {
                width: 24.5%;
            }
        .middleContent {
            width: 90%;
            margin-top: 50px;
            margin-left: auto;
            margin-right: auto;
        }
            .col {
                display: block;
                float: none;
                width: 100%;
                height: auto;
            }
                .colIcon {
                    width: 100%;
                }
                .colHeader {
                    width: 100%;
                }
                .colText {
                    width: 90%;
                    padding: 5%;
                }
        .bottomContent {
            width: 100%;
            height: 60px;
            margin-top: 50px;
        }
            .bottomText {
                width: 100%;
                height: 50px;
                font-size: 12px;
                line-height: 60px;
            }
        #form {
            width: 100%;
            margin-top: 35px;
        }
        .formContainer {
            width: 100%;
        }
            .beta {
                width: 100%;
            }
            #emailBeta {
                display: block;
                float: none;
                width: 290px;
                margin-left: auto;
                margin-right: auto;
                margin-top: 15px;
            }
                .submit2 {
                    display: block;
                    float: none;
                    width: 140px;
                    height: 35px;
                    margin-left: auto;
                    margin-right: auto;
                    margin-top: 15px;
                    margin-bottom: 35px;
                }
}

    </style>
</head>

<body>

    <div id="mainHeader">
        <div class="leftLogo">
            <img src="images/proto-logo-30.png" alt="The Prototyp Logo"/>
            <span class="headerName">Prototyp</span>
        </div>
    </div>
    
    <div class="comingSoon"><hr class="hr1" /><span class="csText">Coming Soon!</span><hr class="hr2" /></div>
    
    <div class="middleContent">
        <div class="col">
            <div class="colIcon"><img src="images/profile-60.png" /></div>
            <div class="colHeader">Create Profile</div>
            <div class="colText">Whether an Athlete or Fan, create a profile and stay up-to-date in the world of high school athletics.</div>
        </div>
        <div class="col">
            <div class="colIcon"><img src="images/college-60.png" /></div>
            <div class="colHeader">Pick Colleges</div>
            <div class="colText">For athletes making the jump to college, keep fans informed with your top college selections.</div>
        </div>
        <div class="col">
            <div class="colIcon"><img src="images/scholarship-60.png" /></div>
            <div class="colHeader">List Scholarships</div>
            <div class="colText">Receiving a scholarship offer is a big deal! Let the world know by creating a list as the offers roll in.</div>
        </div>
        <div class="col">
            <div class="colIcon"><img src="images/stats-60.png" /></div>
            <div class="colHeader">Update Statistics</div>
            <div class="colText">Legitimate high school statistics are difficult to come by. Take control of yours and get discovered.</div>
        </div>
        <div class="col">
            <div class="colIcon"><img src="images/target-60.png" /></div>
            <div class="colHeader">Target Recruits</div>
            <div class="colText">As fans, we just want to feel "in the know". Target your favorite recruits and get the latest info straight from the source.</div>
        </div>
    </div>
    
    <div class="bottomContent">
        <span class="bottomText">Take Control. Share Your Journey. Get Discovered.</span>
    </div>
    
    <div id="form">
        <div class="beta">Interested in Joining The Prototyp for Beta Testing?</div>
        <div class="formContainer">
            <form action="beta.php" method="post" accept-charset="utf-8">
                <input type="email" id="emailBeta" name="emailBeta" placeholder="Enter Email Address..." required />           
                <input type="submit" class="submit2" value="Submit" />
            </form>    
        </div>
    </div>
    

</body>
</html>