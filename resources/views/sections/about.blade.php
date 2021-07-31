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
                <div class='col-12 col-md-4  p-3' >
                    <div class='about-person-img' >
                        <img src='{{ URL('storage/images/my-2.jpg') }}' alt='symp'>
                    </div>
                </div>
                <div class='col-12 col-md-8   p-3 about-info' >
                    <p>
                        My name is <b> Mahdi Joveyni</b> and I am a software engineer specialize in backend application. I started web development in 2010 and acquired a strong knowledge and expertise in this field over time.
                        I am a passionate software developer specialising in web development by utilising technologies such as React.js, ASP.NET Core MVC, MS SQL and SASS.
                    </p>
                         <ul class="ml-4">
                            <li>10+ Years of Software Development.</li>
                            <li>9+ Years of ASP.Net Web Forms.</li>
                            <li>9+ Years of Web Design working with latest technologies including HTML5, CSS3, LESS, SASS.</li>
                            <li>5+ Years of ASP.Net MVC.</li>
                            <li>3+ Years of JavaScript working with JQuery, Typescript.</li>
                            <li>3+ Years of Responsive Web Design.</li>
                            <li>1 Year of Microsoft SignalR.</li>
                        </ul>
                        <p>
                        I’ve recently started php with Laravel framework.
                    </p>
                    <div class='clearfix' ></div>
                    <div class="row">
                            <div class='col-12 col-sm-3' >
                                <h6>Phone Number</h6>
                                <p class="inner-p">(+44) 07307354902</p>
                            </div>
                            <div class='col-12 col-sm-3' >
                                <h6>Age</h6>
                                <p class="inner-p">{{  date("Y") - 1987  }} Years</p>
                            </div>
                        <div class='col-12 col-sm-3' >
                            <h6>Website</h6>
                            <p class="inner-p">2mj.uk</p>
                        </div>
                        <div class='col-12 col-sm-3' >
                            <h6>Hometown</h6>
                            <p class="inner-p">London</p>
                        </div>
                    </div>
                    
                    <div class="row">
                            <a href='/message' class=' symp-btn' ><i class='fire-icon' ></i>Hire Me For Work</a>
                            <a href='{{ url('storage/docs/Mahdi-Joveyni-CV.pdf') }}' target="_blank" class='symp-btn link-btn' ><i class='download-icon' ></i>Download Resume</a>
                    </div>
                    
                </div>
            
                
            
            </div>
            
            
            
            
        </div>
        
        
    </div>
 
 @include('layouts.footer')
    
</section>