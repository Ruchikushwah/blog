@extends('layout')
@section('content')

  <!-- Blog Post -->
  <livewire:public.single-view :post_id="$post_id"/>
  
  <!-- Related Posts Section -->
  @endsection