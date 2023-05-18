{{-- @extends('admin\layout\AdminLayout')
@section('css')
    <link rel="stylesheet" href="{{ asset('melody/vendors/summernote/dist/summernote-bs4.css') }}">
@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    Modifier l'article
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Editors</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Modifier l'article</li>
                    </ol>
                </nav>
            </div>
            <div class="row grid-margin">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">summernote Editor</h4>
                            <form action="{{ route('update_articlesPost', ['article_id' => $article->article_id]) }}"
                                method="post">
                                @csrf
                                <textarea name="data_content_html" id="summernoteExample" cols="30" rows="10"></textarea>
                                <button tye="submit" id="" class="btn btn-success my-4">Enregistré</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->

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
                var defaultData = '{!! $text_html !!}';
                $("#summernoteExample").summernote({
                    height: 300,
                    tabsize: 2,
                    /* onKeyup: function(e) {
                        //$("#lawsContent").val($("#summernote").code());
                        console.log("njkjnmk")
                    }, */

                });
                $('#summernoteExample').summernote({
                    onChange: function(contents, $editable) {
                        console.log('onChange:', contents, $editable);
                        alert("hhh")
                    }
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


                $("#summernoteExample").summernote("code", defaultData);
            }
        });
        /*   document.getElementById("btn_save_html").addEventListener("click", function() {
              var summernoteValue = $('#summernoteExample').summernote('code');

              console.log(summernoteValue)
          }) */
    </script>
@endsection
 --}}


@extends('layouts/contentLayoutMaster')

@section('title', "modifier l'article")

@section('vendor-style')
    {{-- Vendor Css files --}}
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
    <style>
        .ck.ck-editor__main .ck-content {
            height: 239px;
        }
    </style>
@endsection
@section('page-style')
    {{-- Page Css files --}}
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-flat-pickr.css')) }}">

@endsection

@section('content')
    <!-- Validation -->
    <section class="bs-validation">
        <div class="row">
            <!-- jQuery Validation -->
            <div class="col-md-6 col-12" style="width: 100%;">
                <div class="card">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        <form id="jquery-val-form"
                            action="{{ route('update_articlesPost', ['article_id' => $article->article_id]) }}"
                            method="post">
                            @csrf
                            <div class="mb-1">
                                <label class="d-block form-label" for="validationBio"></label>
                                <textarea id="my-editor" class="form-control " name="data_content_html" cols="30" rows="10">{!! $text_html !!}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit" value="Submit">Enregistré</button>
                            <br><br>

                        </form>
                    </div>
                </div>
            </div>
            <!-- /jQuery Validation -->
        </div>
    </section>
    <!-- /Validation -->
@endsection

@section('vendor-script')
    <!-- vendor files -->
    <script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
@endsection
@section('page-script')
    <!-- Page js files -->
    <script src="{{ asset(mix('js/scripts/forms/form-validation.js')) }}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#my-editor'))
            .then(editor => {
                console.log('Editor initialized');
            })
            .catch(error => {
                console.error(error);
            });
    </script>


@endsection
