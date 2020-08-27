@extends('layouts.app')

@section('title', 'Main Page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Main Page') }}</div>

                <div class="card-body">
                    Content
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
