

@if(Request::url() === URL::to('/'))

@else
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta charset="utf-8">
{{ HTML::title() }}
<link href='http://fonts.googleapis.com/css?family=OFL+Sorts+Mill+Goudy+TT' rel='stylesheet' type='text/css'/>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="{{asset('templatemo_style.css')}}" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="{{asset('css/orman.css')}}" type="text/css" media="screen" />
<link rel="stylesheet" href="{{asset('css/nivo-slider.css')}}" type="text/css" media="screen" /> 

<link rel="stylesheet" type="text/css" href="{{asset('css/ddsmoothmenu.css')}}" />

<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/ddsmoothmenu.js')}}">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
    mainmenuid: "templatemo_menu", //menu DIV id
    orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
    classname: 'ddsmoothmenu', //class added to menu's outer DIV
    //customtheme: ["#1c5a80", "#18374a"],
    contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

<link rel="stylesheet" href="{{asset('css/slimbox2.css')}}" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="{{asset('js/slimbox2.js')}}"></script> 

</head>
<body id="subpage">

<div id="templatemo_wrapper">
    <div id="templatemo_header">
        <div id="site_title"><a rel="nofollow" href="http://www.templatemo.com/preview/templatemo_388_runner">Flora~</a></div>
        <div id="templatemo_menu" class="ddsmoothmenu">
            <ul>
                <li><a href="{{URL::to('/')}}">Home</a></li>

            @if(Request::url() === URL::to('about'))
                <li><a href="{{URL::to('about')}}" class="selected">About</a>
            @else
                <li><a href="{{URL::to('about')}}">About</a>
            @endif
                    <ul>
                        <li><a href="#">Sub Page One</a></li>
                        <li><a href="#">Sub Page Two</a></li>
                        <li><a href="#">Sub Page Three</a></li>
                  </ul>
                </li>
            @if(Request::url() === URL::to('gallery'))
                <li><a href="{{URL::to('gallery')}}" class="selected">Gallery</a>
            @else
                <li><a href="{{URL::to('gallery')}}">Gallery</a>
            @endif

            


      
                    <ul>
                        <li><a href="#">Page Link One</a></li>
                        <li><a href="#">Link Two</a></li>
                        <li><a href="#">Page Link Three</a></li>
                        <li><a href="#">Link Four</a></li>
                        <li><a href="#">Page Link Five</a></li>
                  </ul>
                </li>
            @if(Request::url() === URL::to('blog'))
                <li><a href="{{URL::to('blog')}}" class="selected">Blog</a></li>
            @else
                <li><a href="{{URL::to('blog')}}">Blog</a></li>
            @endif

            @if(Request::url() === URL::to('contact'))
                <li><a href="{{URL::to('contact')}}" class="selected">Contact</a></li>
            @else
                <li><a href="{{URL::to('contact')}}">Contact</a></li>
            @endif

            </ul>
            <br style="clear: left" />
        </div> <!-- end of templatemo_menu -->
    </div> <!-- END of header -->
@endif
    

  <div id="templatemo_page_intro">
        <h1>
            <!-- include('orchestra/story::header') -->

            Blog
            </h1>




        <p>Pellentesque rhoncus placerat eros, et imperdiet diam sagittis semper. Curabitur purus quam, rutrum eget ante ut, accumsan gravida odio.</p>
    </div>
    
    
    <div id="templatemo_main">
        <div id="templatemo_content" class="left">
           
          
                @yield('content')
         
            
            <div class="clear"></div>
            
<!--             <div class="templatemo_paging">
                <ul>
                    <li><a rel="nofollow" href="http://www.templatemo.com" target="_parent">Previous</a></li>
                    <li><a rel="nofollow" href="http://www.templatemo.com/page/1" target="_parent">1</a></li>
                    <li><a rel="nofollow" href="http://www.templatemo.com/page/2" target="_parent">2</a></li>
                    <li><a rel="nofollow" href="http://www.templatemo.com/page/3" target="_parent">3</a></li>
                    <li><a rel="nofollow" href="http://www.templatemo.com/page/4" target="_parent">4</a></li>
                    <li><a rel="nofollow" href="http://www.templatemo.com/page/5" target="_parent">5</a></li>
                    <li><a rel="nofollow" href="http://www.templatemo.com/page/6" target="_parent">6</a></li>
                    <li><a rel="nofollow" href="http://www.templatemo.com/page/7" target="_parent">Next</a></li>
                </ul>
                <div class="clear"></div>
            </div> -->
            
        </div> <!-- END of content -->
                


        <!-- Change this when you change slug -->
        @if(Request::is('blog/posts/*'))

        @else
        <div id="templatemo_sidebar" class="right">
            
            <div class="sidebar_section sidebar_section_bg">
                <h3>Categories</h3>
                <ul class="sidebar_link_list">
                    <li><a href="#">Consectetur adipiscing</a></li>
                    <li><a href="#">Nullam vulputate est</a></li>
                    <li><a href="#">Duis porta velit</a></li>
                    <li><a href="#">Pretium suscipit</a></li>
                    <li><a href="#">Cras pulvinar eget lacus</a></li>
                    <li><a href="#">Duis in libero est</a></li>
                    <li><a href="#">Aenean tincidunt</a></li>
                    <li><a href="#">Morbi tempus iaculis</a></li>
                </ul>
            </div>
            
            <div class="sidebar_section sidebar_section_bg">
                <h3>Recent Comments</h3>
                <ul class="sidebar_link_list comment">
                    <li>
                        <span>Donec rhoncus, neque quis dapibus dapibus, lorem tortor semper est...</span>
                        <span class="comment_meta">
                            <strong>Van</strong> on <a href="#">Quisque dolor dolor</a>
                        </span>
                    </li>
                    <li>
                        <span>Donec rhoncus, neque quis dapibus dapibus, lorem tortor semper est...</span>
                        <span class="comment_meta">
                            <strong>George</strong> on <a href="#">Curabitur Mollis Justo</a>
                        </span>
                    </li>
                    <li>
                        <span>Donec rhoncus, neque quis dapibus dapibus, lorem tortor semper est...</span>
                        <span class="comment_meta">
                            <strong>Walker</strong> on <a href="#">Praesent venenatis ante neque</a>
                        </span>
                    </li>
                    <li>
                        <span>Donec rhoncus, neque quis dapibus dapibus, lorem tortor semper est...</span>
                        <span class="comment_meta">
                            <strong>David</strong> on <a href="#">Etiam dictum pulvinar neque</a>
                        </span>
                    </li>
                    <li>
                        <span>Donec rhoncus, neque quis dapibus dapibus, lorem tortor semper est...</span>
                        <span class="comment_meta">
                            <strong>Zoom</strong> on <a href="#">Maecenas fringilla felis quis</a>
                        </span>
                    </li>
                </ul>
            </div>
            
            <div class="sidebar_section sidebar_section_bg">
                <h3>Blogroll</h3>
                <ul class="sidebar_link_list">
                    <li><a href="#">Mauris vel gravida est</a></li>
                    <li><a href="#">Duis in libero est</a></li>
                    <li><a href="#">Nulla luctus nisl nec orci</a></li>
                    <li><a href="#">Cras in metus vulputate</a></li>
                    <li><a href="#">Consectetur adipiscing eli</a></li>
                    <li><a href="#">Nullam vulputate est</a></li>
                    <li><a href="#">Duis porta velit</a></li>
                    <li><a href="#">Pretium suscipit</a></li>
                </ul>
            </div>
            
      </div> <!-- END OF SIDE BAR -->

      @endif
        
        <div class="clear"></div>
                
    </div> <!-- END of main -->
</div> <!-- END of wrapper -->

<div id="templatemo_bottom_wrapper">
    <div id="templatemo_bottom">
        
        <div class="col col_3">
            <h4>Photo Gallery</h4>
            <ul class="nobullet footer_gallery">
                <li><a href="{{asset('images/portfolio/02.jpg')}}" rel="lightbox[gallery]"><img src="{{asset('images/templatemo_image_02.png')}}" alt="image 2" /></a></li>
                <li><a href="{{asset('images/portfolio/03.jpg')}}" rel="lightbox[gallery]"><img src="{{asset('images/templatemo_image_03.png')}}" alt="image 3" /></a></li>
                <li><a href="{{asset('images/portfolio/04.jpg')}}" rel="lightbox[gallery]"><img src="{{asset('images/templatemo_image_04.png')}}" alt="image 4" /></a></li>
                <li><a href="{{asset('images/portfolio/05.jpg')}}" rel="lightbox[gallery]"><img src="{{asset('images/templatemo_image_05.png')}}" alt="image 5" /></a></li>
                <li><a href="{{asset('images/portfolio/03.jpg')}}" rel="lightbox[gallery]"><img src="{{asset('images/templatemo_image_06.png')}}" alt="image 6" /></a></li>
                <li><a href="{{asset('images/portfolio/01.jpg')}}" rel="lightbox[gallery]"><img src="{{asset('images/templatemo_image_07.png')}}" alt="image 7" /></a></li>
            </ul>
            <div class="clear"></div>
            <a href="portfolio.html" class="more">View all</a>
        </div>
        
        <div class="col col_3">
            <h4>Twitter</h4>
            <ul class="nobullet twitter">
                <li><a href="#">@templatemo</a> Proin turpis nisi, placerat quis orci ac, tempor iaculis eros.</li>
                <li>Suspendisse enean <a href="#">#FREE</a> website template, mi lacus gravida nisi, vitae commodo orci nisi non nulla.</li>
                <li>Sed non varius lorem, in sollicitudin lectus. Cras vel urna a urna gravida consequat. Curabitur non risus dui. <a rel="nofollow" href="http://bit.ly/13IwZO">http://bit.ly/13IwZO</a></li>
                <li><a href="http://fr.mystockphoto.com" title="fr.mystockphoto.com" class="rower"  target="_blank">fr.mystockphoto.com</a></li>
            </ul>
        </div>
        
        <div class="col col_3 no_mr">
            <h4>Follow Us</h4>
            <ul class="nobullet social">
                <li><a rel="nofollow" href="https://www.facebook.com/templatemo" class="facebook">Facebook</a></li>
                <li><a href="#" class="twitter">Twitter</a></li>
                <li><a href="#" class="youtube">Youtube</a></li>
                <li><a href="#" class="google">Google+</a></li>
                <li><a href="#" class="vimeo">Vimeo</a></li>
                <li><a href="#" class="skype">Skype</a></li>
            </ul>
        </div>
        
        <div class="clear"></div>
    </div> <!-- END of bottom -->
    
</div> <!-- END of bottom wrapper -->

<div id="templatemo_footer_wrapper">
    <div id="templatemo_footer">
        Copyright © David Lopena <a rel="nofollow" href="#" target="_parent"></a>
    </div> <!-- END of footer -->
</div> <!-- END of footer wrapper -->

</body>
<script type='text/javascript' src='js/logging.js'></script>
</html>