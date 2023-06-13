

@extends('admin\layout\AdminLayout')
@section('css')
    <link rel="stylesheet" href="{{ asset('melody/vendors/summernote/dist/summernote-bs4.css') }}">
@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    Text editors
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Editors</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Text editors</li>
                    </ol>
                </nav>
            </div>
            <div class="row grid-margin">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">summernote Editor</h4>
                            {{-- <div id="summernoteExample">

                            </div> --}}
                            <form action="{{ route('AddArticlePost', ['category_id' => $category_id]) }}" method="post">
                                @csrf
                                <textarea name="data_content_html" id="summernoteExample" cols="30" rows="10"></textarea>
                                <button tye="submit" id="" class="btn btn-primary my-4">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{--  <div class="row grid-margin">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Tinymce Editor</h4>
                            <textarea id='tinyMceExample'>
                    Edit your content here...
                  </textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row grid-margin">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Quill Editor</h4>
                            <div id="quillExample1" class="quill-container">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Simplemde Editor</h4>
                            <textarea id="simpleMde">
                  </textarea>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a
                        href="https://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i
                        class="far fa-heart text-danger"></i></span>
            </div>
        </footer>
        <!-- partial -->
    </div>
@endsection
@section('costomJsPlugons')
    <script src="{{ asset('melody/vendors/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('melody/vendors/tinymce/themes/modern/theme.js') }}"></script>
    <script src="{{ asset('melody/vendors/summernote/dist/summernote-bs4.min.js') }}"></script>
@endsection
@section('js')
    <script src="{{ asset('melody/js/editorDemo.js') }}"></script>

    <script>
        /*Summernote editor*/
        $(document).ready(function() {
            if ($("#summernoteExample").length) {
                $("#summernoteExample").summernote({
                    height: 300,
                    tabsize: 2,


                });


                /* $("#summernoteExample").summernote({
                    onChange: function() {
                        console.log('Editor content changed:');
                    } // callback as option
                }); */
                /*  $("#summernoteExample").on("summernoteExample.change", function(
                 e) { // callback as jquery custom event
                     console.log('it is changed');
                 }); */


                /*   $("#summernoteExample").summernote("code", defaultData); */
            }
        });
        /*   document.getElementById("btn_save_html").addEventListener("click", function() {
              var summernoteValue = $('#summernoteExample').summernote('code');

              console.log(summernoteValue)
          }) */
    </script>
@endsection
