jQuery(function(){
	// MOVE TITLE
	var $title 		= jQuery('.insideframe .title');
	var $article 	= jQuery('.bottom .text');
	var $i 			= 0;

	while($i <= 4) {
		jQuery($title[$i]).prependTo($article[$i]);
		$i++;
		//alert($i);
	}

});