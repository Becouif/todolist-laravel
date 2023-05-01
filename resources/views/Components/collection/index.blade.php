@extends('Components.layouts.main')
@section('content')

  <div class="container-fluid">
    <!-- breadcrumb start  -->
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Akojo</li>
    </ol>
    <!-- end of breadcrumb  -->

    <div>
      @if (Session::has('message'))
        <div class="alert alert-success">{{Session::has('message')}}</div>
        
      @endif
    </div>
    <!-- start of form  -->

    <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">View Collection|Wo Akojo</h6>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>ID</th>
                        <th>Oruko</th>
                        <th>Apejuwe</th>
                        <th>-</th>
                        <th>-</th>
                      </tr>
                    </thead>
                    <tbody>
                      @if (count($collections)>0)
                      @foreach ($collections as $key=>$collection)
                      <tr>
                        <td>{{$key+1}}</td>
                        <td>{{ $collection->name }}</td>
                        <td>{!! $collection->description !!}</td>
                        <td><a href="{{route('collection.edit',[$collection->id])}}"><button type="submit" class="btn btn-sm btn-secondary">Edit</button></a></td>
                        <td><form action="{{route('collection.destroy',[$collection->id])}}" method="post">@csrf
                          {{ method_field('DELETE') }}
                          <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form></td>
                      </tr>
                      @endforeach
                      @else 
                      <td><h6>No Collection| Kosi Akojo ti o seda</h6></td>
                      @endif
                    </tbody>
                  </table>
                </div>
                <div class="card-footer"></div>
              </div>

        
   
  </div>




@endsection