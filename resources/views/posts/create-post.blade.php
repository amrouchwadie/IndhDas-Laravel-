@extends('layouts.main-app')

@section('styles')
<meta name="csrf-token" content="{{ csrf_token() }}" />
    {{-- CKEditor 4 CDN --}}
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
@endsection

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-xl-12 text-right">
            <a href="{{ route('posts',app()->getLocale()) }}" class="btn btn-danger"> {{ __('Back') }} </a>
        </div>
    </div>

    <form action="{{ route('posts.store',app()->getLocale()) }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-sm-12 col-12 m-auto">

                @if (Session::has('success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert"></button>
                        {{ Session::get('success') }}
                    </div>
                @elseif(Session::has('failed'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        {{ Session::get('failed') }}
                    </div>
                @endif

                <div class="card shadow">

                    <div class="card-header">
                        <h4 class="card-title font-weight-bold">{{ __('Add News') }}</h4>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label> {{ __('Title') }} </label>
                            <input type="text" class="form-control" name="title" placeholder="{{ __('Title') }}">
                        </div>
                        <div class="form-group">
                            <label> {{ __('Body') }} </label>
                            <textarea class="form-control" id="description" placeholder="{{ __('Body') }}"
                                name="description"></textarea>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-success"> {{ __('Add') }} </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    CKEDITOR.replace('description', {
        filebrowserUploadUrl: "{{ route('posts.upload',app()->getLocale(), ['_token' => csrf_token()]) }}",
        filebrowserUploadMethod: 'form'
    })
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>

@endsection
