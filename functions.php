<?php
function section_begin(string $de,string $en,int $number = 0,bool $external = false, string $dateauthor = "") {

	$id = strtolower(preg_replace('/[^A-Za-z0-9-]+/', '-', $de));
	$output = '<section ';
	if (($number % 2) == 1) $output .= 'class="success" ';
	$output .= 'id="'.$id.'">'.PHP_EOL;
        $output .= '<div class="container">'.PHP_EOL;
        $output .= '    <div class="row">'.PHP_EOL;
        $output .= '        <div class="col-lg-12 text-center">'.PHP_EOL;
        $output .= '            <h2><span class="de">';
	if ($external) {
		$output .= '<a href="';
		if ($dateauthor=='') $output .= $id.'.php#de';
		else $output .= 'blog.php#'.$id;
		$output .= '">'.$de.'</a>';
	} else {
		$output .= $de;
	}
        $output .= '</span><span class="en">';
	if ($external) {
		$output .= '<a href="';
		if ($dateauthor=='') $output .= $id.'.php#en';
		else $output .= 'blog.php#'.$id;
		$output .= '">'.$en.'</a>';
	} else {
		$output .= $en;
	}
        $output .= '</span></h2>'.PHP_EOL;
	$output .= '</span></h2>'.PHP_EOL;
	if ($dateauthor=='') $output .= '            <hr class="star-light"/>'.PHP_EOL;
	else $output .= '            <div class="star-light">'.$dateauthor.'</div>'.PHP_EOL;
        $output .= '        </div>'.PHP_EOL;
        $output .= '    </div>'.PHP_EOL;
        $output .= '    <div class="row">'.PHP_EOL;
        $output .= '        <div class="col-lg-12">'.PHP_EOL;

	return $output;
}

function section_end() {

	$output = '            </div>'.PHP_EOL;
        $output .= '        </div>'.PHP_EOL;
        $output .= '    </div>'.PHP_EOL;
        $output .= '</section>'.PHP_EOL;

	return $output;
}

?>
