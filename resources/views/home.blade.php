@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Monitoring Review') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Disini Nanti Table dari database dengan parameter monitornya yaitu X,Y,Z, dan Magneto') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection