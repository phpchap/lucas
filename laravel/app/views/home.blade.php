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

@section('intro')
<div class="span12">
    <hgroup id="intro" style="display: none">
        <h2>London DE</h2>
    </hgroup>
</div>
@stop