@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Agent Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        
                        View Listed lands

                        
                            @foreach($lands as $land)

                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title"> Location : {{ $land->land_location }}</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Land Size : {{ $land->land_size }}</h6>
                                    <p class="card-text">Title No :{{ $land->title_no }}</p>
                                    <a href="#" class="card-link">Price :Ksh {{ number_format($land->land_price) }}</a>

                                </div>
                                <div class="card-footer">
                                    <a href="{{ url('/agent/update/land/' .$land->id) }}"><button class="btn-primary">Update Land Details</button></a>
                                </div>

                            </div>
                                @endforeach

                
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection