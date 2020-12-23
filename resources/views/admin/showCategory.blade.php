@extends('layouts.app')
@section('content')


        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">All Categories</h1>

          <!-- DataTales Example -->
          @if(Session::has('message'))
            <div class="alert alert-danger">{{Session::get('message')}}</div>
            @endif
            @if(count($categories)!=0)
            <div class="card shadow mb-4">

            <div class="card-body">

                <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Owner</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Created at</th>
                      <th>Updated at</th>
                      <th>Delete Category</th>

                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Id</th>
                      <th>Owner</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Created at</th>
                      <th>Updated at</th>
                      <th>Delete category</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  @foreach($categories as $category)
                    <tr>
                      <td>{{$category->id}}</td>
                      <td>{{$category->user->firstname.' '.$category->user->lastname}}</td>
                      <td><a href="{{route('category.getUpdate',$category->id)}}">{{$category->name}}</a></td>
                      <td>{{$category->description}}</td>
                      <td>{{$category->created_at}}</td>
                      <td>{{$category->updated_at}}</td>
                      {{-- <td>
                          <form action="{{route('category.destroy',$category->id)}}" method="category">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                          </form>
                        </td> --}}
                    </tr>
                @endforeach
                  </tbody>
                </table>
              </div>

            </div>
          </div>
          @else
                <h1>No Categories Lets Create</h1>
                @endif
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->

@endsection
@section('scripts')
<script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('js/datatables-demo.js')}}"></script>
@endsection
