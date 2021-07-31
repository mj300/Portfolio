@extends('layouts.app')

@section('title',"Home")

@section('content')
<a href='\' class='close-btn' >
    <span></span>
    <span></span>
</a>
<section class='single-work' >
    <div class='container' >
        <div class='row' >
            <div class='col-md-8' >
                <img src='{{ url('storage/images/portfolio/'.$project->image_path) }}' alt='{{ $project->name }}' >
            </div>
            <div class='col-md-4' >
                <ul class='work-info' >
                    <li>
                        <h4><i class='client-icon ' ></i>Client</h4>
                        <p>{{ $project->clientName }}</p>
                    </li>
                    
                    <li>
                        
                        <h4><i class='calender-icon' ></i>Date</h4>
                        <p>{{ date('Y, F',strtotime($project->dateCreate)) }}</p>
                    </li>
                    <li>
                        <h4><i class='clock-icon' ></i>Time Taken</h4>
                        <p>{{ $project->time_taken }}</p>
               
                    </li>
                </ul>
            </div>
        </div>
        
        <div class='work-content' >
            <div class='block' >
                <h2>{{ $project->name }}</h2>
                <h4>Info</h4>
                <p>
                {{ $project->Description }}
                </p>
            </div>
            
            <div class='block row' >
                
                
                <div class='col-md-6' >
                    
                    <h4>Demo:</h4>
                    
                 

                    <ul class="ul no-style ">
                        @isset( $project->demo_clientside)
                        <li><a href="{{ $project->demo_clientside }}">Main Demo</a></li>
                        @endisset
                        @isset( $project->demo_managerside)
                        <li><a href="{{ $project->demo_managerside }}">Admin Demo</a></li>
                        @endisset
                       @isset( $project->demo_username)
                       <li>Username:{{ $project->demo_username }}</li> 
                       @endisset
                       @isset( $project->demo_password)
                        <li>Password:{{ $project->demo_password }}</li>
                        @endisset
                        @isset( $project->github)
                        <li class="work">
                            <a href='{{ $project->github }}' >
                                 <i class='github-icon' ></i>
                            </a>
                         </li>
                         @endisset
                    </ul>
                  
                </div>
                
                
                <div class='col-md-6' >
                    
                    <h6>Technologies used:</h6>
                    <div>
                        @foreach ($project->techs as $tech )
                        <span class="badge primary">{{ $tech->name }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')
</section>
@endsection