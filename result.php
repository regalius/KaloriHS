<?php
//error_reporting(0);
//[DATA PASSER]
//RECEIVE POSTED VARIABLE FROM FRONTEND JS
$kebutuhanKalori =(float) $_POST['kalori'];

$preference = array_map('intval', $_POST['preference']);
$preferenceSiang = array_map('intval', $_POST['preferenceSiang']);
//$preferenceSiang = array(1, 3, 4);
$preferenceMalam = array_map('intval', $_POST['preferenceMalam']);
//$preferenceMalam = array(40, 5, 6, 7);
//var_dump($kebutuhanKalori);
$preferenceCamilan = array(40, 5, 6, 7);
//var_dump($kebutuhanKalori);

//CONNECT DATABASE  
$db_host="HOST";
$db_name="NAME";
$username="UNAME";
$password="PASS"

mysql_connect("$db_host","$username","$password") or die ("Could not connect to mysql");
mysql_select_db("$db_name") or die("no database");

$result="";

$i=0;
$kalori= array();
$kaloriSiang= array();
//$kaloriSiang= array(0,0,0);
$kaloriMalam= array();
//$kaloriMalam= array(0,0,0,0);

$sql=mysql_query("SELECT * FROM kalori WHERE No IN (". implode(',', $preference) .")"); 
$sqlSiang=mysql_query("SELECT * FROM kalori WHERE No IN (". implode(',', $preferenceSiang) .")"); 
$sqlMalam=mysql_query("SELECT * FROM kalori WHERE No IN (". implode(',', $preferenceMalam) .")"); 

$itemCount=mysql_num_rows($sql);
$itemCountSiang = mysql_num_rows($sqlSiang);
//$itemCountSiang = 3;
$itemCountMalam = mysql_num_rows($sqlMalam);
//$itemCountMalam = 4;

while($row=mysql_fetch_array($sql)){
    array_push($kalori,$row["Kalori"]);
} 

while($row=mysql_fetch_array($sqlSiang)){
    array_push($kaloriSiang,$row["Kalori"]);
} 

while($row=mysql_fetch_array($sqlMalam)){
    array_push($kaloriMalam,$row["Kalori"]);
} 


?>  

<?php
/*
     *    DECLARATION & INITIALIZATIONS
     */
$hMemory = array();
$hms = 20;
$hmcr =  0.8;
$par = 0.4;

$currentResultVector = array();

// generate decimal random number 0.0 - 1.0
function randDec() {
    return mt_rand() / mt_getrandmax();
}

// initialize harmony memory
function initHMemory($row, $col, $opt) {
    // var_dump($opt);
    for ($i = 0; $i < $row; $i++) {
        for ($j = 0; $j < $col; $j++) {
            // $GLOBALS["upBoundLists"][$row][$col]
            // $GLOBALS["lowBoundLists"][$row][$col]               
            $GLOBALS["hMemory"][$i][$j] = mt_rand($GLOBALS["lowBoundLists" . $opt][$j], $GLOBALS["upBoundLists" . $opt][$j]);
        }
    }
}

// print current harmony memory
function printHMemory($row, $col) {
    for ($i = 0; $i < $row; $i++) {
        for ($j = 0; $j < $col; $j++) {
            print $GLOBALS["hMemory"][$i][$j] . " ";
        }
        print  ", F=" . aestheticFunc(array_sum($GLOBALS["hMemory"][$i]), 30/100) . "<br/>";
    }
}

function aestheticFunc($combo, $precentage){
    return 1 / (($GLOBALS["kebutuhanKalori"] * $precentage - $combo) + 0.01);
}

