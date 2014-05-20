@extends('layouts.master')

@section('title')
Branson-Ridley - Contact Us
@stop

@section('description')
Invest in Diamonds, Gold, German Property, Water Rights, Investment
@stop

@section('author')
Branson-Ridley
@stop

@section('keywords')
Diamonds, Gold, German Property, Water Rights, Investment
@stop

@section('nav')
<?php echo $nav; ?>
@stop

@section('intro')
<section class="box" id="contact-us">
    <div class="container">
        <div class="panel" style="margin-top: 98px;">
            <div class="row-fluid">
                <div class="span12 header">
                    <hgroup>
                        <h2>Contact Us</h2>
                    </hgroup>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12 content">
                    <div class="row-fluid">
                        <div class="span6">
                            <h2>Send a message</h2>
                            @include('includes.form')
                        </div>
                        <div class="span6">
                            <h2 class="title"><a href="">Branson Ridley</a></h2>
                            <h4>Branson-Ridley is a Trade Mark of London DE
                                Limited</h4>
                            <p>88 Wood Street</p>
                            <p>London</p>
                            <p>EC2V 7RS</p>
                            <p>0208 528 1016</p>
                            <p>Registered in England &amp; Wales</p>
                            <p>Company Registration Number: 8806847</p>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span12 content" style="margin: 0;padding: 0">
                            <div class="row-fluid">
                                <div class="span12">
                                    <div id="map_canvas"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop