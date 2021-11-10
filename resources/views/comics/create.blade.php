@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{route('comics.store')}}" method="post">
                    @csrf
                    @method('POST')

                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" name="title" class="form-control" id="title" placeholder="Enter name of comics">
                    </div>
                    <div class="form-group">
                      <label for="description">Description</label>
                      <input type="text" name="description" class="form-control" id="description" placeholder="Enter comics description">
                    </div>
                    <div class="form-group">
                        <label for="thumb">Thumb</label>
                        <input type="text" name="thumb" class="form-control" id="thumb" placeholder="Enter comics thumb">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" name="price" class="form-control" id="price" placeholder="Enter comics price ">
                    </div>
                    <div class="form-group">
                        <label for="series">Series</label>
                        <input type="text" name="series" class="form-control" id="series" placeholder="Enter comics series">
                    </div>
                    <div class="form-group">
                        <label for="sale_date">Sale Date</label>
                        <input type="text" name="sale_date" class="form-control" id="sale_date" placeholder="Enter comics sale ">
                    </div>
                    <div class="form-group">
                        <label for="description">Type</label>
                        <input type="text" name="type" class="form-control" id="type" placeholder="Enter comics type">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
@endsection