// main algorithm
function computeFunc($practiceTime, $option) {
    $numReplacement = 0;    
    // var_dump($GLOBALS["itemCount"]);
    for($p = 0; $p < $practiceTime; $p++){
        $tmp;        
        $replacing = false;        
        for($var = 0; $var < $GLOBALS["itemCount"]; $var++) {
            if (randDec() < $GLOBALS["hmcr"]) {                
                $tmp = $GLOBALS["hMemory"][mt_rand(0, 19)][$var];
                //$tmp = $GLOBALS["hMemory"][mt_rand(0, 19)][1];
                if (randDec() < $GLOBALS["par"]) {
                    $b = ($GLOBALS["upBoundLists"][$var] - $GLOBALS["lowBoundLists"][$var]) / 10;
                    $tmp2 = $tmp + (2 * randDec() - 1) * $b;
                    if($tmp2 <= $GLOBALS["upBoundLists"][$var] && $tmp2 >= $GLOBALS["lowBoundLists"][$var]){
                        $tmp = $tmp2;
                    }
                }
            } else {
                $tmp = mt_rand($GLOBALS["lowBoundLists"][$var], $GLOBALS["upBoundLists"][$var]);
            }            
            $GLOBALS["currentResultVector"][$var] = $tmp;
        }

        // finding worst value
        $minVal = 1000;
        $minValIdx = 0;
        $counter = 0;
        foreach($GLOBALS["hMemory"] as $vec) {
            if ($minVal > aestheticFunc(array_sum($vec), 20/100)) {
                $minVal = aestheticFunc(array_sum($vec), 20/100);
                $minValIdx = $counter;                                
            }
            $counter++;            
        }

        // replace if existing is wors
        //if ($minVal < array_sum($GLOBALS["currentResultVector"]) && $minVal < $GLOBALS["kebutuhanKalori"]) {
        if ($minVal < array_sum($GLOBALS["currentResultVector"])) {
            $GLOBALS["hMemory"][$minValIdx] = $GLOBALS["currentResultVector"];
            $numReplacement++;            
        }        
    }        
}

function computeFuncSiang($practiceTime, $option) {
    $numReplacement = 0;    
    // var_dump($GLOBALS["itemCount"]);
    for($p = 0; $p < $practiceTime; $p++){
        $tmp;        
        $replacing = false;        
        for($var = 0; $var < $GLOBALS["itemCountSiang"]; $var++) {
            if (randDec() < $GLOBALS["hmcr"]) {                
                $tmp = $GLOBALS["hMemory"][mt_rand(0, 19)][$var];
                //$tmp = $GLOBALS["hMemory"][mt_rand(0, 19)][1];
                if (randDec() < $GLOBALS["par"]) {
                    $b = ($GLOBALS["upBoundListsSiang"][$var] - $GLOBALS["lowBoundListsSiang"][$var]) / 10;
                    $tmp2 = $tmp + (2 * randDec() - 1) * $b;
                    if($tmp2 <= $GLOBALS["upBoundListsSiang"][$var] && $tmp2 >= $GLOBALS["lowBoundListsSiang"][$var]){
                        $tmp = $tmp2;
                    }
                }
            } else {
                $tmp = mt_rand($GLOBALS["lowBoundListsSiang"][$var], $GLOBALS["upBoundListsSiang"][$var]);
            }            
            $GLOBALS["currentResultVector"][$var] = $tmp;
        }

        // finding worst value
        $minVal = 1000;
        $minValIdx = 0;
        $counter = 0;
        foreach($GLOBALS["hMemory"] as $vec) {
            if ($minVal > aestheticFunc(array_sum($vec), 30/100)) {
                $minVal = aestheticFunc(array_sum($vec), 30/100);
                $minValIdx = $counter;                                
            }
            $counter++;            
        }

        // replace if existing is wors
        //if ($minVal < array_sum($GLOBALS["currentResultVector"]) && $minVal < $GLOBALS["kebutuhanKalori"]) {
        if ($minVal < array_sum($GLOBALS["currentResultVector"])) {
            $GLOBALS["hMemory"][$minValIdx] = $GLOBALS["currentResultVector"];
            $numReplacement++;            
        }        
    }        
}

