@extends('layouts.app')

@section('content')
<div class="lg:flex">
    <div class="lg:w-1/6">
        @include('_sidebar-links')
    </div>
    <div class="lg:flex-1">
        @include('_publish-tweet')
        

        <div>

        </div>
    </div>
    <div class="lg:w-1/6 lg:mx-8">
        @include('_friends-list')
    </div>
</div>
@endsection
