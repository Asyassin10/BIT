{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

</head>

<body>
    @foreach ($categorys as $c)
        <h1>
            {{ $c->categorie_name }}
        </h1>
    @endforeach


    <div class="container">
        <div class="row">
            <div class="col-md-7 offset-3 mt-4">
                <div class="card-body">
                    <form method="post" action="" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <textarea class=" form-control" id="myTextarea"name="wysiwyg-editor"></textarea>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <button id="hello">save</button>
    <p id="demo"></p>
    {!! $text_html !!}
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            let text_html = '{!! $text_html !!}';

            var html =
                '<div class="elementor-element elementor-element-3dfbbae elementor-widget elementor-widget-heading" data-id="3dfbbae" data-element_type="widget" data-widget_type="heading.default"><div class="elementor-widget-container"><style>/*! elementor - v3.8.1 - 13-11-2022 */.elementor-heading-title {padding: 0;margin: 0;line-height: 1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a {color: inherit;font-size: inherit;line-height: inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small {font-size: 15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium {font-size: 19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large {font-size: 29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl {font-size: 39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl {font-size: 59px}</style><h6 class="elementor-heading-title elementor-size-default">Nos services</h6></div></div><div class="elementor-element elementor-element-5c92fdb elementor-widget elementor-widget-heading" data-id="5c92fdb" data-element_type="widget" data-widget_type="heading.default"><div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default">Nous nous engageons dans une démarche de transformation et d’innovation technologique au service du bien commun. </h2></div></div><div class="elementor-element elementor-element-06adfcc elementor-align-left elementor-widget elementor-widget-button" data-id="06adfcc" data-element_type="widget" data-widget_type="button.default"><div class="elementor-widget-container"><div class="elementor-button-wrapper icon_align_right  "><a href="index.html#services-acc" class="elementor-button-link elementor-button elementor-size-xs" role="button"><span class="elementor-button-content-wrapper"><span class="elementor-button-icon elementor-align-icon-right"><i aria-hidden="true" class="fas fa-arrow-down"></i></span><span class="elementor-button-text">Voir les services</span></span></a></div></div></div>';
            CKEDITOR.replace('myTextarea', {
                // Set default value
                removePlugins: ['sourcearea', 'sourceediting'],
                startupMode: 'wysiwyg',
                on: {
                    instanceReady: function(evt) {
                        evt.editor.setData(text_html);
                    },
                    /* change: function(evt) {
                        console.log('Total bytes: ' + evt.editor.getData().length);
                    } */
                    change: function(evt) {
                        console.log(evt.editor.getData());
                    }
                }
            });
            document.getElementById("hello").addEventListener("click", function() {
                //console.log(CKEDITOR.instances.editor1.getData())
                console.log(CKEDITOR.instances.myTextarea.getData())
            })
            //document.getElementById("demo").innerHTML = text_html;
        });
    </script>
</body>


</html>
 --}}

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
                            <form action="{{ route('update_articlesPost') }}" method="post">
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