function computeFuncMalam($practiceTime, $option) {
    $numReplacement = 0;    
    // var_dump($GLOBALS["itemCount"]);
    for($p = 0; $p < $practiceTime; $p++){
        $tmp;        
        $replacing = false;        
        for($var = 0; $var < $GLOBALS["itemCountMalam"]; $var++) {
            if (randDec() < $GLOBALS["hmcr"]) {                
                $tmp = $GLOBALS["hMemory"][mt_rand(0, 19)][$var];
                //$tmp = $GLOBALS["hMemory"][mt_rand(0, 19)][1];
                if (randDec() < $GLOBALS["par"]) {
                    $b = ($GLOBALS["upBoundListsMalam"][$var] - $GLOBALS["lowBoundListsMalam"][$var]) / 10;
                    $tmp2 = $tmp + (2 * randDec() - 1) * $b;
                    if($tmp2 <= $GLOBALS["upBoundListsMalam"][$var] && $tmp2 >= $GLOBALS["lowBoundListsMalam"][$var]){
                        $tmp = $tmp2;
                    }
                }
            } else {
                $tmp = mt_rand($GLOBALS["lowBoundListsMalam"][$var], $GLOBALS["upBoundListsMalam"][$var]);
            }            
            $GLOBALS["currentResultVector"][$var] = $tmp;
        }

        // finding worst value
        $minVal = 1000;
        $minValIdx = 0;
        $counter = 0;
        foreach($GLOBALS["hMemory"] as $vec) {
            if ($minVal > aestheticFunc(array_sum($vec), 30/100)) {
                $minVal = aestheticFunc(array_sum($vec), 30/100);
                $minValIdx = $counter;                                
            }
            $counter++;            
        }

        // replace if existing is wors
        //if ($minVal < array_sum($GLOBALS["currentResultVector"]) && $minVal < $GLOBALS["kebutuhanKalori"]) {
        if ($minVal < array_sum($GLOBALS["currentResultVector"])) {
            $GLOBALS["hMemory"][$minValIdx] = $GLOBALS["currentResultVector"];
            $numReplacement++;            
        }        
    }        
}


/*
     *    EXECUTIONS
     */
// determine upper and lower bounds of each decision variables
$lowBoundLists = $kalori;
for($i = 0; $i < $itemCount; $i++){
    $upBoundLists[$i] = ($kebutuhanKalori * 30/100) / $itemCount;
}  
initHMemory(20, $itemCount, "");
// compute morning
computeFunc(500, 30/100, "s");
$resultsVector = array();
//print "<br/><br/>result: <br/>";
for($h = 0; $h < 20; $h++) {
    $resultsVector[$h] = array_sum($hMemory[$h]);
}
$idxResult;
for($i = 0; $i < 20; $i++) {
    if(array_sum($hMemory[$i]) == max($resultsVector)){
        $idResult = $i;
    }
}
// to gram pagi
$arrPagi = array();
for($i = 0; $i < $itemCount; $i++){
    if(($hMemory[$idResult][$i] / ($kalori[$i]+0.01)) > 100){
        $arrPagi[$i] = mt_rand(10,1000)/10;
    }else{
        $arrPagi[$i] = $hMemory[$idResult][$i] / ($kalori[$i]+0.01);
    }
}


$lowBoundListsSiang = $kaloriSiang;
for($i = 0; $i < $itemCountSiang; $i++){
    $upBoundListsSiang[$i] = ($kebutuhanKalori * 20/100) / $itemCountSiang;
}  
initHMemory(20, $itemCountSiang, "Siang");
// compute noon
computeFuncSiang(500, 20/100, "Siang");
$resultsVector = array();
for($h = 0; $h < 20; $h++) {
    $resultsVector[$h] = array_sum($hMemory[$h]);
}
$idxResult;
for($i = 0; $i < 20; $i++) {
    if(array_sum($hMemory[$i]) == max($resultsVector)){
        $idResult = $i;
    }
}
// to gram siang
$arrSiang = array();
for($i = 0; $i < $itemCountSiang; $i++){
    if(($hMemory[$idResult][$i] / ($kalori[$i]+0.01)) > 100){
        $arrSiang[$i] = mt_rand(10,1000)/10;
    }else{
        $arrSiang[$i] = $hMemory[$idResult][$i] / ($kaloriSiang[$i]+0.01);
    }
}
//var_dump($hMemory[$idResult]); 



