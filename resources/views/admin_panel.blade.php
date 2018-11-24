@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Admin Panel</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {!! $dataTable->table(['class'=>'mdl-data-table','style'=>"width:100%"]) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('scripts')
{!! $dataTable->scripts() !!}
@endpush
