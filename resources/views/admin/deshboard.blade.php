@extends('admin.app')
@section('content')

<div id="servicesmainDiv" class="container ">
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


                                       <!-- Delete Modal -->

<div class="modal fade" id="servicesdeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body text-center">Do You Want To Delete</div>
            <h4 id="servicesDeleteId" class="modal-body text-center"></h4>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">No</button>
                <button id="servicesDeleteConfromBtn" type="button" class="btn btn-sm btn-danger">Yes</button>
            </div>
        </div>
    </div>
  </div>



                                    <!-- Update Modal -->

<div class="modal fade" id="servicesUpdateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title">Update Service</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body p-4 text-center">
          <h5 id="servicesUpdateId" class="mt-4 "> </h5>
          <div id="servicesEditForm" class="d-none w-100">
          <input id="servicesUpdateTitleID" type="text" class="form-control mb-4" placeholder="Services Title">
          <input id="servicesUpdateIconID" type="text" class="form-control mb-4" placeholder="Services Icon">
          <input id="servicesUpdateDesID" type="text" class="form-control mb-4" placeholder="Services Description">
          </div>

          <img id="servicesEditLoader" class="loading-icon m-5" src="{{asset('img/Loder-2.svg')}}">
          <h5 id="servicesEditWrong" class="d-none">Something Went Wrong !</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Cancel</button>
        <button  id="servicesUpdateConfirmBtn" type="button" class="btn  btn-sm  btn-danger">Update</button>
      </div>
    </div>
  </div>
</div>



                                    <!-- ADD Services Modal -->

<div class="modal fade" id="servicesAddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body p-5 text-center">
          <div id="servicesAddForm" class=" w-100">
          <h6 class="mb-4">Add New Services</h6>
          <input id="servicesTitleAddID" type="text" class="form-control mb-4" placeholder="Services Title">
          <input id="servicesIconAddID" type="text" class="form-control mb-4" placeholder="Services Icon">
          <input id="servicesDesAddID" type="text" class="form-control mb-4" placeholder="Services Description">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Cancel</button>
        <button  id="servicesAddConfirmBtn" type="button" class="btn  btn-sm  btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>


@endsection



