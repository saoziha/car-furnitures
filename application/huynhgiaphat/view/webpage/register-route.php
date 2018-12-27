<?php
	namespace huynhgiaphat;
	use Mirana_Theme;

	#Mirana_Routing::add(appname, url, layout, pagename);
	Mirana_Theme::registerPage("huynhgiaphat", function(){
		Mirana_Theme::addPage("/", "landing", "index");
		Mirana_Theme::addPage("/shop", "landing", "product-list");
		Mirana_Theme::addPage("/about", "landing", "about");
		Mirana_Theme::addPage("/contact", "landing", "contact");
		Mirana_Theme::addPage("/product", "landing", "product-details");

		Mirana_Theme::addFunctionFolder("view_function");
	});
?>
