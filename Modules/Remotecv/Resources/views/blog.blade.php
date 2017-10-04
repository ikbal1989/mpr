<?php
    $assetspath    = 'modules/'.Module::find('remotecv'); 

?>
@extends('remotecv::layouts.master')
@section('content')
<div class="inside-sec"> 
    <!-- BIO AND SKILLS -->
    <h5 class="tittle">BLOG</h5>
    
    <!-- Blog -->
    <section class="blog blog-page padding-20 padding-top-50 padding-bottom-50 "> 
    
    <!-- Blog Post -->
    <article> 
        {{ Html::image($assetspath."/images/blog-img-1.jpg","",['class'=>'img-responsive']) }}   
        <div class="post-info">
        <div class="post-in">
            <div class="extra"> <span><i class="icon-calendar"></i>Aug 29, 2015</span> <span class="margin-left-15"><i class="icon-user"></i>Admin</span> <span class="margin-left-15"><i class="icon-bubbles"></i> Featured</span></div>
            <a href="#." class="tittle-post"> ENJOYING THE SMALL THINGS </a>
            <p>t's time to play the music. It's time to light the lights. It's time to meet the Muppets on the Muppet Show tonight! Boy the way Glen Miller played Songs the hit parade. Guys like us we had it made. Those were the days. These Happy Days are yours and mine Happy Days.</p>
            <a href="#." class="btn-1">Read MOre <i class="fa fa-angle-right"></i></a> </div>
        </div>
    </article>
    
    <!-- BLOG POST -->
    <article> 
        {{ Html::image($assetspath."/images/blog-img-2.jpg","",['class'=>'img-responsive']) }}   
        <div class="post-info">
        <div class="post-in">
            <div class="extra"> <span><i class="icon-calendar"></i>Aug 29, 2015</span> <span class="margin-left-15"><i class="icon-user"></i>Admin</span> <span class="margin-left-15"><i class="icon-bubbles"></i> Featured</span></div>
            <a href="#." class="tittle-post"> ENJOYING THE SMALL THINGS </a>
            <p>t's time to play the music. It's time to light the lights. It's time to meet the Muppets on the Muppet Show tonight! Boy the way Glen Miller played Songs the hit parade. Guys like us we had it made. Those were the days. These Happy Days are yours and mine Happy Days.</p>
            <a href="#." class="btn-1">Read MOre <i class="fa fa-angle-right"></i></a> </div>
        </div>
    </article>
    
    <!-- BLOG POST -->
    
    <article> 
        {{ Html::image($assetspath."/images/blog-img-3.jpg","",['class'=>'img-responsive']) }}   
        <div class="post-info">
        <div class="post-in">
            <div class="extra"> <span><i class="icon-calendar"></i>Aug 29, 2015</span> <span class="margin-left-15"><i class="icon-user"></i>Admin</span> <span class="margin-left-15"><i class="icon-bubbles"></i> Featured</span></div>
            <a href="#." class="tittle-post"> ENJOYING THE SMALL THINGS </a>
            <p>t's time to play the music. It's time to light the lights. It's time to meet the Muppets on the Muppet Show tonight! Boy the way Glen Miller played Songs the hit parade. Guys like us we had it made. Those were the days. These Happy Days are yours and mine Happy Days.</p>
            <a href="#." class="btn-1">Read MOre <i class="fa fa-angle-right"></i></a> </div>
        </div>
    </article>
    
    <!-- Pagination -->
    <ul class="pagination">
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">Next</a></li>
    </ul>
    </section>
</div>
@stop
