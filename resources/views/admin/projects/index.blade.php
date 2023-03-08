@extends('layouts.app')

@section('content')
    <div class="container">

        {{-- Title della sezione  --}}
        <h1 class="text-center text-danger my-5">
            My Favourite Projects
        </h1>

        {{-- Cards dei progetti  --}}
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

        {{-- Bottoni di redirect  --}}
        <div class="buttons my-5 d-flex justify-content-center">
            <a href="{{route('admin.projects.create')}}" class="btn btn-success">Create a Project</a>
        </div>

    </div>
@endsection