@extends('layouts.app')
@section('title')
gallery
@endsection
@section('content')

<!-- Current Paintings -->

@if (! empty($data['paintings']) && count($paintings) > 0)
    <div class="panel panel-default">
	    <div class="panel-heading">
            <h2>Current Paintings</h2>
        </div>

        <div class="panel-body">
            <div class="gallery">
                @foreach ($paintings as $painting)
                    <div>
                        <!-- Painting Name -->
                        <div class="gallery-image-text">
                            <div>{{ $painting->name }}</div>
                        </div>
                        <div>
                            <a class="btn btn-info painting-control-btn" href="/painting/{{ $painting->id }}"><i class="fas fa-eye"></i>View</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif


@endsection
