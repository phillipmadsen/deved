
    {!! HTML::style('http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800') !!}
    {!! HTML::style('http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic') !!}
    {!! HTML::style('http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic') !!}
    {!! HTML::style("//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css") !!}
      {!! Minify::stylesheet('/frontend/css/bootstrap.css') !!}
      {!! Minify::stylesheet('/frontend/style.css') !!}
        {!! HTML::style("frontend/css/dark.css") !!}
        {!! HTML::style("frontend/css/font-icons.css") !!}
        {!! HTML::style("frontend/css/et-line.css") !!}
      {!! Minify::stylesheet('/frontend/css/animate.css') !!}
      {!! Minify::stylesheet('/frontend/css/magnific-popup.css') !!}
        {!! HTML::style("frontend/css/fonts.css") !!}
   
   
        {!! HTML::style("frontend/custom-css/block.css") !!}
        {!! HTML::style("frontend/custom-css/header.css") !!}
        {!! HTML::style("frontend/custom-css/custom.css") !!}
        {!! HTML::style("frontend/css/responsive.css") !!}
    <!--[if lt IE 9]>
        {!! HTML::script('//css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js') !!}
    <![endif]-->
    <link rel="shortcut icon" href="{!! url('favicon.ico') !!}">
    {{-- {!! HTML::script('frontend/js/jquery.js') !!} --}}
    {{-- {!! HTML::script('frontend/js/plugins.js') !!} --}}
 
  {!! Minify::javascript('/frontend/js/jquery.js') !!}
  {!! Minify::javascript('/frontend/js/plugins.js') !!}
     <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', '{!! $settings['ga_code']  or 'UA-64291412-1' !!}', 'auto');
      ga('send', 'pageview');

    </script>
    <style>#top-cart, #top-search {float: right!important; } #primary-menu ul {float: left!important; }  </style>
