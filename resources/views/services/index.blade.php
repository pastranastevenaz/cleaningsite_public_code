@extends('layouts.app')

@section('content')
    <div>
        <h1 class="text-center">My Services</h1>

        @if(count($services)>0)
            @foreach($services as $service)

                <div class="post">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            {{ $service->client->name }}
                        </div>
                    </div>
                </div>

            @endforeach
        @endif
    </div>
@endsection