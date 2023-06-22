
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
