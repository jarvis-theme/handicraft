{{favicon()}} 

<!-- Default css-->
@if($tema->isiCss=='')	
{{generate_theme_css('handicraft/assets/css/style.css?v=0002')}} 
@else 	
{{generate_theme_css('handicraft/assets/css/editstyle.css?v=0002')}} 
@endif	
{{generate_theme_css('handicraft/assets/css/jquery.fancybox.css')}} 
{{generate_theme_css('handicraft/assets/css/owl.carousel.css')}} 
{{generate_theme_css('handicraft/assets/css/owl.theme.css')}} 
