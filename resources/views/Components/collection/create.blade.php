@extends('Components.layouts.main')
@section('content')

  <div class="container-fluid">
    <!-- breadcrumb start  -->
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Home</a></li>
      <li class="breadcrumb-item"><a href="">Akojo</a></li>
      <li class="breadcrumb-item active" aria-current="page">Da Akojo</li>
    </ol>
    <!-- end of breadcrumb  -->

    <!-- start of form  -->

    <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between"><h6 class="m-0 font-weight text-primary">Create Collection</h6> </div>
      <div class="card-body">
      <form action="{{route('collection.store')}}" entype="multipart/form-data" method="POST">@csrf
          <div class="form-group">
            <label for="name">oruko akojo/collection name</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="emailHelp" placeholder="Ko oruko akojo">
            @error('name')
              <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
            @enderror
          </div>
          <div class="form-group">
            <label for="description">apejuwe/description</label>
            <textarea id="summernote" class="form-control" name="description" id="" cols="70" rows="10"></textarea>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary bg-primary">Fi si le | Submit</button>
          </div>
        </form>
      </div>
    </div>

        
   
  </div>




@endsection