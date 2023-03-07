@extends('layouts.app')

@section('content')
    <div class="container">

        <h1 class="text-center text-primary my-5">
            Projects
        </h1>

        <div class="row g-5">

            @foreach ($projects as $project)
            <div class="col-4">
                <div class="card text-center">
                    <img src="{{$project->image}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$project->title}}</h5>
                      <p class="card-text">Created at: {{$project->created_at}}</p>
                      <a href="{{route('admin.projects.show', $project->id)}}" class="btn btn-primary">See more</a>
                    </div>
                  </div>
            </div>
            @endforeach

        </div>
    </div>
@endsection