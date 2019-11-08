@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    
                    
                    @if(auth()->user()->hasRole('librarian'))
                    <h3>Librarian View</h3>
                        <h3>Laravel Libury</h3>
                        <form class="form-inline">
                            <div class="form-group mx-sm-3 mb-2">
                                <label for="bookTitle" class="sr-only">Book Title</label>
                                <input type="text" class="form-control" id="booktitle">
                            </div>
                            <button type="submit" class="btn btn-primary mb-2">Search</button>
                        </form>
                        @endif

                        @if(auth()->user()->hasRole('cardholder'))
                        <h3>Card Holder</h3>
                        @endif
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection