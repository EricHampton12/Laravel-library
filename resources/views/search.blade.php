@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Search</div>

                <div class="card-body">
                    
                    <h3>Laravel Libury</h3>
                    <form class="form-inline">
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="bookTitle" class="sr-only">Book Title</label>
                            <input type="text" class="form-control" id="booktitle">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Search</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection