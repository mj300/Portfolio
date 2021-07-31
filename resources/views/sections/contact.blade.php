@extends('layouts.app')

@section('title',"Contact")

@section('content')
<a href='\' class='close-btn' >
    <span></span>
    <span></span>
</a>
<section class="mt-5">
				
    <div class='contact-block section-block' >
        <div class='container' >
                    <div class='section-header text-center' >
                        <h2 class='animate text-over-block' >Contact Me</h2>
                        <!--divider-->
                        <div class='divider-draft center' ></div>
                        <!--/divider-->
                        <p>
                            I'm available for freelancing. If you want something to be built or just to say hi, feel free to shoot me a message.
                        </p>
            </div>
            
            <div>
                    <form id='contact-form' class='contact-form' action='/contact' method='POST' >
                        @csrf
                        <div id='contact-form-result' ></div>
                        <div class='row' >
                            <div class='col-md-6' >
                                <div class='form-group' >
                                    <input name="name" type='text' class='form-control' placeholder='Name'
                                    value="{{old('name')}}"
                                    required>
                                    <div class='help-block with-errors' ></div>
                                </div>
                            </div>
                            <div class='col-md-6' >
                                <div class='form-group' >
                                    <input name="email" type='email' class='form-control' placeholder='Email' 
                                    value="{{old('email')}}"
                                    required>
                                    <div class='help-block with-errors' ></div>
                                </div>
                            </div>
                        </div>
                        <div class='row' >
                            <div class='col-md-6' >
                                <div class='form-group' >
                                    <input name="phone" type='text' class='form-control' placeholder='Phone'
                                    value="{{old('phone')}}" >
                                    <div class='help-block with-errors' ></div>
                                    
                                </div>
                            </div>
                            <div class='col-md-6' >
                                <div class='form-group' >
                                    <input name="website" type='text' class='form-control' placeholder='Website'
                                    value="{{old('website')}}">
                                    <div class='help-block with-errors' ></div>
                                </div>
                            </div>
                        </div>
                        
                        <div class='form-group' >
                            <textarea name="message" rows='5' class='form-control' placeholder='Message'
                          required>{{old('message')}}</textarea>
                            <div class='help-block with-errors' ></div>
                        </div>
                        <div class='form-group text-center' >
                            <button type='submit' class='symp-btn' >Send Message</button>
                        </div>
                    </form>

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                     @endif
            </div>
        </div>
    </div>

    
    
</section>
@include('layouts.footer')

@endsection