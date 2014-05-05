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
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mollis pretium arcu, et iaculis elit molestie eu. Nunc faucibus ante et nulla fringilla, a commodo massa adipiscing. Praesent aliquet varius diam, at congue massa viverra in. In dignissim nisi at velit pretium consequat. Duis tristique magna quam, non fermentum lectus fermentum eu. Quisque et est eu ante fringilla adipiscing et non magna. Ut blandit consequat nulla ut mattis. Curabitur dui lorem, sodales a metus at, dignissim aliquam quam. Vivamus leo elit, sodales in gravida sit amet, mollis at sapien. Aliquam porttitor felis quis nulla consectetur, a dignissim mi feugiat. Cras ac nunc mauris.</p>
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
                        <div class="span8">
                            <h2>Totally Exempt from VAT and Capital Gains Tax</h2>
                            <p>Various Countries now issue a one-ounce bullion coin. These coins are sold for a small premium over the spot gold price.</p>
                            <p>Britannias were first minted in 1987, and come in four different weights: from one troy ounce to fractional sizes of quarter ounce, tenth ounce and half ounce.</p>
                            <p>The gold Britannia is regarded by coin enthusiasts as one of the most beautiful bullion coins in the world.</p>
                            <p>Bullion versions and proofs (coins struck using special, high-quality minting processes for collectors) have been distributed every year since 1987. Most of the proof coins are sold only in full sets.</p>
                            </p>
                        </div>
                        <div class="span4">
                            <img class="img-polaroid"
                                 src="http://placehold.it/350x350"
                                 title="Image"
                                 alt="Image"/>
                            <p style="text-align: center">Description of image</p>
                        </div>
                    </div>

                    <div class="row-fluid">
                        <div class="span2">
                            <img class="img-polaroid"
                                 src="http://placehold.it/350x350"
                                 title="Image"
                                 alt="Image"/>
                        </div>
                        <div class="span10">
                            <h3>VAT FREE FROM JANUARY 2000</h3>
                            <p>Investment gold coins became VAT free in Britain. They are not subject to capital gains tax because they are legal tender in the UK.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop

@section('second_section')
<!-- gold-coins -->
<section id="gold-coins" class="box">
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
                        <div class="span8">
                            <h3>THE GOLD BRITANNIA COIN FAMILY</h3>
                            <p>Gold Britannia coins are available in four different weights and sizes, starting at one ounce to one tenth of an ounce.</p>
                            <p>Britannia – the female warrior embodiment of the ancient Celtic Britons – featured on Roman coins 2,000 years ago and has figured on British coinage over the last few hundred years.</p>
                        </div>
                        <div class="span4">
                            <div class="flexslider">
                                <ul class="slides">
                                    <li>
                                        <img class="img-polaroid"
                                             src="http://placehold.it/350x150"/>
                                        <p class="customer">Image 1</p>
                                    </li>
                                    <li>
                                        <img class="img-polaroid"
                                             src="http://placehold.it/350x150"/>
                                        <p class="customer">Image 2</p>
                                    </li>
                                    <li>
                                        <img class="img-polaroid"
                                             src="http://placehold.it/350x150"/>
                                        <p class="customer">Image 3</p>
                                    </li>
                                    <li>
                                        <img class="img-polaroid"
                                             src="http://placehold.it/350x150"/>
                                        <p class="customer">Image 4</p>
                                    </li>
                                    <li>
                                        <img class="img-polaroid"
                                             src="http://placehold.it/350x150"/>
                                        <p class="customer">Image 5</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12 content">
                    <div class="row-fluid">
                        <div class="span4">
                            <img class="img-polaroid"
                                 src="http://placehold.it/350x350"
                                 title="Image"
                                 alt="Image"/>
                        </div>
                        <div class="span8">
                            <h3>LOW PREMIUM OVER GOLD CONTENT</h3>
                            <p>Like most of the one ounce gold bullion coins, a 3% premium over the current gold fix was made available to world bullion dealers, so after allocation cost, the coins would be accessible to investors in quantity at nearly 4% to 5%, over intrinsic gold values, and for single pieces there would be a 10% premium.</p>
                            <h3>HIGHER PREMIUM ON SMALLER SIZES</h3>
                            <p>The fractional sizes were assigned to dealers at a higher premium of 5%, 7% and 9% accordingly. The full one ounce coin has always been more favoured than the fractional coins, mostly only being obtained as singles, so that in practice, it would usually cost 20% to 50% premium for the tenth ounce and 10% to 15% premium for the half and quarter ounce.</p>
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
                            <table class="table">
                                <tr>
                                    <th>Size</th>
                                    <th>Face Value</th>
                                    <th>Diameter</th>
                                    <th>Weight</th>
                                    <th>Alloy</th>
                                    <th>Gold Content</th>
                                    <th>Gold Content</th>
                                </tr>
                                <tr>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>mms.</td>
                                    <td>Grams</td>
                                    <td>/1.000</td>
                                    <td>Grams</td>
                                    <td>Troy Ounces</td>
                                </tr>
                                <tr>
                                    <td>One Ounce</td>
                                    <td>£100</td>
                                    <td>32.69</td>
                                    <td>34.0500</td>
                                    <td>.917</td>
                                    <td>31.104</td>
                                    <td>1.0000</td>
                                </tr>
                                <tr>
                                    <td>Half</td>
                                    <td>£50</td>
                                    <td>27.00</td>
                                    <td>17.0250</td>
                                    <td>.917</td>
                                    <td>15.552</td>
                                    <td>0.5000</td>
                                </tr>
                                <tr>
                                    <td>Quarter</td>
                                    <td>£25</td>
                                    <td>22.00</td>
                                    <td>8.5130</td>
                                    <td>.917</td>
                                    <td>7.776</td>
                                    <td>0.2500</td>
                                </tr>
                                <tr>
                                    <td>Tenth</td>
                                    <td>£10</td>
                                    <td>16.50</td>
                                    <td>3.4120</td>
                                    <td>.917</td>
                                    <td>3.110</td>
                                    <td>0.1000</td>
                                </tr>
                            </table>
                            <p>The 1/12th of the alloy which is not gold is copper for issues until 1989, and silver from 1990.</p>
                            <p>Diameter = Diameter in millimetres.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12 content">
                    <div class="row-fluid">
                        <div class="span2">
                            <img class="img-polaroid"
                                 src="http://placehold.it/350x350"
                                 title="Image"
                                 alt="Image"/>
                        </div>
                        <div class="span10">
                            <h3>GOLD BRITANNIA COINS – FIND OUT MORE</h3>
                            <p>Consider protecting your wealth and investing in gold coins or bullion.</p>
                            <p>We welcome you to <b>contact us on <tel>+44 (0) 207 859 4754</tel></b> to discuss your investment needs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop