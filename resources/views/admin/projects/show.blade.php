@extends('layouts.app')

@section('content')

<header>
    <h1 class="text-success text-center my-5"> 
        {{$project->title}}
    </h1>
</header>

<div class="container">

    {{-- Card --}}
    <div class="card h-100 mb-3">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{$project->image}}" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8 text-center">
            <div class="card-body">
              <h2 class="card-title mb-4">{{$project->title}}</h2>
              <h4 class="mb-3">Project Description:</h4>
              <p class="card-text">{{$project->description}}</p>
              <h4 class="mb-3">Techonolgies:</h4>
              <p class="card-text">{{$project->techonologies_used}}</p>
            </div>
          </div>
        </div>
      </div>

      {{-- Bottoni di redirect  --}}
      <div class="buttons mt-3 d-flex justify-content-between">
          <a href="{{$project->full_code || 'https://github.com/RobertoSimonini?tab=repositories'}}" class="btn btn-success">View full code</a>
          <a href="{{url('admin/projects') }}" class="btn btn-secondary">Back</a>
      </div>

</div>
@endsection