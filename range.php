<?php
require 'config.php';
require 'header.php';
?>

<!--Start of Find Area-->
<div class="find-area pt-72 pb-72 bg-light">
    <div class="container">
        <div class="row" id="searchborderxs2">
            <div class="col-md-1">
                &nbsp;
            </div>
            <div class="col-md-10" id="searchborder">
                <form action="https://hassconsult.co.ke/real-estate/property-search" class="col-md-12" method="POST" style="padding-left:0px;padding-right:0px;">
                    <div class="col-md-10">

                        <div class="col-md-2 col-lg-2 col-xl-2" style="min-height: 70px;">
                            <div>
                                <input id="search" class="select" style="font-size:13px;color:#000;" size="50" name="location" placeholder="Location" />
                            </div>

                        </div>

                        <div class="col-md-4 pr-pl-5" style="min-height:70px;">
                            <div class="select">
                                <select name="type" id="propertytype" onchange="validate()">
                                    <option value="">Property Type</option>
                                    <option value="1">Apartment</option>
                                    <option value="17">House</option>
                                    <option value="11">Land</option>
                                    <option value="8">Office</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-6 pr-pl-5" style="min-height:70px;">
                            <div class="select">
                                <select name="min_bed" id="bedrooms1">
                                    <option value="">Min Beds</option>
                                    <option value="1">1 Beds</option>
                                    <option value="2">2 Beds</option>
                                    <option value="3">3 Beds</option>
                                    <option value="4">4 Beds</option>
                                    <option value="5">5 Beds</option>
                                    <option value="6">6 Beds</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-6 pr-pl-5" style="min-height:70px;">
                            <div class="select">
                                <select name="max_bed" id="bedrooms2">
                                    <option value="">Max Beds</option>
                                    <option value="1">1 Beds</option>
                                    <option value="2">2 Beds</option>
                                    <option value="3">3 Beds</option>
                                    <option value="4">4 Beds</option>
                                    <option value="5">5 Beds</option>
                                    <option value="6">6 Beds</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-6 pr-pl-5" style="min-height:70px;">
                            <div class="select">
                                <select name="min_price">
                                    <option value="">Min Price</option>
                                    <option value="50000">50,000</option>
                                    <option value="100000">100,000</option>
                                    <option value="250000">250,000</option>
                                    <option value="500000">500,000</option>
                                    <option value="1000000">1M</option>
                                    <option value="2500000">2.5M</option>
                                    <option value="5000000">5M</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-6 pr-pl-5" style="min-height:70px;">
                            <div class="select">
                                <select name="max_price">
                                    <option value="">Max Price</option>
                                    <option value="50000">50,000</option>
                                    <option value="100000">100,000</option>
                                    <option value="250000">250,000</option>
                                    <option value="500000">500,000</option>
                                    <option value="1000000">1M</option>
                                    <option value="2500000">2.5M</option>
                                    <option value="5000000">5M</option>
                                    <option value="7500000">7.5M</option>
                                    <option value="10000000">10M</option>
                                    <option value="12500000">12.5M</option>
                                    <option value="15000000">15M</option>
                                    <option value="17500000">17.5M</option>
                                    <option value="20000000">20M</option>
                                    <option value="22500000">22.5M</option>
                                    <option value="25000000">25M</option>
                                    <option value="27500000">27.5M</option>
                                    <option value="30000000">30M</option>
                                    <option value="32500000">32.5M</option>
                                    <option value="35000000">35M</option>
                                    <option value="37500000">37.5M</option>
                                    <option value="40000000">40M</option>
                                    <option value="42500000">42.5M</option>
                                    <option value="45000000">45M</option>
                                    <option value="47500000">47.5M</option>
                                    <option value="50000000">50M</option>
                                    <option value="52500000">52.5M</option>
                                    <option value="55000000">55M</option>
                                    <option value="57500000">57.5M</option>
                                    <option value="60000000">60M</option>
                                    <option value="62500000">62.5M</option>
                                    <option value="65000000">65M</option>
                                    <option value="67500000">67.5M</option>
                                    <option value="70000000">70M</option>
                                    <option value="72500000">72.5M</option>
                                    <option value="75000000">75M</option>
                                    <option value="77500000">77.5M</option>
                                    <option value="80000000">80M</option>
                                    <option value="82500000">82.5M</option>
                                    <option value="85000000">85M</option>
                                    <option value="87500000">87.5M</option>
                                    <option value="90000000">90M</option>
                                    <option value="92500000">92.5M</option>
                                    <option value="95000000">95M</option>
                                    <option value="97500000">97.5M</option>
                                    <option value="100000000">100M</option>
                                    <option value="100000001">100M +</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-12" style="padding-left:0px;">
                        <div class="col-md-12 pl_search"><button name="search_price" type="submit" class="button search_price lemon pull_right ml-30"><span><span>SEARCH</span></span></button></div>

                        <div class="col-md-12 suburbpad">
                            <div class="col-md-2 suburbcheck"><input type="checkbox" name="suburbs" style="float:left;width:15px;height:15px;" checked> </div>
                            <div class="col-md-10 suburbtxt"> Surrounding Suburbs</div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-1">
                &nbsp;
            </div>
        </div>
    </div>
</div>
<!-- End of Find Area -->
