<?php

	session_start();
	if (!isset($_SESSION['username'] )) {
	    header("Location: login.php"); //login in AdminLogin.php
	}
	require_once "includes/define.php";
	$user_row = null;
?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $user_row['fname'] . "'s" . " Profile"?></title>
        
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
                    display: block;
                    width: 1160px;
                    height: 35px;
                    margin-left: 50px;
                    margin-top: 50px;
                }
        #hiddenContainer {
            overflow: hidden;
        }
        #relative {
            display: inline-block;
            float: left;
            width: 840px;
            height: auto;
            margin-left: 0px;
            margin-top: 50px;
            position: relative;
            padding-bottom: 500em;
            margin-bottom: -500em;
        }
        #targetBoard {
            position: absolute;
            height: auto;
            top: 0;
            left: 0;
            background-color: white;
            padding-bottom: 500em;
            margin-bottom: -500em;
        }
        #topCollegesContainer {
            display: inline-block;
            float: left;
            width: 320px;
            height: auto;
            margin-left: 200px;
            margin-top: 50px;
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
                    width: 320px;
                    height: 50px;
                    background-color: #006ad1;
                    color: white;
                    font-size: 14px;
                    font-weight: 400;
                    line-height: 50px;
                    letter-spacing: 0.5px;
                    text-align: center;
                    border-top-left-radius: 5px;
                    border-top-right-radius: 5px;
                }
                .middleSection {
                    display: block;
                    width: 320px;
                    height: auto;
                    overflow: auto;
                    background-color: #e0e0e0;
                }
            
                ::-webkit-input-placeholder {
                    font-size: 10px;
                    font-family: 'Muli', sans-serif;
                    letter-spacing: 0.2px;
                    color: black;
                }
                ::-moz-placeholder { 
                    font-size: 10px;
                    font-family: 'Muli', sans-serif;
                    letter-spacing: 0.2px;
                    color: black;
                }
                :-ms-input-placeholder { 
                    font-size: 10px;
                    font-family: 'Muli', sans-serif;
                    letter-spacing: 0.2px;
                    color: black;
                }
                :-moz-placeholder {
                    font-size: 10px;
                    font-family: 'Muli', sans-serif;
                    letter-spacing: 0.2px;
                    color: black;
                }

    #topCollegesContainer2 {
        display: inline-block;
        float: left;
        width: 320px;
        height: auto;
        margin-left: 100px;
        margin-top: 0px;
        margin-bottom: 100px;
    }

        #loginContainerTop {
            display: block;
            width: 318px;
            height: auto;
            background-color: white;
            border: 1px solid #e0e0e0;
        }
        #loginContainerA {
            display: block;
            width: 318px;
            height: auto;
            margin-top: 15px;
            background-color: white;
            border: 1px solid #e0e0e0;
        }
        #loginWrapper, #loginWrapper2, #loginWrapper3, #loginWrapper6 {
            display: block;
            width: 318px;
            height: auto;
            margin-top: 0px;
        }
            #loginContainer2 {
                display: block;
                width: 320px;
                height: auto;
                margin-top: 15px;
                background-color: #e0e0e0;
            }
            #loginContainer3 {
                display: block;
                width: 320px;
                height: auto;
                margin-top: 0px;
                background-color: #e0e0e0;
            }
            .middleSection2 {
                display: block;
                width: 318px;
                height: auto;
                margin-top: 15px;
                overflow: auto;
                background-color: #e0e0e0;
                }
                .middleHeader {
                    display: block;
                    width: 275px;
                    height: 35px;
                    margin-left: auto;
                    margin-right: auto;
                    margin-bottom: 15px;
                    color: white;
                    background-color: #006ad1;
                    font-size: 11px;
                    line-height: 36px;
                    text-align: center;
                }
                .middleHeader2 {
                    display: block;
                    width: 275px;
                    height: 35px;
                    margin-top: 15px;
                    margin-left: auto;
                    margin-right: auto;
                    color: black;
                    background-color: white;
                    font-size: 11px;
                    line-height: 36px;
                    text-align: center;
                }
                    
        #showHide {
            display: none;
        }
                #realtxt, #realtxt2 {
                    display: block;
                    width: 262px;
                    height: 32px;
                    margin-left: auto;
                    margin-right: auto;
                    margin-top: 15px;
                    padding-left: 10px;
                    background-color: white;
                    border: 1px solid #e0e0e0;
                    color: black;
                    font-size: 11px;
                    line-height: 37px;
                    font-family: 'Muli', sans-serif; 
                    -webkit-appearance: none;
                    -webkit-border-radius: 0px;
                    outline: none;
                }
                
                #commitmentDate {
                    display: block;
                    width: 280px;
                    height: 35px;
                    margin-left: auto;
                    margin-right: auto;
                    margin-top: 10px;
                    padding-left: 10px;
                    background-color: white;
                    color: black;
                    font-size: 10px;
                    font-family: 'Muli', sans-serif; 
                    -webkit-appearance: none;
                    -webkit-border-radius: 0px;
                    outline: none;
                    border: none;
                    box-shadow: none;
                    outline: 0;
                }

                .items, .items2, .items3 {
                    display: block;
                    width: 318px;
                    height: auto;
                    margin-top: 0px;
                    margin-bottom: 25px;
                }
                ul {
                    display: block;
                    width: 275px;
                    height: auto;
                    margin-left: auto;
                    margin-right: auto;
                    padding: 0;
                    list-style-type: none;
                }
                li {
                    display: block;
                    list-style: none;
                    padding-left: 0px;
                    width: 275px;
                    height: 70px;
                    margin-left: auto;
                    margin-right: auto;
                    border-bottom: 1px solid #9e9e9e;
                }
                
                        #deletesubmit2 {
                            display: block;
                            width: 275px;
                            height: 35px;
                            margin-top: 0px;
                            margin-left: auto;
                            margin-right: auto;
                        }
                        #deleteall2 {
                            display: inline-block;
                            float: left;
                            width: 140px;
                            height: 35px;
                            margin-left: 15px;
                            margin-top: 10px;
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
                        #deleteall2:hover {
                            background-color: #e53d00;
                            color: white;
                        }
                .submit {
                    display: inline-block;
                    float: left;
                    width: 140px;
                    height: 35px;
                    margin-left: 10px;
                    margin-top: 35px;
                    background-color: #006ad1;
                    color: white;
                    font-size: 12px;
                    font-weight: 400;
                    letter-spacing: 0.5px;
                    line-height: 32px;
                    border: none;
                    border-radius: 5px;
                    cursor: pointer;
                }
                .submit2 {
                    display: inline-block;
                    float: left;
                    width: 130px;
                    height: 35px;
                    margin-top: 15px;
                    margin-bottom: 15px;
                    margin-left: 15px;
                    border: none;
                    border-radius: 0px;
                    background-color: white;
                    font-family: 'Muli', sans-serif; 
                    font-size: 11px;
                    line-height: 32px;
                    color: black;
                    box-shadow: none;
                    outline: 0;
                    cursor: pointer;
                }
                .submit:hover, .submit2:hover {
                    background-color: #1e90ff;
                    color: white;
                }
                .submit.active.focus, .submit2.active.focus,
                .submit.active:focus, .submit2.active:focus,
                .submit.focus, .submit2.focus,
                .submit.focus:active, .submit2.focus:active,
                .submit:active:focus, .submit2:active:focus,
                .submit:focus, .submit2:focus {
                    outline: 0;
                    outline-offset: 0;
                    background-image: none;
                    -webkit-box-shadow: none;
                    box-shadow: none;
                }
                
                #toggle2, #toggle3 {
                    display: block;
                    width: 275px;
                    height: 35px;
                    margin-top: 15px;
                    margin-bottom: 15px;
                    background-color: #e0e0e0;
                    color: black;
                    border: none;
                    border-radius: 0px;
                    font-family: 'Muli', sans-serif; 
                    font-size: 11px;
                    line-height: 37px;
                    text-decoration: none;
                    text-align: center;
                    box-shadow: none;
                    outline: 0;
                    cursor: pointer;
                }
                #toggle2:hover, #toggle3:hover {
                    background-color: #006ad1;
                    color: white;
                }
                #toggle, #toggle4, #toggle6, #toggle7, #toggle8, #toggle10 {
                    display: block;
                    width: 290px;
                    height: 35px;
                    margin-left: auto;
                    margin-right: auto;
                    margin-top: 15px;
                    margin-bottom: 15px;
                    background-color: #006ad1;
                    color: white;
                    font-size: 12px;
                    font-weight: 400;
                    text-align: center;
                    text-decoration: none;
                    letter-spacing: 0.5px;
                    line-height: 35px;
                    border: none;
                    border-radius: 5px;
                    cursor: pointer;
                }
                #toggle:hover, #toggle4:hover, #toggle6:hover, #toggle7:hover, #toggle8:hover, #toggle10:hover {
                    background-color: #1e90ff;
                    color: white;
                }
                #toggle9 {
                    display: block;
                    width: 150px;
                    height: 35px;
                    margin-left: 235px;
                    margin-top: 0px;
                    margin-bottom: 0px;
                    background-color: #006ad1;
                    color: white;
                    font-size: 12px;
                    font-weight: 400;
                    text-align: center;
                    text-decoration: none;
                    letter-spacing: 0.5px;
                    line-height: 35px;
                    border: none;
                    border-radius: 5px;
                    cursor: pointer;
                }
                #toggle4:hover, #toggle7:hover, #toggle8:hover, #toggle9:hover {
                    background-color: #1e90ff;
                    color: white;
                }
                    #time, #city2 {
                        display: inline-block;
                        float: left;
                        width: 175px;
                        height: 37px;
                        margin-left: 10px;
                        margin-top: 10px;
                        margin-bottom: 0px;
                        padding-left: 10px;
                        background-color: white;
                        border: none;
                        outline: none;
                        font-size: 10px;
                        font-family: 'Muli', sans-serif;
                        letter-spacing: 0.2px;
                        -webkit-appearance: none;
                        -webkit-border-radius: 0px;
                        border: 0px;
                        outline: 0px;
                    }
                    #state2, #homeaway, #result, #getFname {
                        display: inline-block;
                        float: left;
                        width: 186px;
                        height: 37px;
                        margin-left: 10px;
                        margin-top: 10px;
                        margin-bottom: 0px;
                        padding-left: 10px;
                        background-color: white;
                        border: none;
                        outline: none;
                        font-size: 10px;
                        font-family: 'Muli', sans-serif;
                        letter-spacing: 0.2px;
                        -webkit-appearance: none;
                        -webkit-border-radius: 0px;
                        border: 0px;
                        outline: 0px;
                    }
            .statsContainer {
                display: block;
                margin-top: 35px;
            }
            .statsContainer1 {
                display: block;
            }
                
                
                
                
                
                
                
/* Profile CSS */

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
                    font-family: 'Muli', sans-serif;
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
            #highschool {
                display: inline-block;
                float: left;
                width: 175px;
                height: 35px;
                margin-left: 10px;
                margin-top: 10px;
                padding-left: 10px;
                background-color: white;
                border: none;
                outline: none;
                font-size: 10px;
                font-family: 'Muli', sans-serif;
                letter-spacing: 0.2px;
                }
            #coach {
                display: inline-block;
                float: left;
                width: 175px;
                height: 35px;
                margin-left: 10px;
                margin-top: 10px;
                padding-left: 10px;
                background-color: white;
                border: none;
                outline: none;
                font-size: 10px;
                font-family: 'Muli', sans-serif;
                letter-spacing: 0.2px;
                }
            #bdate {
                display: inline-block;
                float: left;
                width: 175px;
                height: 35px;
                margin-left: 10px;
                margin-top: 10px;
                padding-left: 10px;
                background-color: white;
                border: none;
                outline: none;
                font-size: 10px;
                font-family: 'Muli', sans-serif;
                letter-spacing: 0.2px;
            }
            #gradyear {
                display: inline-block;
                float: left;
                width: 175px;
                height: 35px;
                margin-left: 10px;
                margin-top: 10px;
                padding-left: 10px;
                background-color: white;
                border: none;
                outline: none;
                font-size: 10px;
                font-family: 'Muli', sans-serif;
                letter-spacing: 0.2px;
                }
            #height {
                display: inline-block;
                float: left;
                width: 175px;
                height: 35px;
                margin-left: 10px;
                margin-top: 10px;
                padding-left: 10px;
                background-color: white;
                border: none;
                outline: none;
                font-size: 10px;
                font-family: 'Muli', sans-serif;
                letter-spacing: 0.2px;
                }
            #city, #opponent, #score {
                display: inline-block;
                float: left;
                width: 175px;
                height: 35px;
                margin-left: 10px;
                margin-top: 10px;
                padding-left: 10px;
                background-color: white;
                border: none;
                outline: none;
                font-size: 10px;
                font-family: 'Muli', sans-serif;
                letter-spacing: 0.2px;
                }
            #date {
                display: inline-block;
                float: left;
                width: 175px;
                height: 35px;
                margin-left: 10px;
                margin-top: 0px;
                padding-left: 10px;
                background-color: white;
                border: none;
                outline: none;
                font-size: 10px;
                font-family: 'Muli', sans-serif;
                letter-spacing: 0.2px;
            }
            .editCat {
                display: inline-block;
                float: left;
                width: 85px;
                height: 37px;
                margin-left: 15px;
                margin-top: 35px;
                padding-left: 10px;
                border: none;
                outline: none;
                font-size: 10px;
                font-weight: 600;
                font-family: 'Muli', sans-serif;
                letter-spacing: 0.2px;
                line-height: 37px;
            }
            .editCat2 {
                display: inline-block;
                float: left;
                width: 85px;
                height: 37px;
                margin-left: 15px;
                margin-top: 10px;
                padding-left: 10px;
                border: none;
                outline: none;
                font-size: 10px;
                font-weight: 600;
                font-family: 'Muli', sans-serif;
                letter-spacing: 0.2px;
                line-height: 37px;
            }
            .editCat3 {
                display: inline-block;
                float: left;
                width: 20px;
                height: 37px;
                margin-left: 10px;
                margin-top: 35px;
                border: none;
                outline: none;
                font-size: 10px;
                font-weight: 600;
                font-family: 'Muli', sans-serif;
                letter-spacing: 0.2px;
                line-height: 37px;
            }
                        .editCat3 img {
                            display: block;
                            margin-left: auto;
                            margin-right: auto;
                            padding-top: 8px;
                        }
            .editCat4 {
                display: inline-block;
                float: left;
                width: 20px;
                height: 37px;
                margin-left: 10px;
                margin-top: 10px;
                border: none;
                outline: none;
                font-size: 10px;
                font-weight: 600;
                font-family: 'Muli', sans-serif;
                letter-spacing: 0.2px;
                line-height: 37px;
            }
                        .editCat4 img {
                            display: block;
                            margin-left: auto;
                            margin-right: auto;
                            padding-top: 8px;
                        }
            #profileImage {
                display: inline-block;
                float: left;
                width: 145px;
                height: 35px;
                margin-left: 10px;
                margin-top: 35px;
                padding-left: 10px;
                background-color: white;
                border: none;
                outline: none;
                font-size: 10px;
                font-family: 'Muli', sans-serif;
                letter-spacing: 0.2px;
            }
            #fname {
                display: inline-block;
                float: left;
                width: 175px;
                height: 35px;
                margin-left: 10px;
                margin-top: 10px;
                padding-left: 10px;
                background-color: white;
                border: none;
                outline: none;
                font-size: 10px;
                font-family: 'Muli', sans-serif;
                letter-spacing: 0.2px;
            }
            #lname {
                display: inline-block;
                float: left;
                width: 175px;
                height: 35px;
                margin-left: 10px;
                margin-top: 10px;
                padding-left: 10px;
                background-color: white;
                border: none;
                outline: none;
                font-size: 10px;
                font-family: 'Muli', sans-serif;
                letter-spacing: 0.2px;
            }
            #weight {
                display: inline-block;
                float: left;
                width: 175px;
                height: 35px;
                margin-left: 10px;
                margin-top: 10px;
                padding-left: 10px;
                background-color: white;
                border: none;
                outline: none;
                font-size: 10px;
                font-family: 'Muli', sans-serif;
                letter-spacing: 0.2px;
                }
            #highlight {
                display: inline-block;
                float: left;
                width: 245px;
                height: 35px;
                margin-left: 15px;
                margin-top: 10px;
                margin-bottom: 10px;
                padding-left: 10px;
                background-color: white;
                border: none;
                outline: none;
                font-size: 10px;
                font-family: 'Muli', sans-serif;
                letter-spacing: 0.2px;
            }

            .submit2 {
                    display: inline-block;
                    float: left;
                    width: 140px;
                    height: 35px;
                    margin-left: 10px;
                    margin-top: 35px;
                    background-color: #006ad1;
                    color: white;
                    font-size: 12px;
                    font-weight: 400;
                    letter-spacing: 0.5px;
                    line-height: 32px;
                    border: none;
                    border-radius: 5px;
                    cursor: pointer;
                }
                .submit2:hover {
                    background-color: #1e90ff;
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
                    #deleteSubmit {
                        display: block;
                        width: 320px;
                        height: 35px;
                        margin-top: 15px;
                        margin-left: auto;
                        margin-right: auto;
                    }
                #btnAddCollegesSubmit, #btnSubmit2, #btnAddVisitsSubmit {
                    display: inline-block;
                    float: left;
                    width: 140px;
                    height: 35px;
                    margin-left: 10px;
                    margin-top: 10px;
                    margin-bottom: 15px;
                    background-color: #006ad1;
                    color: white;
                    font-size: 12px;
                    font-weight: 400;
                    letter-spacing: 0.5px;
                    line-height: 32px;
                    border: none;
                    border-radius: 5px;
                    cursor: pointer;
                }
                #btnAddCollegesSubmit:hover, #btnAddVisitsSubmit:hover {
                    background-color: #1e90ff;
                }
                #btnAddCollegesSubmit.active.focus, #btnAddVisitsSubmit.active.focus,
                #btnAddCollegesSubmit.active:focus, #btnAddVisitsSubmit.active:focus,
                #btnAddCollegesSubmit.focus, #btnAddVisitsSubmit.focus,
                #btnAddCollegesSubmit.focus:active, #btnAddVisitsSubmit.focus:active,
                #btnAddCollegesSubmit:active:focus, #btnAddVisitsSubmit:active:focus,
                #btnAddCollegesSubmit:focus, #btnAddVisitsSubmit:focus {
                    outline: 0;
                    outline-offset: 0;
                    background-image: none;
                    -webkit-box-shadow: none;
                    box-shadow: none;
                }
                #btnSubmit2:hover {
                    background-color: #1e90ff;
                }
                #btnSubmit2.active.focus,
                #btnSubmit2.active:focus,
                #btnSubmit2.focus,
                #btnSubmit2.focus:active,
                #btnSubmit2:active:focus,
                #btnSubmit2:focus {
                    outline: 0;
                    outline-offset: 0;
                    background-image: none;
                    -webkit-box-shadow: none;
                    box-shadow: none;
                }
                #reset {
                    display: inline-block;
                    float: left;
                    width: 140px;
                    height: 35px;
                    margin-left: 15px;
                    margin-top: 35px;
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
                #reset:hover {
                    background-color: #e53d00;
                }
                #addCollege, #addVisit {
                    display: inline-block;
                    float: left;
                    width: 140px;
                    height: 35px;
                    margin-left: 10px;
                    margin-top: 35px;
                    margin-bottom: 15px;
                    background-color: #006ad1;
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
                #addCollege:hover, #addVisit:hover {
                    background-color: #1e90ff;
                }
                #addItem2 {
                    display: inline-block;
                    float: left;
                    width: 140px;
                    height: 35px;
                    margin-left: 10px;
                    margin-top: 35px;
                    margin-bottom: 15px;
                    background-color: #006ad1;
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
                
                #addItem2:hover {
                    background-color: #1e90ff;
                }
                        #deleteall {
                            display: inline-block;
                            float: left;
                            width: 140px;
                            height: 35px;
                            margin-left: 15px;
                            margin-top: 10px;
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
                        #deleteall:hover {
                            background-color: #e53d00;
                            color: white;
                        }
                    #searchresults, #searchresults3, #searchcolleges, #searchvisits, #idcommitlevel {
                        display: block;
                        width: 290px;
                        height: 37px;
                        padding-left: 10px;
                        background-color: white;
                        margin-left: auto;
                        margin-right: auto;
                        margin-top: 35px;
                        font-size: 10px;
                        font-family: 'Muli', sans-serif;
                        letter-spacing: 0.2px;
                        -webkit-appearance: none;
                        -webkit-border-radius: 0px;
                        border: 0px;
                        outline: 0px;
                    }
                    #sportsresults, #idcommitcollege, #idcommitpercentage, #visitLevel {
                        display: block;
                        width: 290px;
                        height: 37px;
                        padding-left: 10px;
                        background-color: white;
                        margin-left: auto;
                        margin-right: auto;
                        margin-top: 10px;
                        font-size: 10px;
                        font-family: 'Muli', sans-serif;
                        letter-spacing: 0.2px;
                        -webkit-appearance: none;
                        -webkit-border-radius: 0px;
                        border: 0px;
                        outline: 0px;
                    }
                    #scholarshipresults {
                        display: block;
                        width: 290px;
                        height: 37px;
                        padding-left: 10px;
                        background-color: white;
                        margin-left: auto;
                        margin-right: auto;
                        margin-top: 10px;
                        font-size: 10px;
                        font-family: 'Muli', sans-serif;
                        letter-spacing: 0.2px;
                        -webkit-appearance: none;
                        -webkit-border-radius: 0px;
                        border: 0px;
                        outline: 0px;
                    }
                    #interestresults {
                        display: block;
                        width: 290px;
                        height: 37px;
                        padding-left: 10px;
                        background-color: white;
                        margin-left: auto;
                        margin-right: auto;
                        margin-top: 10px;
                        font-size: 10px;
                        font-family: 'Muli', sans-serif;
                        letter-spacing: 0.2px;
                        -webkit-appearance: none;
                        -webkit-border-radius: 0px;
                        border: 0px;
                        outline: 0px;
                    }
                    #visitDate {
                        display: block;
                        width: 280px;
                        height: 37px;
                        padding-left: 10px;
                        background-color: white;
                        margin-left: auto;
                        margin-right: auto;
                        margin-top: 10px;
                        font-size: 10px;
                        font-family: 'Muli', sans-serif;
                        letter-spacing: 0.2px;
                        -webkit-appearance: none;
                        -webkit-border-radius: 0px;
                        border: 0px;
                        outline: 0px;
                    }
                    #errorColleges, #errorVisits {
                        display: block;
                        width: 270px;
                        height: auto;
                        padding-top: 10px;
                        padding-left: 10px;
                        padding-right: 10px;
                        margin-left: auto;
                        margin-right: auto;
                        margin-top: 10px;
                        font-size: 12px;
                        font-weight: 600;
                        color: #cc0000;
                        font-family: 'Muli', sans-serif;
                        letter-spacing: 0.4px;
                        -webkit-appearance: none;
                        -webkit-border-radius: 0px;
                        border: 0px;
                        outline: 0px;
                        text-align: center;
                    }
                    #profilesex, #profilesport, #profileprimary, #profilesecond, #profilestate, #profileclass {
                        display: inline-block;
                        float: left;
                        width: 186px;
                        height: 37px;
                        margin-left: 10px;
                        margin-top: 10px;
                        margin-bottom: 0px;
                        padding-left: 10px;
                        background-color: white;
                        border: none;
                        outline: none;
                        font-size: 10px;
                        font-family: 'Muli', sans-serif;
                        letter-spacing: 0.2px;
                        -webkit-appearance: none;
                        -webkit-border-radius: 0px;
                        border: 0px;
                        outline: 0px;
                    }
        
            #completions, #passattempts, #passyards, #passtds, #passints, #rushattempts, #rushyards, #rushtds, #receptions, #recyards, #rectds, #tackles, #sacks, #defints, #pbu {
                display: inline-block;
                float: left;
                width: 175px;
                height: 35px;
                margin-left: 10px;
                margin-top: 10px;
                padding-left: 10px;
                background-color: white;
                border: none;
                outline: none;
                font-size: 10px;
                font-family: 'Muli', sans-serif;
                letter-spacing: 0.2px;
            }
            #minutesplayed, #pointsscored, #fgmade, #fgattempts, #ftmade, #ftattempts, #tpmade, #tpattempts, #rebounds, #assists, #steals, #blocks, #turnovers {
                display: inline-block;
                float: left;
                width: 175px;
                height: 35px;
                margin-left: 10px;
                margin-top: 10px;
                padding-left: 10px;
                background-color: white;
                border: none;
                outline: none;
                font-size: 10px;
                font-family: 'Muli', sans-serif;
                letter-spacing: 0.2px;
            }
            #atbats, #runsscored, #hits, #homeruns, #rbi, #walks, #strikeouts, #stolenbases, #errors, #inningspitched, #hitsallowed, #earnedruns, #walksp, #strikeoutsp, #homerunsallowed {
                display: inline-block;
                float: left;
                width: 175px;
                height: 35px;
                margin-left: 10px;
                margin-top: 10px;
                padding-left: 10px;
                background-color: white;
                border: none;
                outline: none;
                font-size: 10px;
                font-family: 'Muli', sans-serif;
                letter-spacing: 0.2px;
            }
            #goalsscored, #shots, #saves, #shutouts {
                display: inline-block;
                float: left;
                width: 175px;
                height: 35px;
                margin-left: 10px;
                margin-top: 10px;
                padding-left: 10px;
                background-color: white;
                border: none;
                outline: none;
                font-size: 10px;
                font-family: 'Muli', sans-serif;
                letter-spacing: 0.2px;
            }   
            #courseplayed, #parforcourse, #holesplayed, #golfscore, #fairwayshit, #greenshit, #holesinone, #eagles, #birdies, #bogeys, #doublebogeys, #averageputts, #longestdrive, #longestputt {
                display: inline-block;
                float: left;
                width: 175px;
                height: 35px;
                margin-left: 10px;
                margin-top: 10px;
                padding-left: 10px;
                background-color: white;
                border: none;
                outline: none;
                font-size: 10px;
                font-family: 'Muli', sans-serif;
                letter-spacing: 0.2px;
            } 
                li2 {
                    display: block;
                    list-style: none;
                    padding-left: 0px;
                    padding-top: 10px;
                    width: 275px;
                    height: 330px;
                    margin-left: auto;
                    margin-right: auto;
                    border-bottom: 2px solid #9e9e9e;
                }
                    div20 {
                        display: inline-block;
                        float: left;
                        width: 138px;
                        height: auto;
                        margin-left: 0px;
                        padding-bottom: 10px;
                        overflow: hidden;
                        border-bottom: 1px solid #9e9e9e;
                    }
                        div12 {
                            display: block;
                            width: 138px;
                            height: 22px;
                        }
                        div11 {
                            display: inline-block;
                            float: left;
                            width: 30px;
                            height: 22px;
                            margin-top: 0px;
                            margin-left: 0px;
                            line-height: 22px;
                            text-align: left;
                            font-size: 10px;
                            font-weight: 600;
                            font-family: 'Muli', sans-serif;
                            letter-spacing: 0.1px;
                            color: #9e9e9e;
                        }
                        #date_db, #time_db, #city_db, #state_db {
                            display: inline-block;
                            float: left;
                            width: 106px;
                            height: 20px;
                            margin-top: 0px;
                            margin-left: 0px;
                            font-size: 10px;
                            font-weight: 600;
                            font-family: 'Muli', sans-serif;
                            letter-spacing: 0.1px;
                            line-height: 20px;
                            text-align: left;
                            border: none;
                            background-color: #e0e0e0;
                        }
                    div21 {
                        display: inline-block;
                        float: left;
                        width: 137px;
                        height: auto;
                        padding-bottom: 10px;
                        overflow: hidden;
                        border-bottom: 1px solid #9e9e9e;
                    }
                        div14 {
                            display: block;
                            width: 137px;
                            height: 22px;
                        }
                        div13 {
                            display: inline-block;
                            float: left;
                            width: 36px;
                            height: 22px;
                            margin-top: 0px;
                            margin-left: 0px;
                            line-height: 22px;
                            text-align: left;
                            font-size: 10px;
                            font-weight: 600;
                            font-family: 'Muli', sans-serif;
                            letter-spacing: 0.1px;
                            color: #9e9e9e;
                        }
                        #homeaway_db, #opponent_db, #result_db, #score_db {
                            display: inline-block;
                            float: left;
                            width: 99px;
                            height: 20px;
                            margin-top: 0px;
                            margin-left: 0px;
                            font-size: 10px;
                            font-weight: 600;
                            font-family: 'Muli', sans-serif;
                            letter-spacing: 0.1px;
                            line-height: 20px;
                            text-align: left;
                            border: none;
                            background-color: #e0e0e0;
                        }
                #comment {
                    display: block;
                    width: 270px;
                    height: auto;
                    margin-left: auto;
                    margin-right: auto;
                    margin-top: 35px;
                    padding: 10px;
                    background-color: white;
                    border: none;
                    outline: none;
                    font-size: 10px;
                    font-weight: 400;
                    font-family: 'Muli', sans-serif;
                    letter-spacing: 0.2px;
                }
                #idcommitMessage {
                    display: block;
                    width: 270px;
                    height: auto;
                    margin-left: auto;
                    margin-right: auto;
                    margin-top: 10px;
                    padding: 10px;
                    background-color: white;
                    border: none;
                    outline: none;
                    font-size: 10px;
                    font-weight: 400;
                    font-family: 'Muli', sans-serif;
                    letter-spacing: 0.2px;
                }
                #commitMessage {
                    display: block;
                    width: 270px;
                    height: auto;
                    margin-left: auto;
                    margin-right: auto;
                    margin-top: 10px;
                    padding: 10px;
                    background-color: white;
                    border: none;
                    outline: none;
                    font-size: 10px;
                    font-weight: 400;
                    font-family: 'Muli', sans-serif;
                    letter-spacing: 0.2px;
                }
                #videoTitle {
                    display: inline-block;
                    float: left;
                    width: 280px;
                    height: 35px;
                    margin-left: 15px;
                    margin-top: 35px;
                    padding-left: 10px;
                    background-color: white;
                    border: none;
                    outline: none;
                    font-size: 10px;
                    font-family: 'Muli', sans-serif;
                    letter-spacing: 0.2px;
                }
                #videoDesc {
                    display: block;
                    width: 270px;
                    height: auto;
                    margin-left: auto;
                    margin-right: auto;
                    padding: 10px;
                    background-color: white;
                    border: none;
                    outline: none;
                    font-size: 10px;
                    font-weight: 400;
                    font-family: 'Muli', sans-serif;
                    letter-spacing: 0.2px;
                }
                        
                        
                        
                        
                        
                        
                        
                
@media only screen and (max-width: 900px) {
    
                #topContainer {
                    display: block;
                    width: 320px;
                    height: 35px;
                    margin-left: auto;
                    margin-right: auto;
                    margin-top: 50px;
                }
        #topCollegesContainer {
            display: block;
            float: none;
            width: 320px;
            height: auto;
            margin-left: auto;
            margin-right: auto;
            margin-top: 35px;
            margin-bottom: 0px;
        }
        #relative {
            display: block;
            float: none;
            width: 320px;
            height: auto;
            margin-left: auto;
            margin-right: auto;
            margin-top: 35px;
            position: relative;
            padding-bottom: 500em;
            margin-bottom: -500em;
        }
        #targetBoard {
            display: block;
            margin-top: -35px;
            position: absolute;
            height: auto;
            top: 0;
            left: 0;
            background-color: white;
            padding-bottom: 500em;
            margin-bottom: -500em;
        }
                #toggle9 {
                    margin-left: auto;
                    margin-right: auto;
                }
        #topCollegesContainer2 {
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
        var college_list = [];
        var sports_list = [];
        var scholar_list = [];
        var interest_list = [];
    </script>
    <script type="text/javascript">    
        var college_list = [];
        var visitlevel_list = [];
        var visitdate_list = [];
    </script>
        
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
    <script>
        function toggle() {
        	var ele = document.getElementById("loginWrapper");
        	var text = document.getElementById("toggle");
        	if(ele.style.display == "block") {
            		ele.style.display = "none";
        		text.innerHTML = "Search/Add Colleges to List";
          	}
        	else {
        		ele.style.display = "block";
        		text.innerHTML = "Hide College Search";
        	}
        } 
    </script>
    <script>
        function toggle10() {
        	var ele = document.getElementById("loginWrapper10");
        	var text = document.getElementById("toggle10");
        	if(ele.style.display == "block") {
            		ele.style.display = "none";
        		text.innerHTML = "Search/Add Colleges to List";
          	}
        	else {
        		ele.style.display = "block";
        		text.innerHTML = "Hide College Search";
        	}
        } 
    </script>
    <script>
        function toggle4() {
        	var ele = document.getElementById("loginWrapper3");
        	var text = document.getElementById("toggle4");
        	if(ele.style.display == "block") {
            	ele.style.display = "none";
        		text.innerHTML = "Add/Edit Commitment";
          	}
        	else {
        		ele.style.display = "block";
        		text.innerHTML = "Hide Commitment";
        		//value validate
        		console.log('commitlevel:' + $("#iddbcommitcollege").text());
        		$("#idcommitlevel").val($("#iddbcommitlevel").val()).attr("selected", "selected");
        		$("#idcommitcollege").val($("#iddbcommitcollege").val()).attr("selected", "selected");
        		$("#idcommitpercentage").val($("#iddbcommitpercentage").val()).attr("selected", "selected");
        		$("#idcommitMessage").val($("#iddbcommitMessage").text());
        		
        	}
        } 
    </script>
    <script>
        function toggle5() {
        	var ele = document.getElementById("loginWrapper4");
        	var text = document.getElementById("toggle5");
        	if(ele.style.display == "block") {
            		ele.style.display = "none";
        		text.innerHTML = "Edit Profile";
          	}
        	else {
        		ele.style.display = "block";
        		text.innerHTML = "Hide Profile Edit";
        	}
        } 
    </script>
    <script>
        function toggle6() {
        	var ele = document.getElementById("loginWrapper6");
        	var text = document.getElementById("toggle6");
        	if(ele.style.display == "block") {
            		ele.style.display = "none";
        		text.innerHTML = "Add/Edit Statistics";
          	}
        	else {
        		ele.style.display = "block";
        		text.innerHTML = "Hide Statistics Edit";
        	}
        }
        </script>
    <script>
        function toggle7() {
        	var ele = document.getElementById("loginWrapper7");
        	var text = document.getElementById("toggle7");
        	if(ele.style.display == "block") {
            	ele.style.display = "none";
        		text.innerHTML = "Add/Edit Update";
          	}
        	else {
        		ele.style.display = "block";
        		text.innerHTML = "Hide Update";
				$('#comment').val($('#postcomment').text());
        	}
        } 
    </script>
    <script>
        function toggle8() {
        	var ele = document.getElementById("loginWrapper8");
        	var text = document.getElementById("toggle8");
        	if(ele.style.display == "block") {
            		ele.style.display = "none";
        		text.innerHTML = "Add Highlight(s)";
          	}
        	else {
        		ele.style.display = "block";
        		text.innerHTML = "Hide Highlight(s)";
        	}
        } 
    </script>
    <script>
        function toggle9() {
        	var ele = document.getElementById("targetBoard");
        	var text = document.getElementById("toggle9");
        	if(ele.style.display == "block") {
            		ele.style.display = "none";
        		text.innerHTML = "Target Board";
          	}
        	else {
        		ele.style.display = "block";
        		text.innerHTML = "My Board";
        	}
        } 
    </script>
    <script>
       // document.getElementById('realtxt').onkeyup = searchSel;
            function searchSel() 
                {
                  var input = document.getElementById('realtxt').value.toLowerCase();
                   
                      len = input.length;
                      output = document.getElementById('searchresults').options;
                  for(var i=0; i<output.length; i++)
                      if (output[i].text.toLowerCase().indexOf(input) != -1 ){
                      output[i].selected = true;
                          break;
                      }
                  if (input == '')
                    output[0].selected = true;
                }
    </script>
    <script>
    //document.getElementById('realtxt2').onkeyup = searchSel;
            function searchSel2() 
                {
                  var input = document.getElementById('realtxt2').value.toLowerCase();
                   
                      len = input.length;
                      output = document.getElementById('searchresults2').options;
                  for(var i=0; i<output.length; i++)
                      if (output[i].text.toLowerCase().indexOf(input) != -1 ){
                      output[i].selected = true;
                          break;
                      }
                  if (input == '')
                    output[0].selected = true;
                }
    </script>
    <script type="text/javascript">
     	function onChangeProfileSport(){
     			
				var sport = $('#profilesport option:selected').val();
				
				$("#profileprimary option").remove();
			    $("#profileprimary").append("<option>Choose Primary Sport...</option>");
				$("#profilesecond option").remove();
			    $("#profilesecond").append("<option>Choose Secondary Sport...</option>");			    
				if (sport == 'Football'){
					<?php
						foreach($array_football_pos as $value){
							echo "$('#profileprimary').append('<option>".$value."</option>');";					   	
							echo "$('#profilesecond').append('<option>".$value."</option>');";					   	
						}						
										
					?>			
								
					
				} else if (sport ==  'Basketball'){
					<?php
						foreach($array_basketball_pos as $value){
							echo "$('#profileprimary').append('<option>".$value."</option>');";					   	
							echo "$('#profilesecond').append('<option>".$value."</option>');";					   	
						}						
										
					?>	
				
					
				} else if (sport == 'Baseball'){
					<?php
						foreach($array_baseball_pos as $value){
							echo "$('#profileprimary').append('<option>".$value."</option>');";					   	
							echo "$('#profilesecond').append('<option>".$value."</option>');";					   	
						}						
										
					?>	

										
				} else if (sport == 'Softball'){
					
				} else if (sport == 'Soccer'){
					<?php
						foreach($array_soccer_pos as $value){
							echo "$('#profileprimary').append('<option>".$value."</option>');";					   	
							echo "$('#profilesecond').append('<option>".$value."</option>');";					   	
						}				
					?>	
					
				} else if (sport == 'Golf'){
					
				}	
				
										
		}
		function trim(stringToTrim) {
		    return stringToTrim.replace(/^\s+|\s+$/g,"");
		}	
		
            onload = function(){
            	var staticheight = $("#idSectionHighlights").height();
            	var limit = 950;
            	if (staticheight > limit){
					$('#idSectionHighlights').css('overflow-y', 'scroll');
					$('#idSectionHighlights').css('height', limit + 'px');
				}
				//alert($("#idSectionHighlights").height());	
				//alert('111');
			}
        $(document).ready(function() {
        
            var counter = 1;
            var maxAppend = 0;
            $("#btnAddCollegesSubmit").on("click", function() {
//                    return;
                        if(sports_list) 
                            console.log("sports_list is existed");
                        if(college_list) 
                            console.log("sports_list is existed");
                        if(scholar_list) 
                            console.log("sports_list is existed");
                        if(interest_list) 
                            console.log("sports_list is existed");                        
                        console.log('click submit button' + JSON.stringify(sports_list) + ",,," + JSON.stringify(college_list));
                        
//                                return;
                        
                        
                        $("#btnAddCollegesSubmit").attr('disabled', true);
                        
                            //var test = ;
                            //console.log("session = " + $test);
                		$.ajax({
                                type: "POST",
                                url: "includes/managecollege.php", 
                                data: ({type: 0,
                                		user_id : <?php echo $_SESSION['userid']; ?>, 
                                        'colleges' : college_list, 
                                        'sports':sports_list,
                                        'scholarships':scholar_list,
                                        'interests':interest_list}),
                                cache: false,
                                success: function(result)
                                {	
//                                  console.log("result_frontend = " + JSON.stringify(result));
                                    location.reload();
                                    //$("#btnAddCollegesSubmit").attr('disabled', false);
                                },
                                error: function(result)
                                {
                                    $("#btnAddCollegesSubmit").attr('disabled', false);
                                }
                        });	
            });	
                        

            $("#btnDeletLastCollege").on("click", function() {   
            		$("#btnDeletLastCollege").attr('disabled', true);         
               		$.ajax({
                                type: "POST",
                                url: "includes/managecollege.php", 
                                data: ({type: 2,
                                		user_id : <?php echo $_SESSION['userid']; ?>}),
                                cache: false,
                                success: function(result)
                                {	
//                                  console.log("result_frontend = " + JSON.stringify(result));
                                    location.reload();
                                    //$("#btnAddCollegesSubmit").attr('disabled', false);
                                },
                                error: function(result)
                                {
                                    $("#btnDeletLastCollege").attr('disabled', false);
                                }
                        });	             	
			});
			
            $("#btnDeletAllCollege").on("click", function() {            
            		$("#btnDeletAllCollege").attr('disabled', true);
               		$.ajax({
                                type: "POST",
                                url: "includes/managecollege.php", 
                                data: ({type: 1,
                                		user_id : <?php echo $_SESSION['userid']; ?>}),
                                cache: false,
                                success: function(result)
                                {	
//                                  console.log("result_frontend = " + JSON.stringify(result));
                                    location.reload();
                                    //$("#btnAddCollegesSubmit").attr('disabled', false);
                                },
                                error: function(result)
                                {
                                    $("#btnDeletAllCollege").attr('disabled', false);
                                }
                        });	            	
			});
									
            $("#addCollege").click(function() {
            	var strcollege = $('#searchcolleges').val();
            	var task = $('#searchcolleges option:selected').text();
                var sports = $('#sportsresults').val();
                var scholarship = $('#scholarshipresults').val();
                var strscholarship = $('#scholarshipresults option:selected').text();
                var interest = $('#interestresults').val();
                
                if (strcollege == ""){
					$('#errorColleges').html("Please Select A College");
					return;				
				}  
                if (sports == ""){
					$('#errorColleges').html("Please Select A Sport");
					return;				
				} 
                if (scholarship == ""){
					$('#errorColleges').html("Please Select If Scholarship Was Receieved");
					return;				
				} 
                if (interest == ""){
					$('#errorColleges').html("Please Select A Level of Interest");
					return;				
				} 												             
               // var index = $("#searchcolleges option:selected").index();
                
                
                $("#addCollege").attr('addCollege', true);
                console.log("add college button disalbled");
            	$.ajax({
                    type: "POST",
                    url: "includes/managecollege.php", 
                    data: ({'user_id' : <?php echo $_SESSION['userid']; ?>, 
                            'college' : task,
                            'type':3}),
                    cache: false,
                    success: function(result)
                    {	
                    	console.log("search college result :" + result);
						var cnt = trim(result);
						if (cnt > 0){
						    $('#errorColleges').html("This College Has Already Been Added. Please Select Another Choice");
							return;
						}
                        
                        $("#addCollege").attr('disabled', false);
                        
                        var collegesnum = $('#collegesnum').val();
                        if (collegesnum >= 10){
							$('#errorColleges').html("The Top Colleges List Is Limited To 10 Schools.");
							return;
						}
                        
                    	college_list.push(strcollege);
                    	sports_list.push(sports);
                    	scholar_list.push(strscholarship);
                    	interest_list.push(interest);
                    
                    	var src = $('#searchcolleges').find(":selected").attr('data-src');
                    
                    	var $newLi = $("<li><div1><img src='" + src + "' id='logo" + counter + "' name='logo" + counter + "'/></div1><div2><input type='text' id='college" + counter + "' name='college" + counter + "' value='" + task + "' readonly/></div2><div4><input type='text' id='sports" + counter + "' name='sports" + counter + "' value='" + sports + "' readonly/></div4><div6><input type='text' id='scholarship" + counter + "' name='scholarship" + counter + "' value='" + scholarship + "' readonly/></div6><div5><input type='text' id='interest" + counter + "' name='interest" + counter + "' value='" + interest + "' readonly/></div5></li>");
                        $newLi.attr("id", "newLi" + counter++);
                        $("#tasks").append($newLi);
                        
                        $('#searchcolleges').find(":selected").remove();
                        $('#sportsresults option').prop('selected', function() {
                            return this.defaultSelected;
                        });
                        $('#scholarshipresults option').prop('selected', function() {
                            return this.defaultSelected;
                        });
                        $('#interestresults option').prop('selected', function() {
                            return this.defaultSelected;
                        });
                        
                        $("#searchcolleges option:eq(0)").attr("selected", "selected");
                        $("#sportsresults option:eq(0)").attr("selected", "selected");
                        $("#scholarshipresults option:eq(0)").attr("selected", "selected");
                        $("#interestresults option:eq(0)").attr("selected", "selected");
                        
                        collegesnum++;
                        $('#collegesnum').val(collegesnum);
                                                
                    },
                    error: function(result)
                    {
                        $("#addCollege").attr('disabled', false);
                    }
            	});	
                        
            });

            $('#deleteall').click(function(e) {
                $('#tasks').children().last().remove();
                //$('#profileprimary').append('<option>".$value."</option>');";		
            });
            
            //0619 klose
            $('#profilesport').on('change', function(){
            	onChangeProfileSport();				
			});
			
			//onChangeProfileSport();
        });
    </script>
    <script>
        $(document).ready(function() {
        
            var counter = 1;
            var maxAppend = 0;
            $("#btnAddVisitsSubmit").on("click", function() {
//                    return;
                        if(visitlevel_list) 
                            console.log("visitlevel_list is existed");
                        if(college_list) 
                            console.log("visitlevel_list is existed");
                        if(visitdate_list) 
                            console.log("visitlevel_list is existed");
                        console.log('click submit button' + JSON.stringify(visitlevel_list) + ",,," + JSON.stringify(college_list));
                        
//                                return;
                        
                        
                        $("#btnAddVisitsSubmit").attr('disabled', true);
                        
                            //var test = ;
                            //console.log("session = " + $test);
                		$.ajax({
                                type: "POST",
                                url: "includes/managevisit.php", 
                                data: ({type: 0,
                                		user_id : <?php echo $_SESSION['userid']; ?>, 
                                        'colleges' : college_list, 
                                        'visitlevel':visitlevel_list,
                                        'visitdate':visitdate_list,
                                cache: false,
                                success: function(result)
                                {	
//                                  console.log("result_frontend = " + JSON.stringify(result));
                                    location.reload();
                                    //$("#btnAddVisitsSubmit").attr('disabled', false);
                                },
                                error: function(result)
                                {
                                    $("#btnAddVisitsSubmit").attr('disabled', false);
                                }
                        });	
            });	
                        

            $("#btnDeletLastVisit").on("click", function() {   
            		$("#btnDeletLastVisit").attr('disabled', true);         
               		$.ajax({
                                type: "POST",
                                url: "includes/managevisit.php", 
                                data: ({type: 2,
                                		user_id : <?php echo $_SESSION['userid']; ?>}),
                                cache: false,
                                success: function(result)
                                {	
//                                  console.log("result_frontend = " + JSON.stringify(result));
                                    location.reload();
                                    //$("#btnAddVisitsSubmit").attr('disabled', false);
                                },
                                error: function(result)
                                {
                                    $("#btnDeletLastVisit").attr('disabled', false);
                                }
                        });	             	
			});
			
            $("#btnDeletAllVisit").on("click", function() {            
            		$("#btnDeletAllVisit").attr('disabled', true);
               		$.ajax({
                                type: "POST",
                                url: "includes/managevisit.php", 
                                data: ({type: 1,
                                		user_id : <?php echo $_SESSION['userid']; ?>}),
                                cache: false,
                                success: function(result)
                                {	
//                                  console.log("result_frontend = " + JSON.stringify(result));
                                    location.reload();
                                    //$("#btnAddVisitsSubmit").attr('disabled', false);
                                },
                                error: function(result)
                                {
                                    $("#btnDeletAllVisit").attr('disabled', false);
                                }
                        });	            	
			});
									
            $("#addVisit").click(function() {
            	var strvisit = $('#searchvisits').val();
            	var task = $('#searchvisits option:selected').text();
                var level = $('#visitlevel').val();
                var date = $('#visitdate').val();
                var strdate = $('#visitdate option:selected').text();
                
                if (strvisit == ""){
					$('#errorVisits').html("Please Select A College");
					return;				
				}  
                if (visitlevel == ""){
					$('#errorVisits').html("Please Select Visit Status");
					return;				
				} 
                if (visitdate == ""){
					$('#errorVisits').html("Please Enter Date of Visit");
					return;				
				} 
               // var index = $("#searchvisits option:selected").index();
                
                
                $("#addVisit").attr('addVisit', true);
                console.log("add college button disabled");
            	$.ajax({
                    type: "POST",
                    url: "includes/managevisit.php", 
                    data: ({'user_id' : <?php echo $_SESSION['userid']; ?>, 
                            'college' : task,
                            'type':3}),
                    cache: false,
                    success: function(result)
                    {	
                    	console.log("search college result :" + result);
						var cnt = trim(result);
						if (cnt > 0){
						    $('#errorVisits').html("This College Has Already Been Added. Please Select Another Choice");
							return;
						}
                        
                        $("#addVisit").attr('disabled', false);
                        
                        var visitsnum = $('#visitsnum').val();
                        if (visitsnum >= 10){
							$('#errorVisits').html("The College Visits List Is Limited To 10 Schools.");
							return;
						}
                        
                    	college_list.push(strcollege);
                    	visitlevel_list.push(visitlevel);
                    	visitdate_list.push(strdate);
                    
                    	var src = $('#searchvisits').find(":selected").attr('data-src');
                    
                    	var $newLi = $("<li><div1><img src='" + src + "' id='logo" + counter + "' name='logo" + counter + "'/></div1><div2><input type='text' id='college" + counter + "' name='college" + counter + "' value='" + task + "' readonly/></div2><div4><input type='text' id='visitlevel" + counter + "' name='visitlevel" + counter + "' value='" + visitlevel + "' readonly/></div4><div6><input type='text' id='visitdate" + counter + "' name='visitdate" + counter + "' value='" + visitdate + "' readonly/></div6></li>");
                        $newLi.attr("id", "newLi" + counter++);
                        $("#tasks3").append($newLi);
                        
                        $('#searchvisits').find(":selected").remove();
                        $('#visitLevel option').prop('selected', function() {
                            return this.defaultSelected;
                        });
                        $('#visitDate option').prop('selected', function() {
                            return this.defaultSelected;
                        });
                        
                        $("#searchvisits option:eq(0)").attr("selected", "selected");
                        $("#visitLevel option:eq(0)").attr("selected", "selected");
                        $("#visitDate option:eq(0)").attr("selected", "selected");
                        
                        visitsnum++;
                        $('#visitsnum').val(visitsnum);
                                                
                    },
                    error: function(result)
                    {
                        $("#addVisit").attr('disabled', false);
                    }
            	});	
                        
            });

            $('#deleteall').click(function(e) {
                $('#tasks3').children().last().remove();
                //$('#profileprimary').append('<option>".$value."</option>');";		
            });
            
            //0619 klose
			//onChangeProfileSport();
        });
    </script>
    <script>
        $(document).ready(function(){

        $("#addItem2").click(function(){
            var task1 = $('#date').val();
            var task2 = $('#time').val();
            var task3 = $('#city2').val();
            var task4 = $('#state2').val();
            var task5 = $('#homeaway').val();
            var task6 = $('#opponent').val();
            var task7 = $('#result').val();
            var task8 = $('#score').val();
            
            var task9 = $('#completions').val();
            var task10 = $('#passattempts').val();
            var task11 = $('#passyards').val();
            var task12 = $('#passtds').val();
            var task13 = $('#passints').val();
            var task14 = $('#rushattempts').val();
            var task15 = $('#rushyards').val();
            var task16 = $('#rushtds').val();
            var task17 = $('#receptions').val();
            var task18 = $('#recyards').val();
            var task19 = $('#rectds').val();
            var task20 = $('#tackles').val();
            var task21 = $('#sacks').val();
            var task22 = $('#defints').val();
            var task23 = $('#pbu').val();
            
            var task24 = $('#minutesplayed').val();
            var task25 = $('#pointsscored').val();
            var task26 = $('#fgmade').val();
            var task27 = $('#fgattempts').val();
            var task28 = $('#ftmade').val();
            var task29 = $('#ftattempts').val();
            var task30 = $('#tpmade').val();
            var task31 = $('#tpattempts').val();
            var task32 = $('#rebounds').val();
            var task33 = $('#assists').val();
            var task34 = $('#steals').val();
            var task35 = $('#blocks').val();
            var task36 = $('#turnovers').val();
            
            var task37 = $('#atbats').val();
            var task38 = $('#runsscored').val();
            var task39 = $('#hits').val();
            var task40 = $('#homeruns').val();
            var task41 = $('#rbi').val();
            var task42 = $('#walks').val();
            var task43 = $('#strikeouts').val();
            var task44 = $('#stolenbases').val();
            var task45 = $('#errors').val();
            var task46 = $('#inningspitched').val();
            var task47 = $('#hitsallowed').val();
            var task48 = $('#earnedruns').val();
            var task49 = $('#walksp').val();
            var task50 = $('#strikeoutsp').val();
            var task51 = $('#homerunsallowed').val();
            
            var task52 = $('#courseplayed').val();
            var task53 = $('#parforcourse').val();
            var task54 = $('#holesplayed').val();
            var task55 = $('#golfscore').val();
            var task56 = $('#fairwayshit').val();
            var task57 = $('#greenshit').val();
            var task58 = $('#holesinone').val();
            var task59 = $('#eagles').val();
            var task60 = $('#birdies').val();
            var task61 = $('#bogeys').val();
            var task62 = $('#doublebogeys').val();
            var task63 = $('#averageputts').val();
            var task64 = $('#longestdrive').val();
            var task65 = $('#longestputt').val();
            
            
            
        $("#tasks2").append("<li2><div20><div12><div11>Date:</div11><input type='text' id='date_db' name='date_db' value='" + task1 + "' readonly/></div12><div12><div11>Time:</div11><input type='text' id='time_db' name='time_db' value='" + task2 + "' readonly/></div12><div12><div11>City:</div11><input type='text' id='city_db' name='city_db' value='" + task3 + "' readonly/></div12><div12><div11>State:</div11><input type='text' id='state_db' name='state_db' value='" + task4 + "' readonly/></div12></div20><div21><div14><div13>Locale:</div13><input type='text' id='homeaway_db' name='homeaway_db' value='" + task5 + "' readonly/></div14><div14><div13>Versus:</div13><input type='text' id='opponent_db' name='opponent_db' value='" + task6 + "' readonly/></div14><div14><div13>Result:</div13><input type='text' id='result_db' name='result_db' value='" + task7 + "' readonly/></div14><div14><div13>Score:</div13><input type='text' id='score_db' name='score_db' value='" + task8 + "' readonly/></div14></div21></li2>");
        });

        $('#deleteall2').click(function(e) {
            $('#tasks2').children().last().remove();
            //$('#profileprimary').append('<option>".$value."</option>');";		
        });
        });
        
        function sportSelectCheck(nameSelect)
    {
            if(nameSelect){
                footballOptionValue = document.getElementById("footballOption").value;
            if(footballOptionValue == nameSelect.value){
                document.getElementById("footballDivCheck").style.display = "block";
            }
            else{
                document.getElementById("footballDivCheck").style.display = "none";
            }
        }
            else{
                document.getElementById("footballDivCheck").style.display = "none";
            }
            
            if(nameSelect){
                mbasketballOptionValue = document.getElementById("mbasketballOption").value;
            if(mbasketballOptionValue == nameSelect.value){
                document.getElementById("mbasketballDivCheck").style.display = "block";
            }
            else{
                document.getElementById("mbasketballDivCheck").style.display = "none";
            }
        }
            else{
                document.getElementById("mbasketballDivCheck").style.display = "none";
            }
            
            if(nameSelect){
                wbasketballOptionValue = document.getElementById("wbasketballOption").value;
            if(wbasketballOptionValue == nameSelect.value){
                document.getElementById("wbasketballDivCheck").style.display = "block";
            }
            else{
                document.getElementById("wbasketballDivCheck").style.display = "none";
            }
        }
            else{
                document.getElementById("wbasketballDivCheck").style.display = "none";
            }
            
            if(nameSelect){
                mbaseballOptionValue = document.getElementById("mbaseballOption").value;
            if(mbaseballOptionValue == nameSelect.value){
                document.getElementById("mbaseballDivCheck").style.display = "block";
            }
            else{
                document.getElementById("mbaseballDivCheck").style.display = "none";
            }
        }
            else{
                document.getElementById("mbaseballDivCheck").style.display = "none";
            }
            
            if(nameSelect){
                wsoftballOptionValue = document.getElementById("wsoftballOption").value;
            if(wsoftballOptionValue == nameSelect.value){
                document.getElementById("wsoftballDivCheck").style.display = "block";
            }
            else{
                document.getElementById("wsoftballDivCheck").style.display = "none";
            }
        }
            else{
                document.getElementById("wsoftballDivCheck").style.display = "none";
            }
            
            if(nameSelect){
                msoccerOptionValue = document.getElementById("msoccerOption").value;
            if(msoccerOptionValue == nameSelect.value){
                document.getElementById("msoccerDivCheck").style.display = "block";
            }
            else{
                document.getElementById("msoccerDivCheck").style.display = "none";
            }
        }
            else{
                document.getElementById("msoccerDivCheck").style.display = "none";
            }
            
            if(nameSelect){
                wsoccerOptionValue = document.getElementById("wsoccerOption").value;
            if(wsoccerOptionValue == nameSelect.value){
                document.getElementById("wsoccerDivCheck").style.display = "block";
            }
            else{
                document.getElementById("wsoccerDivCheck").style.display = "none";
            }
        }
            else{
                document.getElementById("wsoccerDivCheck").style.display = "none";
            }
            
            if(nameSelect){
                golfOptionValue = document.getElementById("golfOption").value;
            if(golfOptionValue == nameSelect.value){
                document.getElementById("golfDivCheck").style.display = "block";
            }
            else{
                document.getElementById("golfDivCheck").style.display = "none";
            }
        }
            else{
                document.getElementById("golfDivCheck").style.display = "none";
            }
        }
    </script>
    </head>
    
    <body>

    <div class="header">
        <?php include 'includes/header.html';?>
    </div>




<!--Profile Information-->

<div id="topContainer">
    <form name="newItem" id="newItem">
        <a id="toggle9" href="javascript:toggle9();">Target Board</a>
    </form>
</div>

<div id="topCollegesContainer">
    <div id="loginContainer" style="border-top-left-radius: 5px; border-top-right-radius: 5px;">
    
    <div class="middleSection" style="border-top-left-radius: 5px; border-top-right-radius: 5px;">
            <div class="retrieveProfiles" style="border-top-left-radius: 5px; border-top-right-radius: 5px;">
                <?php include 'retrieveprofiles.php';?>
            </div>
    </div>
    </div>
    <div id="loginWrapper4" style="display: none;">
        <div id="loginContainer" style="margin-top: 35px;">
        <div class="topHeader" style="background-color: #3b3b3b;">Edit Profile</div>
        
        <div class="middleSection">
                <form action="athleteeditprofiles.php" method="post" accept-charset="utf-8">
                        <span class="editCat">Profile Image:</span><input type="text" id="profileImage" name="profileImage" value="<?php echo $user_row['profileImage'];?>"/><span class="editCat3"><img src="images/info-20.png" title="Profile Image must be 320x250 pixels, otherwise, it will be resized to fit.&#013;&#013;Please used a third-party site (tinypic.com) to create image URL." /></span>
                        <span class="editCat2">First Name:</span><input type="text" id="fname" name="fname" value="<?php echo $user_row['fname'];?>"/>
                        <span class="editCat2">Last Name:</span><input type="text" id="lname" name="lname" value="<?php echo $user_row['lname'];?>"/>
                        <span class="editCat2">Birthdate:</span><input type="text" id="bdate" name="bdate" value="<?php echo $user_row['bdate'];?>"/>
                        <span class="editCat2">Sex:</span><select id="profilesex" name="profilesex" />
	                        <option value="">Choose Sex...</option>
	                        <?php
		                        foreach($array_profile_sex as $value){
								   if ($value == $user_row['sex'])
								   		echo  "<option selected>".$value."</option>";
								   else
								   		echo  "<option >".$value."</option>";
								   	
								}
	                        ?>
                        </select>
                        <span class="editCat2">Primary Sport:</span><select id="profilesport" name="profilesport" style="margin-left: 10px;" >
                            <option value="">Choose Primary Sport...</option>
                            <?php
		                        foreach($array_profile_sports as $value){
								   if ($value == $user_row['primarysport'])
								   		echo  "<option selected>".$value."</option>";
								   else
								   		echo  "<option >".$value."</option>";
								   	
								}
	                        ?>
                        </select>
                        <span class="editCat2">Primary Position:</span>
                        <select id="profileprimary" name="profileprimary" style="margin-left: 10px;">
                        	<option value="">Choose Primary Position...</option>
                        	<?php
                        		if ($user_row['primarysport'] == "Football"){
									foreach($array_football_pos as $value){
									   if ($value == $user_row['primposition'])
									   		echo  "<option selected>".$value."</option>";
									   else
									   		echo  "<option >".$value."</option>";
								   	
									}
								} else if ($user_row['primarysport'] == "Basketball"){
									foreach($array_basketball_pos as $value){
									   if ($value == $user_row['primposition'])
									   		echo  "<option selected>".$value."</option>";
									   else
									   		echo  "<option >".$value."</option>";
								   	
									}									
									
								} else if ($user_row['primarysport'] == "Baseball"){
									foreach($array_baseball_pos as $value){
									   if ($value == $user_row['primposition'])
									   		echo  "<option selected>".$value."</option>";
									   else
									   		echo  "<option >".$value."</option>";
								   	
									}									
									
								} else if ($user_row['primarysport'] == "Soccer"){
									foreach($array_soccer_pos as $value){
									   if ($value == $user_row['primposition'])
									   		echo  "<option selected>".$value."</option>";
									   else
									   		echo  "<option >".$value."</option>";
								   	
									}									
								}
                        	?>        
                        </select>
                        <span class="editCat2" style="height: 30px; margin-left: 15px; padding-top: 7px; line-height: 12px;">Secondary Position:</span>
                        <select id="profilesecond" name="profilesecond">
 							<option value="">Choose Primary Position...</option>
							<?php
                        		if ($user_row['primarysport'] == "Football"){
									foreach($array_football_pos as $value){
									   if ($value == $user_row['secposition'])
									   		echo  "<option selected>".$value."</option>";
									   else
									   		echo  "<option >".$value."</option>";
								   	
									}
								} else if ($user_row['primarysport'] == "Basketball"){
									foreach($array_basketball_pos as $value){
									   if ($value == $user_row['secposition'])
									   		echo  "<option selected>".$value."</option>";
									   else
									   		echo  "<option >".$value."</option>";
								   	
									}									
									
								} else if ($user_row['primarysport'] == "Baseball"){
									foreach($array_baseball_pos as $value){
									   if ($value == $user_row['secposition'])
									   		echo  "<option selected>".$value."</option>";
									   else
									   		echo  "<option >".$value."</option>";
								   	
									}									
									
								} else if ($user_row['primarysport'] == "Soccer"){
									foreach($array_soccer_pos as $value){
									   if ($value == $user_row['secposition'])
									   		echo  "<option selected>".$value."</option>";
									   else
									   		echo  "<option >".$value."</option>";
								   	
									}									
								}
                        	?>  							
                        </select>
                        <span class="editCat2">Height (in.):</span><input type="number" id="height" name="height" min="60" max="94"  value="<?php echo $user_row['height'];?>"/>
                        <span class="editCat2">Weight (lbs.):</span><input type="number" id="weight" name="weight" min="85" max="450"  value="<?php echo $user_row['weight'];?>"/>
                        <span class="editCat2">City:</span><input type="text" id="city" name="city" value="<?php echo $user_row['city'];?>"/>
                        <span class="editCat2">State:</span><select id="profilestate" name="profilestate" style="margin-left: 10px;" >
                            <option value="">Choose State...</option>
                            <?php
		                        foreach($array_profile_state as $value){
								   if ($value == $user_row['state'])
								   		echo  "<option selected>".$value."</option>";
								   else
								   		echo  "<option >".$value."</option>";
								   	
								}
	                        ?>
                        </select>
                        <span class="editCat2">High School:</span><input type="text" id="highschool" name="highschool" value="<?php echo $user_row['highschool'];?>"/>
                        <span class="editCat2">Head Coach:</span><input type="text" id="coach" name="coach" value="<?php echo $user_row['coach'];?>"/>
                        <span class="editCat2">Current Class:</span><select id="profileclass" name="profileclass" />
                            <option value="">Choose Current Class...</option>
                            <?php
		                        foreach($array_profile_class as $value){
								   if ($value == $user_row['year'])
								   		echo  "<option selected>".$value."</option>";
								   else
								   		echo  "<option >".$value."</option>";
								   	
								}
	                        ?>
                        </select>
                        <span class="editCat2">Graduation Year:</span><input type="number" id="gradyear" name="gradyear" min="2017" max="2023"  value="<?php echo $user_row['gradyear'];?>"/>
                        
                        
                    <button type="reset" id="reset">Reset</button>
                    <input type="submit" class="submit2" value="Submit" />
                </form>
        </div>
    </div>
    </div>
    
<!--Share Comment-->  
    
    
    <div id="loginContainer" style="margin-top: 35px; border-top-left-radius: 5px; border-top-right-radius: 5px;">
            <div class="middleSection" style="border-top-left-radius: 5px; border-top-right-radius: 5px;">
                    <div class="retrieveUpdates" style="border-top-left-radius: 5px; border-top-right-radius: 5px;">
                        <?php include 'retrieveupdates.php';?>
                    </div>
                        <form name="newItem" id="newItem">
                            <a id="toggle7" href="javascript:toggle7();">Add/Edit Update</a>
                        </form>
            </div>
    </div>
    
    <div id="loginWrapper7" style="display: none;">
        <div id="loginContainer" style="margin-top: 35px;">
            <div class="topHeader" style="background-color: #3b3b3b;">Edit Update</div>
                <div class="middleSection">
                    <form action="athleteupdates.php" method="post" accept-charset="utf-8">
                           <textarea id="comment" name="comment" cols="35" rows="5" maxlength="175" style="resize: none;" placeholder="Share Update..."></textarea>
                           
                            
                        <button type="reset" id="reset">Reset Comment</button>
                        <input type="submit" class="submit2" value="Submit" />
                    </form>
        </div>
    </div>
    </div>
</div>
</div>







<!--Commitment Level/College Choices List-->


<div id="hiddenContainer">
<div id="relative">
<div id="topCollegesContainer2">
    <div id="loginContainer">
        <div class="topHeader">My Commitment Status</div>
    <div class="middleSection">
            <div class="retrieveColleges">
                <?php include 'retrievecommitments.php';?>
            </div>
                    <form name="newItem" id="newItem">
                        <a id="toggle4" href="javascript:toggle4();">Add/Change Commitment</a>
                    </form>
    </div>
    </div>
    
    <div id="loginWrapper3" style="display: none;">
        <div id="loginContainer" style="margin-top: 35px;">
            <div class="topHeader" style="background-color: #3b3b3b;">Make A Commitment</div>
        <div class="middleSection">
                <form action="athletecommitments.php" method="post" accept-charset="utf-8">
                        <select id="idcommitlevel" name="commitlevel" required>
                            <option value="">Choose Commitment Level...</option>
                            <option value="Verbal Commitment">Verbal Commitment</option>
                            <option value="Hard Commitment">Hard Commitment</option>
                        </select>
                        <select id="idcommitcollege" style="margin-top: 10px;" name="commitcollege" required>
                            <option value="">Choose from Top Colleges...</option>
                            <?php include 'commitmentselections.php';?>
                        </select>
                        <select id="idcommitpercentage" style="margin-top: 10px;" name="commitpercentage" required>
                            <option value="">How Committed Are You?...</option>
                            <option value="50">50% Commitment Level</option>
                            <option value="60">60% Commitment Level</option>
                            <option value="70">70% Commitment Level</option>
                            <option value="80">80% Commitment Level</option>
                            <option value="90">90% Commitment Level</option>
                            <option value="100">100% Commitment Level</option>
                        </select>
                        <textarea id="idcommitMessage" name="commitmessage" cols="35" rows="5" maxlength="175" style="resize: none;" placeholder="Enter Commitment Message..."></textarea>
                        
                    <button type="reset" id="reset">Reset Search</button>
                    <input type="submit" class="submit2" value="Submit" />
                </form>
        </div>
    </div>
    </div>
    
    




<!--Top College Choices List-->




<div id="loginContainer" style="margin-top: 35px;">
    <div class="topHeader">My Top Colleges</div>
    
    <div class="middleSection">
        <div class="retrieveColleges" >
            <?php include 'retrievecolleges.php';?>
        </div>
                    <form name="newItem" id="newItem">
                        <a id="toggle" href="javascript:toggle();">Search/Add College(s) to List</a>
                    </form>
    </div>
    
    
</div>


<div id="loginWrapper" style="display: none;">
    <div id="loginContainer" style="margin-top: 35px;">
        <div class="topHeader" style="background-color: #3b3b3b;">Search Colleges</div>
            <div class="middleSection">
                <form name="newItem" id="newItem">
                        <select id="searchcolleges" required>
                        	 <option value="">Search Colleges...</option>
                             <?php include 'colleges.php';?>
                        </select>
                        <select id="sportsresults" required>
                            <option value="">Select A Sport...</option>
                            <?php
		                        foreach($array_profile_sports as $value){
								   echo  "<option >".$value."</option>";
								   	
								}
	                        ?>
                        </select>
                        <select id="scholarshipresults" required>
                            <option value="">Scholarship Offer Received?...</option>
                            <option value="&#x2715;">No</option>
                            <option value="&#x2713;">Yes</option>
                        </select>
                        <select id="interestresults" required>
                            <option value="">Select Level of Interest...</option>
                            <option>Low</option>
                            <option>Medium</option>
                            <option>High</option>
                            <option>Extreme</option>
                        </select>
                        <div id="errorColleges"></div>
                        
                    <button type="reset" id="reset">Reset</button>
                    <input type="button" id="addCollege" value="Add College(s)" />
                </form>
        </div>
    </div>
    
    <div id="loginContainer" style="margin-top: 35px;">
        <div class="topHeader" style="background-color: #3b3b3b;">Added College(s)</div>
            <div class="middleSection">
                <!--<form action="athletecolleges.php" method="post" accept-charset="utf-8">-->
                <form>
                    <div class="items">
                        <ul id="tasks">
                        </ul>
                    </div>
    
                    <div id="deleteSubmit">
                            <button type="reset" id="deleteall">Delete Last</button>
                            <input type="button" class="submit" value="Submit" id ="btnAddCollegesSubmit" />
                    </div>
                </form>
        </div>
    </div>
</div>




<!--College Visits List-->




<div id="loginContainer" style="margin-top: 35px;">
    <div class="topHeader">My College Visits</div>
    
    <div class="middleSection">
        <div class="retrieveColleges" >
            <?php include 'retrievevisits.php';?>
        </div>
                    <form name="newItem" id="newItem">
                        <a id="toggle10" href="javascript:toggle10();">Search/Add College(s) to List</a>
                    </form>
    </div>
    
    
</div>


<div id="loginWrapper10" style="display: none;">
    <div id="loginContainer" style="margin-top: 35px;">
        <div class="topHeader" style="background-color: #3b3b3b;">Search Colleges</div>
            <div class="middleSection">
                <form name="newItem" id="newItem">
                        <select id="searchvisits" required>
                        	 <option value="">Search Colleges...</option>
                             <?php include 'colleges.php';?>
                        </select>
                        <select id="visitLevel" name="visitlevel" required>
                            <option value="">Level of Visit?...</option>
                            <option>Official Visit</option>
                            <option>Unofficial Visit</option>
                        </select>
                        <input type="text" id="visitDate" name="visitdate" placeholder="Date of Visit (yyyy-mm-dd)...">
                        <div id="errorVisits"></div>
                        
                    <button type="reset" id="reset">Reset</button>
                    <input type="button" id="addVisit" value="Add Visit(s)" />
                </form>
        </div>
    </div>
    
    <div id="loginContainer" style="margin-top: 35px;">
        <div class="topHeader" style="background-color: #3b3b3b;">Added College(s)</div>
            <div class="middleSection">
                <form>
                    <div class="items3">
                        <ul id="tasks3">
                        </ul>
                    </div>
    
                    <div id="deleteSubmit">
                            <button type="reset" id="deleteall">Delete Last</button>
                            <input type="button" class="submit" value="Submit" id ="btnAddVisitsSubmit" />
                    </div>
        </div>
    </div>
</div>





<!--Highlight Reel/YouTube Videos-->



    <div id="loginContainer" style="margin-top: 35px;">
        <div class="topHeader">My Highlight Reel</div>
        
        <div class="middleSection">
            <div class="retrieveHighlights" id="idSectionHighlights">
                <?php include 'retrievehighlights.php';?>
            </div>
                    <form name="newItem" id="newItem">
                        <a id="toggle8" href="javascript:toggle8();">Add Highlights</a>
                    </form>
        </div>
    </div>
    
    <div id="loginWrapper8" style="display: none;">
        <div id="loginContainer" style="margin-top: 35px;">
            <div class="topHeader" style="background-color: #3b3b3b;">Edit Highlights</div>
        
            <div class="middleSection">
                <form action="athletehighlights.php" method="post" accept-charset="utf-8">
                    <input type="text" id="videoTitle" name="videotitle" maxlength="35" placeholder="Enter Highlight Title..." required />
                    <input type="text" id="highlight" name="highlight" placeholder="Enter Highlight URL..." required /><span class="editCat4"><img src="images/info-20.png" title="Please used a third-party site (YouTube.com) to copy/paste video URL.&#013;&#013;Follow these steps:&#013;1. Visit YouTube.com&#013;2. Find Your Video&#013;3. Select 'Share';&#013;4. Copy and Paste the end of the URL (Example: 'https://youtu.be/COPYPASTETHISPART')" /></span>
                    <textarea id="videoDesc" name="videodescription" cols="35" rows="3" maxlength="100" style="resize: none;" placeholder="Enter Highlight Description..." required></textarea>
                    
                    <button type="reset" id="reset">Reset</button>
                    <input type="submit" class="submit2" value="Submit" />
                </form>
            </div>
        </div>
    </div>

</div>






<!--High School Statistics-->



<div id="topCollegesContainer2">
<div id="loginContainer"">
    <div class="topHeader">My Statistics</div>
    
    <div class="middleSection">
        <div class="retrieveStats" >
            <?php include 'retrieveStats.php';?>
        </div>
                    <form name="newItem" id="newItem">
                        <a id="toggle6" href="javascript:toggle6();">Add/Edit Statistics</a>
                    </form>
    </div>
</div>
    
    <div id="loginWrapper6" style="display: none;">
    <div id="loginContainer" style="margin-top: 35px;">
        <div class="topHeader" style="background-color: #3b3b3b;">Insert Game Statistics</div>
            <div class="middleSection">
                <form name="newItem" id="newItem">
                    <div class="statsContainer">
                        <span class="editCat2" style="margin-top: 0px;">Date of Game:</span>
                        <input type="text" id="date" name="date" placeholder="Date of Game (yyyy-mm-dd)...">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Time of Game:</span>
                        <input type="time" id="time" name="time">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">City:</span>
                        <input type="text" id="city2" name="city2" placeholder="Enter City...">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">State:</span>
                            <select id="state2" name="state2">
                                <option selected="selected">Select State...</option>
	                            <?php
			                        foreach($array_profile_state as $value){
								   		echo  "<option >".$value."</option>";
									}
		                        ?>                                
                            </select>
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Home/Away:</span>
                            <select id="homeaway" name="homeaway">
                                <option selected="selected">Select...</option>
                                <option>Away</option>
                                <option>Home</option>
                            </select>
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Opponent:</span>
                        <input type="text" id="opponent" name="opponent" placeholder="Enter Opponent...">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Result:</span>
                            <select id="result" name="result">
                                <option selected="selected">Select Result...</option>
                                <option>Win</option>
                                <option>Lose</option>
                                <option>Tie</option>
                                <option>W/Forfeiture</option>
                                <option>L/Forfeiture</option>
                            </select>
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Score:</span>
                        <input type="text" id="score" name="score" placeholder="Enter Score...">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Sport:</span>
                            <select id="getFname" name="sport" onchange="sportSelectCheck(this);">
                                <option selected="selected">Select Sport...</option>
                                <option id="footballOption">Football</option>
                                <option id="mbasketballOption">Men's Basketball</option>
                                <option id="mbaseballOption">Men's Baseball</option>
                                <option id="msoccerOption">Men's Soccer</option>
                                <option id="wbasketballOption">Women's Basketball</option>
                                <option id="wsoftballOption">Women's Softball</option>
                                <option id="wsoccerOption">Women's Soccer</option>
                                <option id="golfOption">Golf</option>
                            </select>
                    </div>
                    
                    <div id="footballDivCheck" name="football" style="display: none;">
                <form id="moreStats" action="whatever.php">
                    <div class="statsContainer1">
                        <span class="editCat2">Completions:</span>
                        <input type="number" id="completions" name="completions" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Pass Attempts:</span>
                        <input type="number" id="passattempts" name="passattempts" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Pass Yards:</span>
                        <input type="number" id="passyards" name="passyards" placeholder="0" min="0" max="999">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Pass TDs:</span>
                        <input type="number" id="passtds" name="passtds" placeholder="0" min="0" max="19">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Pass INTs:</span>
                        <input type="number" id="passints" name="passints" placeholder="0" min="0" max="19">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Rush Attempts:</span>
                        <input type="number" id="rushattempts" name="rushattempts" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Rush Yards:</span>
                        <input type="number" id="rushyards" name="rushyards" placeholder="0" min="0" max="999">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Rush TDs:</span>
                        <input type="number" id="rushtds" name="rushtds" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Receptions:</span>
                        <input type="number" id="receptions" name="receptions" placeholder="0" min="0" max="59">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Receiving Yards:</span>
                        <input type="number" id="recyards" name="recyards" placeholder="0" min="0" max="999">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Receiving TDs:</span>
                        <input type="number" id="rectds" name="rectds" placeholder="0" min="0" max="19">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Tackles:</span>
                        <input type="number" id="tackles" name="tackles" placeholder="0" min="0" max="59">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Sacks:</span>
                        <input type="number" id="sacks" name="sacks" placeholder="0" min="0" max="19">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Defensive INTs:</span>
                        <input type="number" id="defints" name="defints" placeholder="0" min="0" max="9">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Pass Break Ups:</span>
                        <input type="number" id="pbu" name="pbu" placeholder="0" min="0" max="19">
                    </div>
            </div>
            <div id="mbasketballDivCheck" name="mbasketball" style="display: none;">
                <form id="moreStats" action="whatever.php">
                    <div class="statsContainer1">
                        <span class="editCat2">Minutes Played:</span>
                        <input type="number" id="minutesplayed" name="minutesplayed" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Points Scored:</span>
                        <input type="number" id="pointsscored" name="pointsscored" placeholder="0" min="0" max="199">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">FG Made:</span>
                        <input type="number" id="fgmade" name="fgmade" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">FG Attempts:</span>
                        <input type="number" id="fgattempts" name="fgattempts" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">FT Made:</span>
                        <input type="number" id="ftmade" name="ftmade" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">FT Attempts:</span>
                        <input type="number" id="ftattempts" name="ftattempts" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">3P Made:</span>
                        <input type="number" id="tpmade" name="3pmade" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">3P Attempts:</span>
                        <input type="number" id="tpattempts" name="3pattempts" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Rebounds:</span>
                        <input type="number" id="rebounds" name="rebounds" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Assists:</span>
                        <input type="number" id="assists" name="assists" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Steals:</span>
                        <input type="number" id="steals" name="steals" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Blocks:</span>
                        <input type="number" id="blocks" name="blocks" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Turnovers:</span>
                        <input type="number" id="turnovers" name="turnovers" placeholder="0" min="0" max="99">
                    </div>
            </div>
            <div id="wbasketballDivCheck" name="wbasketball" style="display: none;">
                <form id="moreStats" action="whatever.php">
                    <div class="statsContainer1">
                        <span class="editCat2">Minutes Played:</span>
                        <input type="number" id="minutesplayed" name="minutesplayed" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Points Scored:</span>
                        <input type="number" id="pointsscored" name="pointsscored" placeholder="0" min="0" max="199">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">FG Made:</span>
                        <input type="number" id="fgmade" name="fgmade" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">FG Attempts:</span>
                        <input type="number" id="fgattempts" name="fgattempts" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">FT Made:</span>
                        <input type="number" id="ftmade" name="ftmade" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">FT Attempts:</span>
                        <input type="number" id="ftattempts" name="ftattempts" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">3P Made:</span>
                        <input type="number" id="tpmade" name="3pmade" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">3P Attempts:</span>
                        <input type="number" id="tpattempts" name="3pattempts" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Rebounds:</span>
                        <input type="number" id="rebounds" name="rebounds" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Assists:</span>
                        <input type="number" id="assists" name="assists" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Steals:</span>
                        <input type="number" id="steals" name="steals" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Blocks:</span>
                        <input type="number" id="blocks" name="blocks" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Turnovers:</span>
                        <input type="number" id="turnovers" name="turnovers" placeholder="0" min="0" max="99">
                    </div>
            </div>
            <div id="mbaseballDivCheck" name="mbaseball" style="display: none;">
                <form id="moreStats" action="whatever.php">
                    <div class="statsContainer1">
                        <span class="editCat2">At Bats:</span>
                        <input type="number" id="atbats" name="atbats" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Runs Scored:</span>
                        <input type="number" id="runsscored" name="runsscored" placeholder="0" min="0" max="199">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Hits:</span>
                        <input type="number" id="hits" name="hits" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Home Runs:</span>
                        <input type="number" id="homeruns" name="homeruns" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">RBI</span>
                        <input type="number" id="rbi" name="rbi" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Walks:</span>
                        <input type="number" id="walks" name="walks" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Strikeouts:</span>
                        <input type="number" id="strikeouts" name="strikeouts" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Stolen Bases:</span>
                        <input type="number" id="stolenbases" name="stolenbases" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Errors:</span>
                        <input type="number" id="errors" name="errors" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Innings Pitched:</span>
                        <input type="number" id="inningspitched" name="inningspitched" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Hits Allowed:</span>
                        <input type="number" id="hitsallowed" name="hitsallowed" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Earned Runs:</span>
                        <input type="number" id="earnedruns" name="earnedruns" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Walks (P):</span>
                        <input type="number" id="walksp" name="walksp" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Strikeouts (P):</span>
                        <input type="number" id="strikeoutsp" name="strikeoutsp" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Home Runs (P):</span>
                        <input type="number" id="homerunsallowed" name="homerunsallowed" placeholder="0" min="0" max="99">
                    </div>
            </div>
            <div id="wsoftballDivCheck" name="wsoftball" style="display: none;">
                <form id="moreStats" action="whatever.php">
                    <div class="statsContainer1">
                        <span class="editCat2">At Bats:</span>
                        <input type="number" id="atbats" name="atbats" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Runs Scored:</span>
                        <input type="number" id="runsscored" name="runsscored" placeholder="0" min="0" max="199">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Hits:</span>
                        <input type="number" id="hits" name="hits" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Home Runs:</span>
                        <input type="number" id="homeruns" name="homeruns" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">RBI</span>
                        <input type="number" id="rbi" name="rbi" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Walks:</span>
                        <input type="number" id="walks" name="walks" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Strikeouts:</span>
                        <input type="number" id="strikeouts" name="strikeouts" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Stolen Bases:</span>
                        <input type="number" id="stolenbases" name="stolenbases" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Errors:</span>
                        <input type="number" id="errors" name="errors" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Innings Pitched:</span>
                        <input type="number" id="inningspitched" name="inningspitched" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Hits Allowed:</span>
                        <input type="number" id="hitsallowed" name="hitsallowed" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Earned Runs:</span>
                        <input type="number" id="earnedruns" name="earnedruns" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Walks (P):</span>
                        <input type="number" id="walksp" name="walksp" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Strikeouts (P):</span>
                        <input type="number" id="strikeoutsp" name="strikeoutsp" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Home Runs (P):</span>
                        <input type="number" id="homerunsallowed" name="homerunsallowed" placeholder="0" min="0" max="99">
                    </div>
            </div>
            <div id="msoccerDivCheck" name="msoccer" style="display: none;">
                <form id="moreStats" action="whatever.php">
                    <div class="statsContainer1">
                        <span class="editCat2">Minutes Played:</span>
                        <input type="number" id="minutesplayed" name="minutesplayed" placeholder="0" min="0" max="199">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Goals Scored:</span>
                        <input type="number" id="goalsscored" name="goalsscored" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Assists:</span>
                        <input type="number" id="assists" name="assists" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Shots:</span>
                        <input type="number" id="shots" name="shots" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Saves:</span>
                        <input type="number" id="saves" name="saves" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Shutouts:</span>
                        <input type="number" id="shutouts" name="shutouts" placeholder="0" min="0" max="99">
                    </div>
            </div>
            <div id="wsoccerDivCheck" name="wsoccer" style="display: none;">
                <form id="moreStats" action="whatever.php">
                    <div class="statsContainer1">
                        <span class="editCat2">Minutes Played:</span>
                        <input type="number" id="minutesplayed" name="minutesplayed" placeholder="0" min="0" max="199">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Goals Scored:</span>
                        <input type="number" id="goalsscored" name="goalsscored" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Assists:</span>
                        <input type="number" id="assists" name="assists" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Shots:</span>
                        <input type="number" id="shots" name="shots" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Saves:</span>
                        <input type="number" id="saves" name="saves" placeholder="0" min="0" max="99">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Shutouts:</span>
                        <input type="number" id="shutouts" name="shutouts" placeholder="0" min="0" max="99">
                    </div>
            </div>
            <div id="golfDivCheck" name="golf" style="display: none;">
                <form id="moreStats" action="whatever.php">
                    <div class="statsContainer1">
                        <span class="editCat2">Course Played:</span>
                        <input type="text" id="courseplayed" name="courseplayed" placeholder="Enter Course Name..." >
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Par for Course:</span>
                        <input type="number" id="parforcourse" name="parforcourse" placeholder="0" min="65" max="80">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Holes Played:</span>
                        <input type="number" id="holesplayed" name="holesplayed" placeholder="0" min="0" max="54">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Score:</span>
                        <input type="number" id="golfscore" name="golfscore" placeholder="0" min="0" max="54">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Fairways Hit:</span>
                        <input type="number" id="fairwayshit" name="fairwayshit" placeholder="0" min="0" max="54">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Greens Hit:</span>
                        <input type="number" id="greenshit" name="greenshit" placeholder="0" min="0" max="54">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Holes in One:</span>
                        <input type="number" id="holesinone" name="holesinone" placeholder="0" min="0" max="10">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Eagles:</span>
                        <input type="number" id="eagles" name="eagles" placeholder="0" min="0" max="10">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Birdies:</span>
                        <input type="number" id="birdies" name="birdies" placeholder="0" min="0" max="54">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Bogeys:</span>
                        <input type="number" id="bogeys" name="bogeys" placeholder="0" min="0" max="54">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Double Bogeys:</span>
                        <input type="number" id="doublebogeys" name="doublebogeys" placeholder="0" min="0" max="54">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2">Average Putts:</span>
                        <input type="number" id="averageputts" name="averageputts" placeholder="0" min="0.00" max="5.00">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2" style="height: 30px; margin-left: 15px; padding-top: 7px; line-height: 12px;">Longest Drive (yards):</span>
                        <input type="number" id="longestdrive" name="longestdrive" placeholder="0" min="0" max="500">
                    </div>
                    <div class="statsContainer1">
                        <span class="editCat2" style="height: 30px; margin-left: 15px; padding-top: 7px; line-height: 12px;">Longest Putt (feet):</span>
                        <input type="number" id="longestputt" name="longestputt" placeholder="0" min="0" max="200">
                    </div>
            </div>

                    <button type="reset" id="reset">Reset</button>
                    <input type="button" id="addItem2" value="Add Statistics" />
                </form>
            </div>
        
        </div>

    
    <div id="loginContainer" style="margin-top: 35px;">
        <div class="topHeader" style="background-color: #3b3b3b;">Added Statistics</div>
            <div class="middleSection">
                <form>
                    <div class="items2">
                        <ul id="tasks2">
                        </ul>
                    </div>
    
                    <div id="deleteSubmit">
                            <button type="reset" id="deleteall2">Delete Last</button>
                            <input type="button" class="submit" value="Submit" id ="btnSubmit2" />
                    </div>
                </form>
        </div>
    </div>
</div>
</div>

<!--Targeted Recruits Updated Comments/Stats Wall-->






<div id="targetBoard" style="display: none;">
    <div id="topCollegesContainer2">
        <div id="loginContainer">
            <div class="topHeader">Comments & Stats</div>
        <div class="middleSection">
                <div class="retrieveColleges">
                    <?php include '#';?>
                </div>
    
        </div>
        </div>
    </div>
    
    
    




<!--Targeted Recruits d College Choices/Commitment Wall-->




<div id="topCollegesContainer2">
    <div id="loginContainer">
        <div class="topHeader">Top Colleges & Commitments</div>
    <div class="middleSection">
            <div class="retrieveColleges">
                <?php include '#';?>
            </div>

    </div>
    </div>
</div>
</div>

</div>
</div>
</div>




</body>
</html>

