@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                  <div class="inline-block">
                    All our Categories
                  </div>
                  <div class="inline-block">
                    <a class="btn btn-warning" href="{{ route('home') }}">Back</a>
                  </div>
                </div>

                <div class="card-body">
                    <show-category-component :categories="{{ $categories }}"></show-category-component>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection