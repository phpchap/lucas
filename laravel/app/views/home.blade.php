@extends('layouts.master')

@section('title')
London DE Limited - Home
@stop

@section('description')
Invest in Diamonds, Gold, German Property, Water Rights, Investment
@stop

@section('author')
London DE
@stop

@section('keywords')
Diamonds, Gold, German Property, Water Rights, Investment
@stop

@section('nav')
<?php echo $nav; ?>
@stop

@section('contact')
@include('includes.contactForm')
@stop

<?php
$diamondUrl = action('HomeController@investInDiamonds');
$goldUrl    = action('HomeController@investInGold');
$germanUrl  = action('HomeController@investInGermanProperty');
$waterUrl   = action('HomeController@investInWaterRights');
?>


@section('intro')
<section id="home" class="box">
    <div class="container">
        <div class="panel">
            <div class="row-fluid">
                <div class="span12 header">
                    <hgroup>
                        <h2>Welcome to London DE LTD</h2>
                    </hgroup>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12 content">
                    <div class="row-fluid">
                        <div class="span2">
                            <a href="<?php echo $diamondUrl; ?>"><img class="img-polaroid"
                                 src="/img/diamond.jpg"/></a>
                        </div>
                        <div class="span4">
                            <h2 class="title"><a href="<?php echo $diamondUrl; ?>">Invest in Diamonds</a></h2>
                            <p>The diamond market has grown by an average of
                                15% year on year for the past 60 years.
                                <br/><a
                                    href="<?php echo $diamondUrl; ?>"
                                    style="background: #000000">find
                                    out more.</a> </p>
                        </div>
                        <div class="span2">
                            <a href="<?php echo $goldUrl; ?>"><img class="img-polaroid"
                                 src="/img/gold.jpg"/></a>
                        </div>
                        <div class="span4">
                            <h2 class="title"><a href="<?php echo $goldUrl; ?>">Invest in Gold</a></h2>
                            <p>Gold has increased in value by over 3,
                                700% in the past 40 years and remains one of
                                the best asset classes to diversify any
                                portfolio. <br/><a style="background: #000000"
                                              href="<?php echo $goldUrl; ?>">
                                    find out more.</a> </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row-fluid">
                        <div class="span2">
                            <a href="<?php echo $germanUrl; ?>"><img class="img-polaroid"
                                 src="/img/german_property_home.jpg"/></a>
                        </div>
                        <div class="span4">
                            <h2 class="title"><a href="<?php echo $germanUrl; ?>">Invest in German Property</a></h2>
                            <p>German Freehold Property prices have not
                                experienced the 'bubble' and have lagged
                                behind their European neighbours. <br/><a
                                    style="background: #000000" href="<?php
                                echo $germanUrl; ?>">find out more.</a> </p>
                        </div>
                        <div class="span2">
                            <a href="<?php echo $waterUrl; ?>"><img class="img-polaroid"
                                 src="/img/dam.jpg"/></a>
                        </div>
                        <div class="span4">
                            <h2 class="title"><a style="background: #000000"
                                                 href="<?php echo $waterUrl; ?>">Invest in Water Rights</a></h2>
                            <p>With an annual value of over $500(US) billion,
                                Water Rights Trading is one of the best kept
                                secrets of the global financial markets. <br/><a
                                    style="background: #000000"
                                    href="<?php echo $waterUrl; ?>">find
                                    out more.</a>
                            </p>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</section>
@stop