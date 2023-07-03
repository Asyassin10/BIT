@extends('layouts/contentLayoutMaster')
@section('title', 'Les Catégorie')

@section('vendor-style')
    {{-- vendor css files --}}
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap5.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/buttons.bootstrap5.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/rowGroup.bootstrap5.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
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
                    <table class=" table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom de Catégorie</th>
                                <th>Référence de catégorie</th>
                                <th>Opérations</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($all_categories as $key => $c)
                                <tr class="odd">
                                    <td>{{ $key }}</td>
                                    <td>{{ $c->categorie_name }}</td>
                                    <td>
                                        @if (is_null($c->categorie_parent_id))
                                            <span class="badge rounded-pill  badge-light-danger">Nulle</span>
                                        @else
                                            <span
                                                class="badge rounded-pill  badge-light-success">{{ $c->referenceCategory->categorie_name }}</span>
                                        @endif
                                    </td>
                                    <td style="">
                                        <div class="d-inline-flex"><a class="pe-1 dropdown-toggle hide-arrow text-primary"
                                                data-bs-toggle="dropdown" href="">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-more-vertical font-small-4">
                                                    <circle cx="12" cy="12" r="1"></circle>
                                                    <circle cx="12" cy="5" r="1"></circle>
                                                    <circle cx="12" cy="19" r="1"></circle>
                                                </svg></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="{{ route('AllArticles', ['category_id' => $c->categorie_id]) }}"
                                                    class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-file-text font-small-4 me-50">
                                                        <path
                                                            d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                        </path>
                                                        <polyline points="14 2 14 8 20 8"></polyline>
                                                        <line x1="16" y1="13" x2="8" y2="13">
                                                        </line>
                                                        <line x1="16" y1="17" x2="8" y2="17">
                                                        </line>
                                                        <polyline points="10 9 9 9 8 9"></polyline>
                                                    </svg>Articles</a>
                                            </div>
                                        </div>
                                        <a type="button" class="item-edit text-primary" data-bs-toggle="modal"
                                            data-bs-target="#update-category{{ $c->categorie_id }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-edit font-small-4">
                                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                </path>
                                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                            </svg>
                                        </a>
                                        <!-- Modal -->
                                        <div class="modal fade text-start" id="update-category{{ $c->categorie_id }}"
                                            tabindex="-1" aria-labelledby="myModalLabel33" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel33">modifier la catégorie
                                                        </h4>

                                                    </div>
                                                    <form class="forms-sample"method="POST"
                                                        action="{{ route('UpdateCategoryPost', ['category_id' => $c->categorie_id]) }}">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <div class="mb-1">
                                                                <input type="text" placeholder="Nom de catégorie..."
                                                                    class="form-control" name="category_name" required
                                                                    value="{{ $c->categorie_name }}" />
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary"
                                                                data-bs-dismiss="modal">Enregistrer</button>
                                                            <button type="button"
                                                                class="btn btn-outline-secondary waves-effect "
                                                                data-bs-dismiss="modal"aria-label="Close">Annuler</button>

                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>

    </section>
    <!--/ Basic table -->

@endsection


@section('vendor-script')
    {{-- vendor files --}}
    <script src="{{ asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/responsive.bootstrap5.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/jszip.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/pdfmake.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/vfs_fonts.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.html5.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.print.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
@endsection
@section('page-script')
    {{-- Page js files --}}
    <script src="{{ asset(mix('js/scripts/tables/table-datatables-basic.js')) }}"></script>
@endsection
