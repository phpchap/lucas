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
Water Rights, Invest in Water Rights
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
                        <h2>Guide to Investing in Water Rights</h2>
                    </hgroup>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12 content">
                    <div class="row-fluid">
                        <div class="span5">
                            <h3>Invest in Water Rights</h3>
                            <p>With an annual value of over $500(US) billion,
                                Water Rights Trading is one of the best kept
                                secrets of the global financial markets.</p>
                            <p>It is funding and promoting ethical water
                                management projects around the world, which
                                are essential if we are to supply the water
                                requirements of the 10 billion people that
                                will inhabit the planet by 2050. </p>
                        </div>
                        <div class="span6">
                            <ul class="snavigation">
                                <li><h2 class="title"><a class="navigation" data-nav="scroll" href="#/invest-in-water-rights">Investing in Water Rights</a></h2></li>
                                <li><h2 class="title"><a class="navigation" data-nav="scroll" href="#/why-invest-in-water-rights">Why Invest in Water Rights?</a></h2></li>
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
<!-- invest-in-water-rights -->
<section id="invest-in-water-rights" class="box">
    <div class="container">
        <div class="panel">
            <div class="row-fluid">
                <div class="span12 header">
                    <hgroup>
                        <h2>Investing in Water Rights</h2>
                    </hgroup>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12 content">
                    <div class="row-fluid">
                        <div class="span3">
                            <img class="img-polaroid"
                                 src="/img/KyungAhPark.jpg"
                                 title="Kyung-Ah Park"
                                 alt="Kyung-Ah Park"/>
                            <p>Kyung-Ah Park</p>
                        </div>
                        <div class="span9">
                            <p>Water trading is a voluntary exchange or transfer of a quantifiable water allocation between a willing buyer and seller.</p>
                            <p>In a water trading market, the seller holds a water right or entitlement that is surplus to his current water demand, and the buyer faces a water deficit and is willing to pay to meet his water demand.</p>
                            <blockquote style="margin: 15px 0 0 0;">
                                <p>"Investing in water utilities, infrastructure and water rights offers stable, long-term returns"</p>
                                <footer><cite title="Kyung-Ah Park">Kyung-Ah Park</cite> Goldman Sachs Group Inc. 2013</footer>
                            </blockquote>
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
<section id="why-invest-in-water-rights" class="box">
    <div class="container">
        <div class="panel">
            <div class="row-fluid">
                <div class="span12 header">
                    <hgroup>
                        <h2>Why Invest in Water Rights?</h2>
                    </hgroup>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12 content">
                    <div class="row-fluid">
                        <div class="span3">
                            <img class="img-polaroid"
                                 src="/img/dam.jpg"
                                 title="Water Dam"
                                 alt="Water Dam"/>
                        </div>
                        <div class="span9">
                            <p>The three biggest industries in the world at the moment are:</p>
                            <ul style="margin: 0 0 10px 25px">
                                <li>Oil & Gas</li>
                                <li>Electricity</li>
                                <li>Water (Valued at over $500B per annum.)</li>
                            </ul>
                            <p>The only principle difference between water and the others are that water cannot be replaced or manufactured.</p>
                            <p>Power sources such as Nuclear, Solar, Wind, Bio Fuels and coal can all be replicated and interchanged whilst water can never be reproduced at any cost.</p>
                            <p>The opportunities that await investors within the water market are immense.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop