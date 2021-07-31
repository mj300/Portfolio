<section class='front-section' >
				
    <div class='container' >
        <div class='transition-mask' ></div>
        <div class='front-person-img' >
            
            <!--person's image-->
            <img src='{{ URL('storage/images/my.png') }}' alt='avatar' >
            <!--/person's image-->
            
        </div>
        <!--person's titles-->
        <div class='front-person-titles' >
            
            <!--title1-->
            <span class='t1' >
                Mahdi Joveyni
            </span>
            <!--/title1-->
            
            <!--title2-->
            <span class='t2' >
                Full-Stack Developer
            </span>
            <!--/title2-->
            
            <!--title3-->
            <span class='t3' >
              
            </span>
            <!--/title3-->
            
        </div>
        <!--/person's titles-->
        
        <nav class='front-person-links' >
            
            <!--
                navigation links, data-section attribute points towards the section with id to be opened. 
            -->
            
            <ul>
                
                <li>
                    <a href='#' data-section='about' >About Me</a>
                </li>
                
                <li>
                    <a href='#' data-section='resume' >Resume</a>
                </li>
                
                {{-- <li>
                    <a href='#' data-section='services' >Services</a>
                </li> --}}
                
                <li>
                    <a href='#' data-section='portfolio' >Portfolio</a>
                </li>
                
                {{-- <li>
                    <a href='#' data-section='blog' >My Blog</a>
                </li> --}}
                
                <li>
                    <a href='/message'  >Contact</a>
                </li>
                
                {{-- <li>
                    <a href='#' >Hire Me!</a>
                </li> --}}
                
            </ul>
            
        </nav>
        <div class='front-heading text-center' >
            
            <div>
                @include('tools.social')
            </div>
        </div>
    </div>
    
</section>