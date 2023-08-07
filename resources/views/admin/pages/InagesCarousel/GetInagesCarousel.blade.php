@extends('layouts/contentLayoutMaster')
@section('title', 'Carousel')

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
            <div class="col-12 w-100">
                {{-- <a href="{{ route("UploadImageCarousel") }}" class="btn btn-primary">dd</a> --}}
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Ajouter
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('UploadImageCarouselPost') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="w-100 row">
                                        <div class="col-md-6">
                                            <input type="text"
                                                class="form-control @error('cr_carousel_title') is-invalid @enderror "
                                                placeholder="Titre" name="cr_carousel_title" aria-label="le titre">
                                            @if ($errors->has('cr_carousel_title'))
                                                <div class="text-danger text-start ">
                                                    {{ $errors->first('cr_carousel_title') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text"
                                                class="form-control @error('cr_carousel_footer') is-invalid @enderror "
                                                placeholder="Service" name="cr_carousel_footer" aria-label="sous titre">
                                            @if ($errors->has('cr_carousel_footer'))
                                                <div class="text-danger text-start ">
                                                    {{ $errors->first('cr_carousel_footer') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-12">
                                            <br>
                                            <label for="exampleFormControlTextarea1" class="form-label">description
                                            </label>
                                            <textarea class="form-control @error('cr_carousel_desc') is-invalid @enderror" name="cr_carousel_desc"
                                                id="exampleFormControlTextarea1" rows="3"></textarea>
                                            @if ($errors->has('cr_carousel_desc'))
                                                <div class="text-danger text-start ">
                                                    {{ $errors->first('cr_carousel_desc') }}</div>
                                            @endif
                                        </div>
                                        <br>
                                        <div class="mb-3 col-md-12">
                                            <br>
                                            <label for="formFile" class="form-label">Image de fond</label>
                                            <input
                                                class="form-control @error('cr_carousel_image_background') is-invalid @enderror"
                                                name="cr_carousel_image_background" type="file" id="formFile">
                                            @if ($errors->has('cr_carousel_image_background'))
                                                <div class="text-danger text-start ">
                                                    {{ $errors->first('cr_carousel_image_background') }}</div>
                                            @endif
                                        </div>
                                        <div class="mb-3 col-md-12">
                                            <label for="formFile" class="form-label">Logo</label>
                                            <input
                                                class="form-control @error('cr_carousel_image_logo_fullname') is-invalid @enderror"
                                                name="cr_carousel_image_logo_fullname" type="file" id="formFile">
                                            @if ($errors->has('cr_carousel_image_logo_fullname'))
                                                <div class="text-danger text-start ">
                                                    {{ $errors->first('cr_carousel_image_logo_fullname') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                            {{-- <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>

                                    </div> --}}
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    @foreach ($inages as $inage)
                        <div class="col-md-4 mt-4">
                            <div class="card " style="width: 100%;height:100%;">
                                <img src="{{ secure_asset('images/home/' . $inage->carousel_image_full_name) }}" width="100"
                                    height="250" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <span class="" style="background-size: cover">
                                        <img class="round"
                                            src="{{ secure_asset('images/home/' . $inage->carousel_image_logo_fullname) }}"
                                            alt="avatar" height="80" width="80">
                                    </span>
                                    <br><br>
                                    <div class="text_div" style="height: 150px;">
                                        <p class="card-text font-weight-bold">
                                            <strong>{{ $inage->carousel_title }}</strong>
                                        </p>
                                        <p class="card-text">
                                            {{ $inage->carousel_desc }}
                                        </p>
                                        <p class="card-text">
                                            {{ $inage->carousel_footer }}
                                        </p>
                                    </div>


                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal{{ $inage->carousel_image_id }}">
                                        édité <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-edit font-small-4">
                                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                            </path>
                                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                        </svg>
                                    </button>
                                    <a class="btn btn-danger" data-bs-toggle="modal"
                                        href="#delete_modal{{ $inage->carousel_image_id }}" role="button">Supprimer <svg
                                            xmlns="http://www.w3.org/2000/svg" class="feather feather-edit font-small-4"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M20 6a1 1 0 0 1 .117 1.993l-.117 .007h-.081l-.919 11a3 3 0 0 1 -2.824 2.995l-.176 .005h-8c-1.598 0 -2.904 -1.249 -2.992 -2.75l-.005 -.167l-.923 -11.083h-.08a1 1 0 0 1 -.117 -1.993l.117 -.007h16zm-9.489 5.14a1 1 0 0 0 -1.218 1.567l1.292 1.293l-1.292 1.293l-.083 .094a1 1 0 0 0 1.497 1.32l1.293 -1.292l1.293 1.292l.094 .083a1 1 0 0 0 1.32 -1.497l-1.292 -1.293l1.292 -1.293l.083 -.094a1 1 0 0 0 -1.497 -1.32l-1.293 1.292l-1.293 -1.292l-.094 -.083z"
                                                stroke-width="0" fill="currentColor" />
                                            <path
                                                d="M14 2a2 2 0 0 1 2 2a1 1 0 0 1 -1.993 .117l-.007 -.117h-4l-.007 .117a1 1 0 0 1 -1.993 -.117a2 2 0 0 1 1.85 -1.995l.15 -.005h4z"
                                                stroke-width="0" fill="currentColor" />
                                        </svg></a>

                                </div>
                            </div>

                        </div>
                        <style>
                            .icon-box {
                                width: 80px;
                                height: 80px;
                                margin: 0 auto;
                                border-radius: 50%;
                                z-index: 9;
                                text-align: center;
                                border: 3px solid #f15e5e;
                            }

                            .icon-box svg {
                                color: #f15e5e;
                                height: 79px !important;
                                width: 40px !important;
                            }
                        </style>
                        {{-- modal delete --}}
                        <div class="modal fade" id="delete_modal{{ $inage->carousel_image_id }}" aria-hidden="true"
                            aria-labelledby="delete_modalLabel" tabindex="-1">

                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="feather feather-edit font-small-4"
                                            width="405" height="654" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M20 6a1 1 0 0 1 .117 1.993l-.117 .007h-.081l-.919 11a3 3 0 0 1 -2.824 2.995l-.176 .005h-8c-1.598 0 -2.904 -1.249 -2.992 -2.75l-.005 -.167l-.923 -11.083h-.08a1 1 0 0 1 -.117 -1.993l.117 -.007h16zm-9.489 5.14a1 1 0 0 0 -1.218 1.567l1.292 1.293l-1.292 1.293l-.083 .094a1 1 0 0 0 1.497 1.32l1.293 -1.292l1.293 1.292l.094 .083a1 1 0 0 0 1.32 -1.497l-1.292 -1.293l1.292 -1.293l.083 -.094a1 1 0 0 0 -1.497 -1.32l-1.293 1.292l-1.293 -1.292l-.094 -.083z"
                                                stroke-width="0" fill="currentColor" />
                                            <path
                                                d="M14 2a2 2 0 0 1 2 2a1 1 0 0 1 -1.993 .117l-.007 -.117h-4l-.007 .117a1 1 0 0 1 -1.993 -.117a2 2 0 0 1 1.85 -1.995l.15 -.005h4z"
                                                stroke-width="0" fill="currentColor" />
                                        </svg>
                                    </div>
                                    <div class="modal-body">
                                        <center>
                                            <h4 class="modal-title w-100 mb-2">Es-tu sûr?</h4>
                                            <p class="text-dark">Voulez-vous vraiment supprimer ? <br> Ce processus ne peut
                                                pas être annulé.</p>

                                        </center>

                                    </div>
                                    <div class="modal-footer">
                                        <a data-bs-dismiss="modal" aria-label="Close" class="btn btn-dark">Annuler</a>
                                        <a type="submit" class="btn btn-danger"
                                            href="{{ route('DeleteImageCarousel', ['carousel_image_id' => $inage->carousel_image_id]) }}">Supprimer</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal{{ $inage->carousel_image_id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('UpdateUploadedImageCarouselPost') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="cr_carousel_image_id"
                                                value="{{ $inage->carousel_image_id }}">
                                            <div class="w-100 row">
                                                <div class="col-md-6">
                                                    <input type="text"
                                                        class="form-control @error('cr_carousel_title_update') is-invalid @enderror "
                                                        value="{{ $inage->carousel_title }}" placeholder="First name"
                                                        name="cr_carousel_title_update" aria-label="le titre">
                                                    @if ($errors->has('cr_carousel_title_update'))
                                                        <div class="text-danger text-start ">
                                                            {{ $errors->first('cr_carousel_title_update') }}</div>
                                                    @endif
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text"
                                                        class="form-control @error('cr_carousel_footer_update') is-invalid @enderror "
                                                        value="{{ $inage->carousel_footer }}" placeholder="First name"
                                                        name="cr_carousel_footer_update" aria-label="sous titre">
                                                    @if ($errors->has('cr_carousel_footer_update'))
                                                        <div class="text-danger text-start ">
                                                            {{ $errors->first('cr_carousel_footer_update') }}</div>
                                                    @endif
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="exampleFormControlTextarea1"
                                                        class="form-label">description
                                                    </label>
                                                    <textarea class="form-control @error('cr_carousel_desc_update') is-invalid @enderror" name="cr_carousel_desc_update"
                                                        id="exampleFormControlTextarea1" rows="3">
                                                    {{ $inage->carousel_desc }}
                                                    </textarea>
                                                    @if ($errors->has('cr_carousel_desc_update'))
                                                        <div class="text-danger text-start ">
                                                            {{ $errors->first('cr_carousel_desc_update') }}</div>
                                                    @endif
                                                </div>
                                                <div class="mb-3 col-md-12">
                                                    <label for="formFile" class="form-label">Default file input
                                                        example</label>
                                                    <input
                                                        class="form-control @error('cr_carousel_image_background_update') is-invalid @enderror"
                                                        name="cr_carousel_image_background_update" type="file"
                                                        id="formFile">
                                                    @if ($errors->has('cr_carousel_image_background_update'))
                                                        <div class="text-danger text-start ">
                                                            {{ $errors->first('cr_carousel_image_background_update') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="mb-3 col-md-12">
                                                    <label for="formFile" class="form-label">Default file input
                                                        example</label>
                                                    <input
                                                        class="form-control @error('cr_carousel_image_logo_fullname_update') is-invalid @enderror"
                                                        name="cr_carousel_image_logo_fullname_update" type="file"
                                                        id="formFile">
                                                    @if ($errors->has('cr_carousel_image_logo_fullname_update'))
                                                        <div class="text-danger text-start ">
                                                            {{ $errors->first('cr_carousel_image_logo_fullname_update') }}
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </form>
                                    </div>
                                    {{-- <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>

                                    </div> --}}
                                </div>
                            </div>
                        </div>
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
