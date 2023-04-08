@extends('layouts.main')
@section('content')

  <div class="container-fluid">
    <!-- breadcrumb start  -->
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Home</a></li>
      <li class="breadcrumb-item"><a href="">Lati se</a></li>
      <li class="breadcrumb-item active" aria-current="page">Ko lati se</li>
    </ol>
    <!-- end of breadcrumb  -->

    <!-- start of form  -->

    <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between"><h6 class="m-0 font-weight text-primary">Update Todoitem</h6> </div>
      <div class="card-body">
      <form action="{{route('todoitem.update',[$todoitem->id])}}" entype="multipart/form-data" method="post"> @csrf
      {{ method_field('PUT') }}
          <div class="form-group">
            <label for="name">Nnkan Lati se| Todoitem</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{$todoitem->name}}" aria-describedby="emailHelp" placeholder="Ko nnkan ti o fe se">
            @error('name')
              <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
            @enderror
          </div>
          <div class="form-group">
            <label for="description">apejuwe/description</label>
            <textarea id="summernote" class="form-control" name="description" id="" cols="70" rows="10">{!! $todoitem->description !!}</textarea>
          </div>
          <div class="form-group">
            <label class="custom-file" for="name">select collection</label>
            <select class="form-control @error('collection') is-invalid @enderror" name="collection" id="">
              <option value="">Mu Akojo ti o fe fi si bi</option>
              <!-- <option value="0">None</option> -->
              @foreach (App\Models\Collection::all() as $collection)
              
              <option value="{{$collection->id}}">{{$collection->name}}</option>
              @endforeach
              
            </select>
            @error('name')
              <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
            @enderror
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary">Imudojuiwon | Update</button>
          </div>
        </form>
      </div>
    </div>

        
   
  </div>




@endsection