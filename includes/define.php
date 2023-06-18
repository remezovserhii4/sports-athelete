<?php

    define("DB_HOST", "localhost");
    define("DB_USER", "theproto_test");
    define("DB_PASS", ")@?xCqMD,;V2");
    define("DB_NAME", "theproto_test");

	//sex array
	$array_profile_sex = array(1 =>'Male', 2=>'Female', 3=>'Other', 0=>'Unknown');
	//primary sports array
	$array_profile_sports = array(0 =>'Football', 1=>'Basketball', 2=>'Baseball', 3=>'Softball', 4=>'Soccer', 5=>'Golf');
	//state array
	$array_profile_state = array("Alabama", "Alaska", "Arizona", "Arkansas", "California", "Colorado", 
								"Connecticut", "Delaware", "Florida", "Georgia", "Hawaii", "Idaho", 
								"Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", 
								"Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", 
								"Missouri", "Montana", "Nebraska", "Nevada", "New", "Hampshire", 
								"New Jersey", "New Mexico", "New York", "North Carolina", "North Dakota", "Ohio", 
								"Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota", 
								"Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", 
								"West Virginia", "Wisconsin", "Wyoming", "Canada");
	//class array
	$array_profile_class =array("8th Grade", "Freshman", "Sophomore", "Junior", "Senior", "5th Year Senior");
					
	//position array
	$array_football_pos = array("QB", "RB", "WR", "TE", "RT", "RG", "C", "LG", "LT", "SDE", "WDE", "DT", "OLB", "MLB", "CB", "SS", "FS");
	$array_basketball_pos = array("PG", "SG", "SF", "PF", "C");
	$array_baseball_pos = array("C", "1B", "2B", "SS", "3B", "LF", "CF", "RF", "RHP", "LHP");
	$array_soccer_pos = array("G", "SW", "RFB", "CFB", "LFB", "RMID", "CMID", "LMID", "RF", "CF", "LF");
	
?>