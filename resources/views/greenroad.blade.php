@extends('layout')

@section('contenido')

<div class="slider-container rev_slider_wrapper" style="height: 700px;">
    <div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 800, 'gridheight': 700}">
        <ul>
            <li data-transition="fade"> {{--Green road  --}}
                <img src="assets/img/greenroad/akron.jpg"  
                    alt="greenroad"
                    data-bgposition="center center" 
                    data-bgfit="cover" 
                    data-bgrepeat="no-repeat" 
                    class="rev-slidebg">
            </li>
        </ul>
    </div>
</div>
@stop