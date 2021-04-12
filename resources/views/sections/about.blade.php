<section id='about' class='about-section section' >
    <div class='basic-info section-block' >
        <div class='container' >
            <div class='section-header text-center' >
                <h2>Basic Info About Me</h2>
                <!--divider-->
                <div class='divider-draft center' ></div>
                <!--/divider-->
            </div>
            <div class='row' >
                <div class='col-md-4' >
                    <div class='about-person-img' >
                        <img src='{{ URL('storage/images/my-2.jpg') }}' alt='symp'>
                    </div>
                </div>
                <div class='col-md-8 about-info' >
                    <p>
                        My name is <b> Mahdi Joveyni</b> and I am a software engineer specialize in backend application. I started web development in 2010 and acquired a strong knowledge and expertise in this field over time.
                        I am a passionate software developer specialising in web development by utilising technologies such as React.js, ASP.NET Core MVC, MS SQL and SASS.
                        <ul>
                            <li>10+ Years of Software Development.</li>
                            <li>9+ Years of ASP.Net Web Forms.</li>
                            <li>9+ Years of Web Design working with latest technologies including HTML5, CSS3, LESS, SASS.</li>
                            <li>5+ Years of ASP.Net MVC.</li>
                            <li>3+ Years of JavaScript working with JQuery, Typescript.</li>
                            <li>3+ Years of Responsive Web Design.</li>
                            <li>1 Year of Microsoft SignalR.</li>
                        </ul>

                        I’ve recently started php with Laravel framework.
                    </p>
                    <div class='clearfix' ></div>
                    <ul class='info-list' >
                        <li>
                            <div class='inner' >
                                <h4>Phone Number</h4>
                                <p>(+44) 07307354902</p>
                            </div>
                        </li>
                        <li>
                            <div class='inner' >
                                <h4>Age</h4>
                                <p>{{  date("Y") - 1987  }} Years</p>
                            </div>
                        </li>
                        <li>
                            <div class='inner' >
                                <h4>Website</h4>
                                <p>2mj.uk</p>
                            </div>
                        </li>
                        <li>
                            <div class='inner' >
                                <h4>Hometown</h4>
                                <p>London</p>
                            </div>
                        </li>
                    </ul>
                    
                    <a href='#' class='symp-btn' >Hire Me For Work</a>
                    <a href='{{ url('storage/docs/Mahdi Joveyni-CV.pdf') }}' class='symp-btn link-btn' ><i class='download-icon' ></i>Download Resume</a>
                    
                </div>
            
                
            
            </div>
            
            
            
            
        </div>
        
        
    </div>
 
 @include('layouts.footer')
    
</section>