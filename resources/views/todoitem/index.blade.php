@extends('layouts.main')
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
                        <th>Lati se</th>
                        <th>Apejuwe</th>
                        <th>Akojo</th>
                        <th>-</th>
                        <th>-</th>
                      </tr>
                    </thead>
                    <tbody>
                      @if (is_countable($todoitems) && count($todoitems)>0)
                      @foreach ($todoitems as $key=>$todoitem)
                      <tr>
                        <td>{{$key+1}}</td>
                        <td>{{ $todoitem->name }}</td>
                        <td>{!! $todoitem->description !!}</td>
                        
                        <td>{{$todoitem->collection->name ?? 'None'}}</td>
                        

                        <td><a href="{{route('todoitem.edit',[$todoitem->id])}}"><button type="submit" class="btn btn-sm btn-secondary">Edit</button></a></td>
                        <td><form action="{{route('todoitem.destroy',[$todoitem->id])}}" method="post">@csrf
                          {{ method_field('DELETE') }}
                          <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form></td>
                      </tr>
                      @endforeach
                      @else 
                      <td><h6>No todo created yet| Ko si lati se ti o seda</h6></td>
                      @endif
                    </tbody>
                  </table>
                </div>
                <div class="card-footer"></div>
              </div>

        
   
  </div>




@endsection