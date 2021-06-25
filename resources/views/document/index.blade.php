@extends('layouts.back', ['title' => 'Document'])

@section('content')
    @if (\Session::has('success'))
        <div class="alert alert-success" role="alert">
            <i class="mdi mdi-clipboard-check"></i>
            {!! \Session::get('success') !!}
        </div>       
    @endif

<div class="card">
    <div class="card-body">     
        @livewire('document.index')
    </div>
@endsection

@section('custom_script')
    <script src="/js/tooltips.js"></script>
    <script src="/js/popover.js"></script>    
@endsection