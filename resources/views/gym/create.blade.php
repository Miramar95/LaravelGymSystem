
@extends('admin.layout.blank')

@section('content')
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Create Gym</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form"   action="{{route('Gym.store')}}" method="POST">
            @csrf
            <div class="card-body">

                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="name" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                    @if ($errors->has('name')) <label class="alert alert-danger">{{ $errors->first('name') }}</label> @endif
                {{--</div>--}}
                 {{--<div class="form-group">--}}
                  {{--<label for="image">Upload Photo</label>--}}
                  {{--<div class="input-group">--}}
                    {{--<div class="custom-file">--}}
                      {{--<input type="file" class="custom-file-input" id="image">--}}
                      {{--<label class="custom-file-label" for="image">Choose file</label>--}}
                    {{--</div>--}}
                    {{--<div class="input-group-append">--}}
                      {{--<span class="input-group-text" id="">Upload</span>--}}
                    {{--</div>--}}
                  {{--</div>--}}
                {{--</div>--}}
                <div class="form-group">
                    <label for="created_at">Creted At</label>
                    <input type="date" name="created_at" class="form-control" id="created_at" placeholder="Enter Name">
                    @if ($errors->has('created_at')) <label class="alert alert-danger">{{ $errors->first('created_at') }}</label> @endif
                </div>

                <div class="form-group">
                    <label for="manager_id">Manager Id</label>
                    <select  name="manager_id" class="form-control" id="manager_id">
                        @foreach($gyms as $gym)
                            <option>
                                {{$gym->manager_id}}
                            </option>
                        @endforeach
                    </select>
                    @if ($errors->has('manager_id')) <label class="alert alert-danger">{{ $errors->first('manager_id') }}</label> @endif
                </div>
                <div class="form-group">
                    <label for="city_id">City Id</label>
                    <select  name="city_id" class="form-control" id="city_id">
                        @foreach($gyms as $gym)
                        <option>
                            {{$gym->city_id}}
                        </option>
                            @endforeach
                    </select>
                    @if ($errors->has('city_id')) <label class="alert alert-danger">{{ $errors->first('city_id') }}</label> @endif
                </div>



                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
        </form>
    </div>
    <!-- /.card -->
@endsection
