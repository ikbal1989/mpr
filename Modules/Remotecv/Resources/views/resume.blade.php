<?php
    $assetspath    = 'modules/'.Module::find('remotecv'); 

?>
@extends('remotecv::layouts.master')
@section('content')
@include('remotecv::blocks.resume')
@stop
