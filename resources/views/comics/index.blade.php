@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Tutti i Comics</h1>
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Type</th>
                      </tr>
                    </thead>
                    <tbody>
                       @foreach ($comics as $comic)
                       <tr>
                        <th scope="row">{{$comic['id'] }}</th>
                        <td>{{$comic['title'] }}</td>
                        <td>{{!!$comic['description'] !!}}</td>
                        <td>{{$comic['type'] }}</td>
                      </tr>
                       @endforeach 
                    </tbody>
                  </table>
            </div>
        </div>
       
      
    </div>
@endsection