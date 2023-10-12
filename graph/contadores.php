<?php

// Contador de MO	
$mo=0;	
$sql100 = mysql_query("Select * From MO");
while($exibe100 = mysql_fetch_assoc($sql100)){
$mo= $mo+1;
}

// FIM Contador de MO



// Contador de AI					
$ai=0;	
$sql103 = mysql_query("Select * From AI");
while($exibe103 = mysql_fetch_assoc($sql103)){
$ai= $ai+1;
}

// FIM Contador de AI




// Contador de ATEIE				
$ateie=0;	
$sql105 = mysql_query("Select * From ATEIE");
while($exibe105 = mysql_fetch_assoc($sql105)){
$ateie= $ateie+1;
}
// FIM Contador de ATEIE




//Acessantes ÁREA NORTE
	$mo2021=0;
	$where = "ano like '%2021%' " ;
	$sql = mysql_query("Select * From MO where " . $where ."");
	while($exibe = mysql_fetch_assoc($sql)){
	$mo2021= $mo2021 +1;
	}

	$mo2022=0;
	$where2 = "ano like '%2022%' " ;
	$sql2 = mysql_query("Select * From MO where " . $where2 ."");
	while($exibe2 = mysql_fetch_assoc($sql2)){
	$mo2022= $mo2022+1;
	}

	$mo2023=0;
	$where23 = "ano like '%2023%' " ;
	$sql23 = mysql_query("Select * From MO where " . $where23 ."");
	while($exibe23 = mysql_fetch_assoc($sql23)){
	$mo2023= $mo2023+1;
	}

	$ai2021=0;
	$where3 = "ano like '%2021%' " ;
	$sql3 = mysql_query("Select * From AI where " . $where3 . "");
	while($exibe3 = mysql_fetch_assoc($sql3)){
	$ai2021= $ai2021+1;
	}

	$ai2022=0;
	$where4 = "ano like '%2022%' " ;
	$sql4 = mysql_query("Select * From AI where " . $where4 . "");
	while($exibe4 = mysql_fetch_assoc($sql4)){
	$ai2022= $ai2022+1;
	}

	$ai2023=0;
	$where43 = "ano like '%2023%' " ;
	$sql43 = mysql_query("Select * From AI where " . $where43 . "");
	while($exibe43 = mysql_fetch_assoc($sql43)){
	$ai2023= $ai2023+1;
	}

	$ateie2021=0;
	$where5 = "ano like '%2021%' " ;
	$sql5 = mysql_query("Select * From ATEIE where " . $where5 . "");
	while($exibe5 = mysql_fetch_assoc($sql5)){
	$ateie2021= $ateie2021+1;
	}

	$ateie2022=0;
	$where6 = "ano like '%2022%' " ;
	$sql6 = mysql_query("Select * From ATEIE where " . $where6 . "");
	while($exibe6 = mysql_fetch_assoc($sql6)){
	$ateie2022= $ateie2022+1;
	}
	
	$ateie2023=0;
	$where63 = "ano like '%2023%' " ;
	$sql63 = mysql_query("Select * From ATEIE where " . $where63 . "");
	while($exibe63 = mysql_fetch_assoc($sql63)){
	$ateie2023= $ateie2023+1;
	}
	?>