$lowBoundListsMalam = $kaloriMalam;
for($i = 0; $i < $itemCountMalam; $i++){
    $upBoundListsMalam[$i] = ($kebutuhanKalori * 25/100) / $itemCountMalam;
}  
initHMemory(20, $itemCountMalam, "Malam");
// compute morning
computeFuncMalam(500, 25/100, "Malam");
$resultsVector = array();
//print "<br/><br/>result: <br/>";
for($h = 0; $h < 20; $h++) {
    $resultsVector[$h] = array_sum($hMemory[$h]);
}
$idxResult;
for($i = 0; $i < 20; $i++) {
    if(array_sum($hMemory[$i]) == max($resultsVector)){
        $idResult = $i;
    }
}
// to gram malam
$arrMalam = array();
for($i = 0; $i < $itemCountMalam; $i++){
    if(($hMemory[$idResult][$i] / ($kalori[$i]+0.01)) > 100){
        $arrMalam[$i] = mt_rand(10,1000)/10;
    }else{
        $arrMalam[$i] = $hMemory[$idResult][$i] / ($kaloriMalam[$i]+0.01);
    }
}
//var_dump($hMemory[$idResult]); 


?>




<div id="hasilPagi">
    <section class="hasilContent">
        <p>PAGI</p>
        <div class="hasilContentItemContainer">

            <?php


//EXTRACT
//arrPagi
$i=0;
foreach($arrPagi as $kal  ){
    $sql=mysql_query("SELECT * FROM kalori WHERE No = ". $preference[$i] .""); 

    $itemCount=mysql_num_rows($sql);
    $nama;
    while($row=mysql_fetch_array($sql)){
        $nama= $row["NamaMakanan"];
    }
    echo '                       <div class="hasilContentItem">
                            <p class="itemName">
                                '. $nama .'
                            </p>
                            <img src="img/'. $preference[$i] .'.jpg" alt="">
                            <div class="itemGram">
                                <p>Jumlah :</p>
                                <p> '. sprintf('%0.2f', $kal) .' gram</p>
                            </div>
                        </div>                            
 ';
    $i++;
}
//arrSiang
//arrMalam

            ?>


        </div>
            </section>
        </div>
    <div id="hasilSiang">
        <section class="hasilContent">

            <p>SIANG</p>
            <div class="hasilContentItemContainer">

                <?php
//EXTRACT
//arrPagi
$i=0;
foreach($arrSiang as $kal  ){
    $sql=mysql_query("SELECT * FROM kalori WHERE No = ". $preferenceSiang[$i] .""); 

    $itemCountSiang=mysql_num_rows($sql);
    $nama;
    while($row=mysql_fetch_array($sql)){
        $nama= $row["NamaMakanan"];
    }
    echo '                       <div class="hasilContentItem">
                            <p class="itemName">
                                '. $nama .'
                            </p>
                            <img src="img/'. $preferenceSiang[$i] .'.jpg" alt="">
                            <div class="itemGram">
                                <p>Jumlah :</p>
                                <p> '. sprintf('%0.2f', $kal) .' gram</p>
                            </div>
                        </div>                            
 ';
    $i++;
}
//arrSiang
//arrMalam

                ?>



            </div>


                </section>

            </div>
        <div id="hasilCamilan">

        </div>
        <div id="hasilMalam">

            <section class="hasilContent">

                <p>MALAM</p>
                <div class="hasilContentItemContainer">

                    <?php
//EXTRACT
//arrPagi
$i=0;
foreach($arrMalam as $kal  ){
    $sql=mysql_query("SELECT * FROM kalori WHERE No = ". $preferenceMalam[$i] .""); 

    $itemCountMalam=mysql_num_rows($sql);
    $nama;
    while($row=mysql_fetch_array($sql)){
        $nama= $row["NamaMakanan"];
    }
    echo '                       <div class="hasilContentItem">
                            <p class="itemName">
                                '. $nama .'
                            </p>
                            <img src="img/'. $preferenceMalam[$i] .'.jpg" alt="">
                            <div class="itemGram">
                                <p>Jumlah :</p>
                                <p> '. sprintf('%0.2f', $kal) .' gram</p>
                            </div>
                        </div>                            
 ';
    $i++;
}
//arrSiang
//arrMalam


                    ?>
                </div>
                    </section>

                </div>
