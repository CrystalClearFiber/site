<?php

echo "THIS PAGE IS STRICTLY UNDER DEVELOPMENT AND IS MEANT ONLY TO BE USED BY THE DEVELOPER!<br><br><br>";

$google_result = shell_exec('ping -c 1 www.google.com');
echo $google_result."<br><br>";
//$google_result = substr($google_result, 1, 10);
//echo $google_result."<br><br>";

$AWS_result = shell_exec('ping -c 1 54.152.153.143');
echo $AWS_result."<br><br>";

$packet_loss = get_packet_info($google_result);

function get_packet_info($string){
    $fin = "ERROR";
    $arr = explode(" ", $string);
    foreach ($arr as $value){
        if (strpos($value, "%") !== FALSE){
            $fin = $value;
            break;
        }
    }
    echo $fin;
    return $fin;
}
?>

<script type="text/javascript">
    function get_results(){
        var google = "<?php echo $packet_loss; ?>";;
        alert(google);
    }
</script>

<html>
<head>
</head>
<body>
    <button onclick="get_results()">Get Results</button>

</body>
</html>
