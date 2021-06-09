@extends('layouts.app')

@section('main_content')
    <div class="wrapper-page">

        <div class="blue-row">
        </div>

        <div class="container">

            <div class="description">
                <div class="description-inner">
                    <h2>
                        {{ $details['title']}}
                    </h2>

                    <div class="price">
                        <h3>U.S.Price: <span>{{ $details['price']}}</span></h3>

                        <h3>AVAILABLE</h3>

                        <div class="check">
                            Check Availability
                        </div>
                    </div>

                    <p>
                        {{ $details['description'] }}
                    </p>
                </div>

                <div class="advertisement">
                    <img src="{{ asset('img/adv.jpg') }}" alt="adv">
                </div>
            </div>
            
            <div class="pos-ab">
                <img src=" {{ $details['thumb']}} " alt="{{ $details['title']}}">
            </div>

        </div>

        
        <div class="details">
            <div class="container">
                <div class="flex">
                    <div class="inner-flex">
                        <h3>Talent</h3>

                        <div class="">
                            <div class="artist">
                                <div>
                                    Art by:
                                </div>

                                @foreach ($details['artists'] as $text)
                                    <div class="guys">{{ $text }}</div> 
                                @endforeach
                            </div>
                    
                            <div class="writers">
                                <div>
                                    Written by:
                                </div> 
                                
                                @foreach ($details['writers'] as $text)
                                    <div class="guys">{{ $text }}</div> 
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="inner-flex">
                        <h3>Specs</h3>

                        <div>
                            <span></span>

                            <span></span>
                        </div>
                    </div>
                </div>

                <div>

                </div>
            </div>
        </div>
    </div>
@endsection