@extends('layouts.app')

@section('content')
    <div class="d-lg-flex">
        <div class="flex-lg">
            @include ("sidebar-navigation")
        </div>
        <div class="flex-lg-fill">
            <div>
                @include ("tweet-box")
            </div>

            <div>
                @include ("timeline-list")
            </div>
        </div>
        <div class="flex-lg">
            @include ("friends-list")
        </div>
    </div>
@endsection
