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
                                 src="http://placehold.it/350x350"/></a>
                        </div>
                        <div class="span4">
                            <h3><a href="<?php echo $diamondUrl; ?>">Invest in Diamonds</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eu nisi sit amet sem rutrum scelerisque.</p>
                        </div>
                        <div class="span2">
                            <a href="<?php echo $goldUrl; ?>"><img class="img-polaroid"
                                 src="http://placehold.it/350x350"/></a>
                        </div>
                        <div class="span4">
                            <h3><a href="<?php echo $goldUrl; ?>">Invest in Gold</a></h3>
                            <p>In scelerisque convallis nisi non feugiat. In tempor magna id viverra pharetra. Nulla eu lectus sit amet sem fringilla commodo eu molestie velit</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row-fluid">
                        <div class="span2">
                            <a href="<?php echo $germanUrl; ?>"><img class="img-polaroid"
                                 src="http://placehold.it/350x350"/></a>
                        </div>
                        <div class="span4">
                            <h3><a href="<?php echo $germanUrl; ?>">Invest in German Property</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eu nisi sit amet sem rutrum scelerisque.</p>
                        </div>
                        <div class="span2">
                            <a href="<?php echo $waterUrl; ?>"><img class="img-polaroid"
                                 src="http://placehold.it/350x350"/></a>
                        </div>
                        <div class="span4">
                            <h3><a href="<?php echo $waterUrl; ?>">Invest in Water Rights</a></h3>
                            <p>In scelerisque convallis nisi non feugiat. In tempor magna id viverra pharetra. Nulla eu lectus sit amet sem fringilla commodo eu molestie velit</p>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</section>
@stop