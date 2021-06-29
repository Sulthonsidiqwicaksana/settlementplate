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

                    <table class="table table-striped">
                        <tr>
                            <td>Tinggi Sekarang (cm)</td>
                            <td>Telah Turun (cm)</td>
                            <td>Waktu</td>
                        </tr>
                            <td>{{$data->tinggi_sekarang}}</td>
                            <td>{{$data->penurunan}}</td>
                            <td>{{$data->created_at}}</td>
                    </table>
                
                <a href="/export" class="btn btn-outline-success">Download File</a>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection