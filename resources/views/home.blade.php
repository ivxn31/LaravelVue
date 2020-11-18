@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                  <div class="inline-block">
                    Dashboard
                  </div>
                  <div class="inline-block">
                    <form action="{{ route('logout') }}" method="post">
                      @csrf
                      <button type="submit">Logout</button>
                    </form>
                  </div>
                </div>

                <div class="card-body">
                  You are logged in!
                  <div class="d-flex align-items-between">
                    <a class="btn btn-success w-50 m-1" href="{{ route('category.create') }}">Add new category</a>
                    <a class="btn btn-success w-50 m-1" href="{{ route('category.index') }}">Show categories</a>
                  </div>

                  <div class="d-flex align-items-between">
                    <a class="btn btn-success w-50 m-1" href="{{ route('subcategory.create') }}">Add new Subcategory</a>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection