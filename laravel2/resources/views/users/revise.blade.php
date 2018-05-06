@extends('users.articleModel')

@section('blog',$blog)

@section('action',$action)

@section('nickName',$nickName)

@section('artTitle',$artData->title)

@section('artContent',$artData->content)

@section('artId',$artData->id)