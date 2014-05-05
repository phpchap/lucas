@extends('layouts.master')

@section('title')
London DE Limited - Invest in Water Rights
@stop

@section('description')
Invest in Water Rights
@stop

@section('author')
London DE
@stop

@section('keywords')
German Property, Invest in Water Rights
@stop

@section('nav')
<?php echo $nav; ?>
@stop

@section('contact')
@include('includes.contactForm')
@stop

@section('intro')
<section id="home" class="box">
    <div class="container">
        <div class="panel">
            <div class="row-fluid">
                <div class="span12 header">
                    <hgroup>
                        <h2>Lorem ipsum dolor sit amet</h2>
                    </hgroup>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12 content">
                    <div class="row-fluid">
                        <div class="span5">
                            <h3>Aliquam eget tellus augue</h3>
                            <p>Cras non semper ipsum, venenatis tempus enim. Integer id felis mi. Vivamus euismod in orci vehicula bibendum.</p>
                            <p>Donec consectetur ipsum eu nisl fringilla aliquet. Vestibulum ultricies tortor in neque facilisis, non sollicitudin risus ullamcorper.</p>
                            <p>Quisque urna tortor, rhoncus id tellus vel, rutrum varius nisi. Vivamus ante orci, rutrum vitae cursus in, porttitor eu ligula.</p>
                            <p>Nullam bibendum nulla nec molestie aliquet. Nullam eu justo dolor. Vivamus at consequat arcu, non gravida tortor.</p>
                        </div>
                        <div class="span6">
                            <ul class="snavigation">
                                <li><h2><a class="navigation" data-nav="scroll" href="#/why-invest">Suspendisse eget ante</a></h2></li>
                                <li><h2><a class="navigation" data-nav="scroll" href="#/german-property-market">Lorem ipsum dolor sit ame</a></h2></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop

@section('first_section')
<!-- investment -->
<section id="why-invest" class="box">
    <div class="container">
        <div class="panel">
            <div class="row-fluid">
                <div class="span12 header">
                    <hgroup>
                        <h2>Suspendisse eget ante</h2>
                    </hgroup>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12 content">
                    <div class="row-fluid">
                        <div class="span8">
                            <p>Praesent rhoncus lacus at lobortis aliquet. Curabitur mollis eget ligula in elementum.</p>
                            <p>Nam feugiat quam blandit, egestas mi vel, faucibus leo. Etiam nec turpis at mauris viverra iaculis et a enim.</p>
                            <p>Vestibulum faucibus adipiscing sapien. Nullam dapibus nunc faucibus, vestibulum metus id, venenatis ipsum.</p>
                            <p>Aliquam tincidunt enim vehicula, ultrices turpis sit amet, tristique sapien.</p>
                        </div>
                        <div class="span4">
                            <img class="img-polaroid"
                                 src="http://placehold.it/350x350"
                                 title="Image"
                                 alt="Image"/>
                            <p style="text-align: center">Description of image</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop

@section('second_section')
<!-- investment -->
<section id="german-property-market" class="box">
    <div class="container">
        <div class="panel">
            <div class="row-fluid">
                <div class="span12 header">
                    <hgroup>
                        <h2>Lorem ipsum dolor sit ame</h2>
                    </hgroup>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12 content">
                    <div class="row-fluid">
                        <div class="span3">
                            <img class="img-polaroid"
                                 src="http://placehold.it/350x350"
                                 title="Image"
                                 alt="Image"/>
                            <p style="text-align: center">Description of image</p>
                        </div>
                        <div class="span9">
                            <h3>In tempor magna id viverra pharetra.</h3>
                            <p>Aenean dictum iaculis metus eget laoreet. Vestibulum non est ut lorem suscipit fermentum lacinia ac turpis.</p>
                            <p>Curabitur id leo gravida diam sodales ultricies at vitae ipsum. Nullam lacinia risus nisl, vitae commodo est sagittis vitae.</p>
                            <p>Praesent ac convallis tellus. Nam in leo ante. Suspendisse potenti.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop