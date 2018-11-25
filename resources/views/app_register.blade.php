@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Register New Application</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="/oauth/clients" method="POST">

                            <div class="form-group">
                                <label for="name">Application Name</label>
                                <input type="text" name="name" class="form-control"/>
                            </div>

                            <div class="form-group">
                                <label for="name">Homepage URL</label>
                                <input type="text" name="homeurl" class="form-control"/>
                            </div>

                            <div class="form-group">
                                <label for="name">Application Description</label>
                                <input type="text" name="desc" class="form-control"/>
                            </div>

                            <div class="form-group">
                                <label for="name">Authorization callback URL</label>
                                <input type="text" name="callback" class="form-control"/>
                            </div>

                            <button class="btn-primary" type="submit">Submit</button>
                        </form>

                        <br/>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('scripts')

@endpush
