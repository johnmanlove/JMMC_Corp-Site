jQuery(function(){
	// MOVE TITLE
	var $title 		= jQuery('.insideframe .title');
	var $article 	= jQuery('.bottom .text');
	var $i 			= 0;

	while($i <= 3) {
		jQuery($title[$i]).prependTo($article[$i]);
		$i++;
		//alert($i);
	}

});