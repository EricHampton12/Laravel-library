@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Search our Collection</div>
                <form class="form-right mt-2 mb-2">
                    <div class="form-group mx-sm-3 mb-2">
                        <label for="bookTitle" class="sr-only">Book Title</label>
                        <input type="text" class="form-control" id="booktitle">
                    </div>
                    <button type="submit" class="btn btn-dark mb-2 ml-3">Search</button>
                </form>
                <form>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col"><h4>Title</h4></th>
                                        <th scope="col"><h4>Author</h4></th>
                                        <th scope="col"><h4>Check Out</h4></th>

                                        @foreach ($books as $book)
                                    <tr>
                                        <td>{{ $book ->title }}</td>
                                        <td>{{ $book ->author }}</td>
                                        <td><button type="submit" id="Available" class="btn btn-dark btn-md">Check Out</button></td>

                                        
                                    </tr>
                                    @endforeach
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
        @endsection