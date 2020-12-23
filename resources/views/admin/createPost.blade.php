@extends('layouts.app')


@section('content')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1>Create</h1>
            <form id="inputForm" method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title"
                      class="form-control @error('title') is-invalid @enderror "
                      id="title"
                      placeholder="Enter Title"
                      >
                      @error('title')
                        <span class="invalid-feedback" role="alert">{{$message}}</span>
                        @enderror
              </div>
              <div class="form-group">
                  <label for="file">File</label>
                  <input type="file" name="image" id="image" class="form-control">
                  @error('image')
                        <span class="invalid-feedback" role="alert">{{$message}}</span>
                    @enderror
              </div>
                <div class="form-group">
                    <label for="body">Post Body</label>
                    <div>
                        <button onclick="event.preventDefault();execCmd('bold')"><i class="fa fa-bold"></i></button>
                        <button onclick="event.preventDefault();execCmd('italic')"><i class="fa fa-italic"></i></button>
                        <button onclick="event.preventDefault();execCmd('underline')"><i class="fa fa-underline"></i></button>
                        <button onclick="event.preventDefault();execCmd('justifyLeft')"><i class="fa fa-align-left"></i></button>
                        <button onclick="event.preventDefault();execCmd('justifyCenter')"><i class="fa fa-align-center"></i></button>
                        <button onclick="event.preventDefault();execCmd('justifyRight')"><i class="fa fa-align-right"></i></button>
                        <button onclick="event.preventDefault();execCmd('justifyFull')"><i class="fa fa-align-justify"></i></button>
                        <button onclick="event.preventDefault();execCmd('indent')"><i class="fa fa-indent"></i></button>
                        <!-- <button onclick="event.preventDefault();execCmd('bold')"><i class="fa fa-dedent"></i></button> -->
                        <button onclick="event.preventDefault();execCmd('subscript')"><i class="fa fa-subscript"></i></button>
                        <button onclick="event.preventDefault();execCmd('superscript')"><i class="fa fa-superscript"></i></button>
                        <button onclick="event.preventDefault();execCmd('undo')"><i class="fa fa-undo"></i></button>
                        <button onclick="event.preventDefault();execCmd('redo')"><i class="fa fa-redo"></i></button>
                        <button onclick="event.preventDefault();execCmd('insertUnorderedList')"><i class="fa fa-list-ul"></i></button>
                        <button onclick="event.preventDefault();execCmd('insertOrderedList')"><i class="fa fa-list-ol"></i></button>
                        <button onclick="event.preventDefault();execCmd('insertParagraph')"><i class="fa fa-paragraph"></i></button>
                        <select onchange="execCommandWithArg('formatBlock',this.value)">
                            <option value="H1">H1</option>
                            <option value="H2">H2</option>
                            <option value="H3">H3</option>
                            <option value="H4">H4</option>
                            <option value="H5">H5</option>
                            <option value="H6">H6</option>

                        </select>
                        <button onclick="event.preventDefault();execCmd('insertHorizontalRule')">Hr</button>
                        <button onclick="event.preventDefault();execCommandWithArg('createLink',prompt('Enter a Url','http://'))"><i class="fa fa-link"></i></button>
                        <button onclick="event.preventDefault();execCmd('unlink')"><i class="fa fa-unlink"></i></button>
                        <button onclick="event.preventDefault();toggleEdit()">Toggle Edit</button>
                        <select  onchange="execCommandWithArg('fontName',this.value)">
                            <option value="Arial">Arial</option>
                            <option value="Comic Sans Ms">Comic Sans Ms</option>
                            <option value="Courier">Courier</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Tahoma">Tahoma</option>
                            <option value="Times New Roman">Times New Roman</option>


                        </select>
                        <select  onchange="execCommandWithArg('fontSize',this.value)">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>


                        </select>
                        Font Color: <input type="color" onchange="execCommandWithArg('foreColor',this.value)">
                        <button onclick="event.preventDefault();execCommandWithArg('insertImage',prompt('Enter Image Url',''))"><i class="fa fa-file-image"></i></button>
                        <button onclick="event.preventDefault();execCmd('selectAll')">Select All</button>
                      </div>
                      <input type="text" hidden name="body" id="inputbody" value="">
                    <iframe  name="body" id="body" class="form-control @error('body') is-invalid @enderror" style="height:300px"></iframe>
                    @error('body')
                        <span class="invalid-feedback" style="display: block;" role="alert">{{$message}}</span>
                        @enderror
                </div>
                <ul>
                    @foreach($categories as $category)

                            <li><input type="checkbox" id="{{$category->name}}" name="category" value="{{$category->name}}"/>{{$category->name}}</li>
                    @endforeach

                </ul>
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
