<?php
	namespace huynhgiaphat;
	use Mirana_Theme;

	#Mirana_Theme::add($themeName, $moduleName);
	Mirana_Theme::registerTheme("huynhgiaphat", function(){
		Mirana_Theme::addTheme("/", "webpage");
	});
?>
