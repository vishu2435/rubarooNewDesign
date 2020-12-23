@extends('layouts.app')


@section('content')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1>Create</h1>
            <form id="inputForm" method="post" action="{{route('category.store')}}" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name"
                      class="form-control @error('name') is-invalid @enderror "
                      id="name"
                      placeholder="Enter name"
                      >
                      @error('name')
                        <span class="invalid-feedback" role="alert">{{$message}}</span>
                        @enderror
              </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" name="description"
                    class="form-control @error('description') is-invalid @enderror "
                    id="description"
                    placeholder="Enter description"
                    >
                    @error('description')
                        <span class="invalid-feedback" style="display: block;" role="alert">{{$message}}</span>
                        @enderror
                </div>
                <button type="submit" id="btnsubmit" class="btn btn-primary">Submit</button>
            </form>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->

@endsection

@section('scripts')
<script src="https://kit.fontawesome.com/2d4db13fbc.js" crossorigin="anonymous"></script>
<script src="{{asset('js/createPost.js')}}"></script>
@endsection
