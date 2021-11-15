@extends('admin.app')
@section('content')
                                    <!-- ADD Menu -->
<div class="container ">
    <div class="row">
        <div class="col-md-12 p-5">

         @if(Session::has('msg'))
         <div class="alert alert-primary" >
            {{Session::get('msg')}}
          </div>
         @endif
            <h4 class="test-center">Create New Menu Here</h4>
            <form action="" method="POST">
                @csrf
                    <!-- Name input -->
                    <div class="form-outline mb-4">
                      <input type="text" name="parent_id"class="form-control" />
                      <label class="form-label" for="form4Example1">parant ID</label>
                    </div>

                    <!-- Name input -->
                    <div class="form-outline mb-4">
                      <input type="text" name="name" class="form-control" />
                      <label class="form-label" for="form4Example2">Menu Name</label>
                    </div>

                    <!-- Url input -->
                    <div class="form-outline mb-4">
                        <input type="text" name="url" class="form-control" />
                        <label class="form-label" for="form4Example2">Menu Url</label>
                      </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">Save Menu</button>
            </form>
        </div>
    </div>
  </div>



@endsection



