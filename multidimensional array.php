<?php
echo " <h1>  Cover of Niloy  </h1>" ."<br>";

 $emp =[

[1,"Experiment on high pass <br> filter and low pass filter to find out the cutoff frequency","1-3"],
[2,"Modulation and demodulation of amplitude <br> modulation and also understanding <br>  the effect of modulation factor by using <br> expriment module and MATLAB SIMULINK","4-7"],
[3,"Analysis of frequency modulated and <br> demodulated weve  by useing expriment <br>module and MATLAB SIMULINK and <br> also see the frequency modulation in MATLAB <br>commands","8-10"],
[4,"Exprement on frequency modulation <br> and demodulation","11-12"],
[5,"Exprement on fiber optic communication <br> for voice (analog) and data(digital) transmission","13-15"],
[6,"Analysis of time devision multiplexer and <br> demultiplexer(FDM)","16-18"],
[7,"Exprement on spectram analyzer <br>(analysis of FM channel)","19-21"],
 ];

/*foreach ($emp as $v1) {
    foreach ($v1 as $v2){
        echo $v2 . " ";
    }
    echo "<br>";
} */


/* Print with Table tag */

echo "<table border='2px' cellpadding='5px' cellspacing='0'>";
echo "<tr>
        <th>SL NO</th>
        <th>Name of The Experiment</th>
        <th>Page</th>
     </tr>";
    foreach ($emp as $v1){
        echo "<tr>";
    foreach ($v1 as $v2){
        echo "<td> $v2 </td>";
    }
    echo "</tr>";
}
echo "</table>";
?>