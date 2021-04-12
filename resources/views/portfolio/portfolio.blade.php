
<section id='portfolio' class='portfolio-section section' >
    <div class='portfolio-block section-block' >
        <div class='container' >
            <div class='row' >
                <div class='col-md-6 col-md-offset-3' >
                    <div class='section-header text-center' >
                        <h2 class='animate text-over-block' >Portfolio</h2>
                        <!--divider-->
                        <div class='divider-draft center' ></div>
                        <!--/divider-->
                        <p>
                            Check out my works.
                        </p>
                    </div>
                </div>
            </div>
      
            
            <div id='portfolio-grid' class='portfolio-items' >
  
                @forelse ($projects as $project)
                <div class='item'  >
                    <div class='inner' >
                        
                        <img alt='{{ $project->name }}' src='{{ url('storage/images/portfolio/'.$project->image_path) }}' >
                        
                        <div class='caption' >
                            
                            <div class='caption-inner' >
                            
                                <h4>{{ $project->name }}</h4>
                                
                                <ul class='links' >
                                    
                                    <li>
                                        <a href='\portfolio\{{ $project->id }}' >
                                            <i class='info-icon fix-icon-pos' ></i>
                                        </a>
                                    </li>
                                    
                                    <li>
                                        <a href='{{ url('storage/images/portfolio/'.$project->image_path) }}'class='image-link' >
                                            <i class='search-icon fix-icon-pos' ></i>
                                        </a>
                                    </li>
                                    
                                </ul>
                            
                            </div>
                            
                            
                        </div>
                        
                    </div>
                </div>

                      
                @empty
                <h4>Project is empty!</h4>
                    
                @endforelse
            </div>
        </div>
    </div>
@include('layouts.footer')
    
</section>