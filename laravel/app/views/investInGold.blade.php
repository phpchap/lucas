@extends('layouts.master')

@section('title')
London DE Limited - Invest in Gold
@stop

@section('description')
Invest in Gold
@stop

@section('author')
London DE
@stop

@section('keywords')
Gold, Invest in Gold
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
                        <h2>Guide to Investing in Gold</h2>
                    </hgroup>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12 content">
                    <div class="row-fluid">
                        <div class="span6">
                            <h3>Lorem ipsum dolor sit amet, consectetur</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mollis pretium arcu, et iaculis elit molestie eu. </p>
                        </div>
                        <div class="span6">
                            <ul class="snavigation">
                                <li><h2><a class="navigation" data-nav="scroll" href="#/invest-in-gold">INVESTMENT IN GOLD</a></h2></li>
                                <li><h2><a class="navigation" data-nav="scroll" href="#/gold-coins">GOLD COINS</a></h2></li>
                                <li><h2><a class="navigation" data-nav="scroll" href="#/technical-specification">TECHNICAL SPECIFICATION</a></h2></li>
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
<section id="invest-in-gold" class="box">
    <div class="container">
        <div class="panel">
            <div class="row-fluid">
                <div class="span12 header">
                    <hgroup>
                        <h2>Investment in Gold</h2>
                    </hgroup>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12 content">
                    <div class="row-fluid">
                        <div class="span9">
                            <h2>Totally Exempt from VAT and Capital Gains Tax</h2>
                            <p>Various Countries now issue a one-ounce bullion coin. These coins are sold for a small premium over the spot gold price.</p>
                            <p>Britannias were first minted in 1987, and come in four different weights: from one troy ounce to fractional sizes of quarter ounce, tenth ounce and half ounce.</p>
                            <p>The gold Britannia is regarded by coin enthusiasts as one of the most beautiful bullion coins in the world.</p>
                            <p>Bullion versions and proofs (coins struck using special, high-quality minting processes for collectors) have been distributed every year since 1987. Most of the proof coins are sold only in full sets.</p>
                            </p>
                        </div>
                        <div class="span3">
                            <img class="img-polaroid"
                                 src="/img/gold.jpg"
                                 title="gold bars"
                                 alt="gold bars"/>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span9">
                            <h3>VAT FREE FROM JANUARY 2000</h3>
                            <p>Investment gold coins became VAT free in Britain. They are not subject to capital gains tax because they are legal tender in the UK.</p>
                        </div>
                        <div class="span3">
                            <img class="img-polaroid"
                                 src="/img/hmrc.jpg"
                                 title="HMRC"
                                 alt="HMRC"/>
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
<section id="invest-in-gold" class="box">
    <div class="container">
        <div class="panel">
            <div class="row-fluid">
                <div class="span12 header">
                    <hgroup>
                        <h2>Gold Coins</h2>
                    </hgroup>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12 content">
                    <div class="row-fluid">
                        <div class="span9">
                            <h3>THE GOLD BRITANNIA COIN FAMILY</h3>
                            <p>Gold Britannia coins are available in four different weights and sizes, starting at one ounce to one tenth of an ounce.</p>
                            <p>Britannia – the female warrior embodiment of the ancient Celtic Britons – featured on Roman coins 2,000 years ago and has figured on British coinage over the last few hundred years.</p>
                            <h3>LOW PREMIUM OVER GOLD CONTENT</h3>
                            <p>Like most of the one ounce gold bullion coins, a 3% premium over the current gold fix was made available to world bullion dealers, so after allocation cost, the coins would be accessible to investors in quantity at nearly 4% to 5%, over intrinsic gold values, and for single pieces there would be a 10% premium.</p>
                        </div>
                        <div class="span3">
                            <img class="img-polaroid"
                                 src="/img/britannia_coins.jpg"
                                 title="Britannia Coins"
                                 alt="Britannia Coins"/>
                            <p>Britannia Coins</p>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span12">
                            <h3>HIGHER PREMIUM ON SMALLER SIZES</h3>
                            <p>The fractional sizes were assigned to dealers at a higher premium of 5%, 7% and 9% accordingly. The full one ounce coin has always been more favoured than the fractional coins, mostly only being obtained as singles, so that in practice, it would usually cost 20% to 50% premium for the tenth ounce and 10% to 15% premium for the half and quarter ounce.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop

@section('third_section')
<!-- supply-vs-demand -->
<section id="technical-specification" class="box">
    <div class="container">
        <div class="panel">
            <div class="row-fluid">
                <div class="span12 header">
                    <hgroup>
                        <h2>Technical Specification</h2>
                    </hgroup>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12 content">
                    <div class="row-fluid">
                        <div class="span12">
                            <img class="img-polaroid"
                                 src="/img/gold_prices.gif"
                                 title="Gold Prices"
                                 alt="Gold Prices"/>
                            <p>&nbsp;</p>
                            <p>The 1/12th of the alloy which is not gold is copper for issues until 1989, and silver from 1990.</p>
                            <p>Diameter = Diameter in millimetres.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop