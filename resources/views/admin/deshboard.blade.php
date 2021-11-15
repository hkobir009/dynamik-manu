@extends('admin.app')
@section('content')

<div class="container ">
    <div class="row">
        <div class="col-md-12 p-5">
            <a href="{{url('/create')}}"><button class="btn my-3 btn-sm btn-danger">Add New </button></a>
            <table id="" class="table table-striped table-bordered text-center" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="th-sm font-weight-bold">id</th>
                        <th class="th-sm font-weight-bold">parent_id</th>
                        <th class="th-sm font-weight-bold">Url</th>
                        <th class="th-sm font-weight-bold">Name</th>
                        <th class="th-sm font-weight-bold">Action</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach ($datas as $data)
                      <tr>
                          <td>{{$data->id}}</td>
                          <td>{{$data->parent_id }}</td>
                          <td>{{$data->url}}</td>
                          <td>{{$data->name}}</td>
                          <td>
                            <a href="{{route('delete',[$data->id])}}"><button class="btn btn-danger">Delete</button></a>
                          </td>
                      </tr>
                     @endforeach
                </tbody>
            </table>

        </div>
    </div>
  </div>


@endsection



