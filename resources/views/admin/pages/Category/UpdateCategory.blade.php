 @extends('admin\layout\AdminLayout')
 @section('content')
     <div class="main-panel">
         <div class="content-wrapper">
             <div class="page-header">
                 <h3 class="page-title">
                     modifier la catégorie
                 </h3>
                 <nav aria-label="breadcrumb">
                     <ol class="breadcrumb">
                         <li class="breadcrumb-item"><a href="#">Forms</a></li>
                         <li class="breadcrumb-item active" aria-current="page">modifier la catégorie</li>
                     </ol>
                 </nav>
             </div>
             <div class="row">
                 <div class="col-md-12 grid-margin stretch-card">
                     <div class="card">
                         <div class="card-body">
                             <form class="forms-sample" method="POST"
                                 action="{{ route('UpdateCategoryPost', ['category_id' => $category->categorie_id]) }}">

                                 @csrf
                                 <div class="form-group">
                                     <label for="exampleInputUsername1">Nom de catégorie</label>
                                     <input type="text" name="category_name"
                                         class="form-control @error('category_name') is-invalid @enderror"
                                         id="exampleInputUsername1" placeholder="Username"
                                         value="{{ old('category_name', $category->categorie_name) }}">

                                     @error('category_name')
                                         <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                         </span>
                                     @enderror
                                 </div>
                                 <button type="submit" class="btn btn-success mr-2">Enregistré</button>
                                 <button class="btn btn-light">Cancel</button>
                             </form>
                         </div>
                     </div>
                 </div>

             </div>
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
         @include('admin.footer')

     </div>
 @endsection

 {{--
@extends('layouts/contentLayoutMaster')

@section('title', 'Form Validation')

@section('vendor-style')
    <link rel="stylesheet" href="{{ secure_asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
@endsection
@section('page-style')
    <link rel="stylesheet" href="{{ secure_asset(mix('css/base/plugins/forms/form-validation.css')) }}">
    <link rel="stylesheet" href="{{ secure_asset(mix('css/base/plugins/forms/pickers/form-flat-pickr.css')) }}">

@endsection

@section('content')
    <!-- Validation -->
    <section class="bs-validation">
        <div class="row">
            <!-- jQuery Validation -->
            <div class="col-md-6 col-12" style="width: 100%;">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">jQuery Validation</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST"
                            action="{{ route('UpdateCategoryPost', ['category_id' => $category->categorie_id]) }}">
                            @csrf
                            <div class="mb-1">
                                <label class="d-block form-label" for="validationBio">Bio</label>
                                <textarea id="my-editor" class="form-control"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit" value="Submit">Submit</button>
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
    <script src="{{ secure_asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
    <script src="{{ secure_asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
@endsection
@section('page-script')
    <!-- Page js files -->
    <script src="{{ secure_asset(mix('js/scripts/forms/form-validation.js')) }}"></script>
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
 --}}
