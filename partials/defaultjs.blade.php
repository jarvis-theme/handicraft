    <script>
    var oldieCheck = Boolean(document.getElementsByTagName('html')[0].className.match(/\soldie\s/g));
    if(!oldieCheck) {
    document.write('<script src="{{url(dirTemaToko())}}/handicraft/assets/js/libs/jquery-2.0.2.min.js"><\/script>');
    } else {
    document.write('<script src="{{url(dirTemaToko())}}/handicraft/assets/js/libs/jquery-1.10.1.min.js"><\/script>');
    }
    </script>
    <script>
    if(!window.jQuery) {
    if(!oldieCheck) {
      document.write('<script src="{{url(dirTemaToko())}}/handicraft/assets/js/libs/jquery-2.0.2.min.js"><\/script>');
    } else {
      document.write('<script src="{{url(dirTemaToko())}}/handicraft/assets/js/libs/jquery-1.10.1.min.js"><\/script>');
    }
    }
    </script>

    <script gumby-touch="{{url(dirTemaToko())}}/handicraft/assets/js/libs" src="{{url(dirTemaToko())}}/handicraft/assets/js/libs/gumby.js"></script>
    
    {{generate_theme_js("handicraft/assets/js/libs/gumby.init.js")}}
    {{generate_theme_js("handicraft/assets/js/libs/ui/gumby.retina.js")}}
    {{generate_theme_js("handicraft/assets/js/libs/ui/gumby.fixed.js")}}
    {{generate_theme_js("handicraft/assets/js/libs/ui/gumby.skiplink.js")}}
    {{generate_theme_js("handicraft/assets/js/libs/ui/gumby.toggleswitch.js")}}
    {{generate_theme_Js("handicraft/assets/js/libs/ui/gumby.checkbox.js")}}
    {{generate_theme_js("handicraft/assets/js/libs/ui/gumby.radiobtn.js")}}
    {{generate_theme_js("handicraft/assets/js/libs/ui/gumby.tabs.js")}}
    {{generate_theme_js("handicraft/assets/js/libs/ui/gumby.navbar.js")}}
    {{generate_theme_js("handicraft/assets/js/libs/ui/jquery.validation.js")}}
    {{generate_theme_js("handicraft/assets/js/libs/unslider.js")}}
    
    {{generate_theme_js("handicraft/assets/js/plugins.js")}}
    {{generate_theme_js("handicraft/assets/js/main.js")}}
    {{generate_theme_js("handicraft/assets/js/libs/jquery.fancybox.pack.js")}}
    {{generate_theme_js("handicraft/assets/js/libs/owl.carousel.min.js")}}