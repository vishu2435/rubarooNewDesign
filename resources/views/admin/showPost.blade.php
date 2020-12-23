@extends('layouts.app')
@section('content')


        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">All Posts</h1>

          <!-- DataTales Example -->
          @if(Session::has('message'))
            <div class="alert alert-danger">{{Session::get('message')}}</div>
            @endif
          <div class="card shadow mb-4">

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Owner</th>
                      <th>Title</th>
                      <th>Image</th>
                      <th>Created at</th>
                      <th>Updated at</th>
                      <th>Delete Post</th>

                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Id</th>
                      <th>Owner</th>
                      <th>Title</th>
                      <th>Image</th>
                      <th>Created at</th>
                      <th>Updated at</th>
                      <th>Delete Post</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  @foreach($posts as $post)
                    <tr>
                      <td>{{$post->id}}</td>
                      <td>{{$post->user->firstname.' '.$post->user->lastname}}</td>
                      <td><a href="{{route('post.getUpdate',$post->id)}}">{{$post->title}}</a></td>
                      <td>
                      @php
                            if(substr($post->image,0,4)=='http'){
                            @endphp
                                <img style="height: 40px;" src='{{$post->image}}' alt='' srcset=''>;
                            @php
                            }else{
                            @endphp

                                <img style="height: 40px;" src='{{asset("storage/". $post->image)}}' alt='' srcset=''>;
                            @php
                        }
                        @endphp
                      </td>
                      <td>{{$post->created_at}}</td>
                      <td>{{$post->updated_at}}</td>
                      <td>
                          <form action="{{route('post.destroy',$post->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                          </form>
                        </td>
                    </tr>
                @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

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
