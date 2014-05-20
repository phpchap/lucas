@extends('layouts.master')

@section('title')
London DE Limited - Invest in German Property
@stop

@section('description')
Invest in German Property
@stop

@section('author')
London DE
@stop

@section('keywords')
German Property, Invest in German Property
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
                        <h2>Guide to Investing in German Property</h2>
                    </hgroup>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12 content">
                    <div class="row-fluid">
                        <div class="span5">
                            <h3>Invest in German Freehold Property</h3>
                            <p>For many years German Freehold Property prices
                                lagged behind those of their European
                                neighbours and they have not experienced the
                                'bubble' effects of the UK property market.</p>
                                <p>Furthermore, Germany enjoys an open property
                                market which is easily accessible to foreign
                                investors, with full-proof land registries and
                                legal protection.</p>
                        </div>
                        <div class="span6">
                            <ul class="snavigation">
                                <li><h2 class="title"><a class="navigation" data-nav="scroll" href="#/why-invest">WHY INVEST IN GERMAN FREEHOLD PROPERTY?</a></h2></li>
                                <li><h2 class="title"><a class="navigation" data-nav="scroll" href="#/german-property-market">DETAILS ABOUT THE GERMAN PROPERTY MARKET</a></h2></li>
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
                        <h2>Why invest in German Freehold Property?</h2>
                    </hgroup>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12 content">
                    <div class="row-fluid">
                        <div class="span7">
                            <ol>
                                <li>Many industry professionals believe the German property market is seriously undervalued at present.</li>
                                <li>Unlike the London market an entry level German investment property in close proximity to Berlin can be sourced from as little as &euro;50,000</li>
                                <li>Stable Economy - For years the German nation has worked to reach an equilibrium of financial stability and has succeeded at every turn. Now this country has one of the most reliable economies in the world.</li>
                                <li>Developed Infrastructure - German transportation is modern, well-developed and efficient and the country is steadily increasing its dependency of renewable energy sources. Unlike the UK the railways are inexpensive and reliable.</li>
                                <li>Equal Economical Conditions - Unlike other countries that discriminate local and overseas investors, Germany offers equal benefits and limitation to any investor without notice country of origin.</li>
                            </ol>
                        </div>
                        <div class="span5">
                            <img class="img-polaroid"
                                 src="/img/german_property.jpg"
                                 title="German Property"
                                 alt="German Property"/>
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
                        <h2>German Property Market</h2>
                    </hgroup>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12 content">
                    <div class="row-fluid">
                        <div class="span7">
                            <h3>Contact us today for full information on available opportunities.</h3>
                            <p>Unlike the UK, Germany is yet to experience a bull market in property and prices have remained stable leaving plenty of upside potential. </p>
                            <p>We believe this upside could be seen in the next 3 - 5 years hence we are offering freehold property in close proximity to the Berlin area.</p>
                            <p>Unlike fractional ownership schemes, time share and pooled funds we believe it always makes good business sense to own an asset outright, in your name as the 100% legal owner.</p>
                            <p>Our management team have access to a large number of properties and have all the necessary legal contacts to ensure your purchase is swift and secure.</p>
                        </div>
                        <div class="span5">
                            <img class="img-polaroid"
                                 src="/img/bull_market.jpg"
                                 title="Bull Market"
                                 alt="Bull Market"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop