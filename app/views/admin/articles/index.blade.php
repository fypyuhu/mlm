@extends('admin.template')

@section('title')
Types @include('partials.button.link',['title'=>'Add New','link'=>route('article.create')])

@stop

@section('content')




@include('partials.error.list',compact('errors')) 

@include('admin.articles._table',compact('articles'))


@stop