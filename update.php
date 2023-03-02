<?php
 
include("parts/header.php");  

echo "<br/><b>Pull from Git</b> <br/>";
echo exec("git pull");


echo "<br/><b>Publications:</b> <br/>";


$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);  

$html = file_get_contents("https://www.bibsonomy.org/publ/user/aksw/pcponweb"false, stream_context_create($arrContextOptions));


$pubs = explode('<p class="entry">', $html);

exec('echo "<!-- PCP on Web publications update -->\n" > publications.html');

foreach ($pubs as $pub) {

	if (strpos($pub, '<span class="entry_author">')===0) { 
		$len = strrpos($pub,"[");
		if ($len>0) {$pub=substr($pub, 0, $len-1);}
		echo $pub;		
		exec('echo "<p class=\"entry\">'.$pub.'</p>\n" >> publications.html'); 	
	}
}

echo '<p><a href="../">Link to Website</a></p>';

include("parts/footer.php");
?>

