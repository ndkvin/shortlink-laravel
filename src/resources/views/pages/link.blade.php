@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
                @if ($errors->any())
                    <div class="w-100 mt-2 toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                            <svg class="bd-placeholder-img rounded me-2" width="20" height="20"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice"
                                focusable="false">
                                <rect width="100%" height="100%" fill="#007aff" data-darkreader-inline-fill=""
                                    style="--darkreader-inline-fill:#f01d1d;"></rect>
                            </svg>
                            <strong class="me-auto">Error</strong>
                            <small>Just now</small>
                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                            @foreach ($errors->all() as $error)
                                <div class="text-danger">
                                    {{ $error }}
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
                @if (session('status'))
                    <div class="w-100 mt-2 toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                            <svg class="bd-placeholder-img rounded me-2" width="20" height="20"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice"
                                focusable="false">
                                <rect width="100%" height="100%" fill="#007aff" data-darkreader-inline-fill=""
                                    style="--darkreader-inline-fill:#f01d1d;"></rect>
                            </svg>
                            <strong class="me-auto">Error</strong>
                            <small>Just now</small>
                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                            <div class="text-success">
                                {{ session('status') }}
                            </div>
                        </div>
                    </div>
                @endif
                <form method="POST" action="{{ route('link.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Slug</label>
                        <input type="text" class="form-control" id="slug" aria-describedby="slug" name="slug">
                    </div>
                    <div class="mb-3">
                        <label for="url" class="form-label">Url</label>
                        <input type="text" class="form-control" id="url" name="link">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
