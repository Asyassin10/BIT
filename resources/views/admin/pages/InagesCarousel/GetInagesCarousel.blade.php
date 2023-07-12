@extends('layouts/contentLayoutMaster')
@section('title', 'Les Catégorie')

@section('vendor-style')
    {{-- vendor css files --}}
    <link rel="stylesheet" href="{{ secure_asset(mix('vendors/css/tables/datatable/responsive.bootstrap5.min.css')) }}">
    <link rel="stylesheet" href="{{ secure_asset(mix('vendors/css/tables/datatable/buttons.bootstrap5.min.css')) }}">
    <link rel="stylesheet" href="{{ secure_asset(mix('vendors/css/tables/datatable/rowGroup.bootstrap5.min.css')) }}">
    <link rel="stylesheet" href="{{ secure_asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
@endsection

@section('content')
    <div class="row">
        <div class="form-modal-ex">
            <!-- Button trigger modal -->
            {{-- <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#create-category">
                Créer une catégorie
            </button> --}}
            <!-- Modal -->
            <div class="modal fade text-start" id="create-category" tabindex="-1" aria-labelledby="myModalLabel33"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel33">Créer une catégorie</h4>
                        </div>
                        <form class="forms-sample" method="POST" action="{{ route('CreateCategoryPost') }}">
                            @csrf
                            <div class="modal-body">
                                <div class="mb-1">
                                    <input type="text" placeholder="Nom de catégorie..." class="form-control"
                                        name="category_name" required />
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Enregistrer</button>
                                <button type="button" class="btn btn-outline-secondary waves-effect "
                                    data-bs-dismiss="modal"aria-label="Close">Annuler</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Basic table -->
    <br>
    <section id="basic-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    @foreach ($inages as $inage)
                        <img src="{{ secure_asset("app/carousel_imgs/".$inage->carousel_image_full_name) }}" alt="">
                    @endforeach
                </div>
            </div>
        </div>

    </section>
    <!--/ Basic table -->

@endsection


@section('vendor-script')
    {{-- vendor files --}}
    <script src="{{ secure_asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script>
    <script src="{{ secure_asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
    <script src="{{ secure_asset(mix('vendors/js/tables/datatable/responsive.bootstrap5.min.js')) }}"></script>
    <script src="{{ secure_asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script>
    <script src="{{ secure_asset(mix('vendors/js/tables/datatable/jszip.min.js')) }}"></script>
    <script src="{{ secure_asset(mix('vendors/js/tables/datatable/pdfmake.min.js')) }}"></script>
    <script src="{{ secure_asset(mix('vendors/js/tables/datatable/vfs_fonts.js')) }}"></script>
    <script src="{{ secure_asset(mix('vendors/js/tables/datatable/buttons.html5.min.js')) }}"></script>
    <script src="{{ secure_asset(mix('vendors/js/tables/datatable/buttons.print.min.js')) }}"></script>
    <script src="{{ secure_asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
@endsection
@section('page-script')
    {{-- Page js files --}}
    <script src="{{ secure_asset(mix('js/scripts/tables/table-datatables-basic.js')) }}"></script>
@endsection
