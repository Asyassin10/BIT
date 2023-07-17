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
            <div class="col-12 w-100">
                {{-- <a href="{{ route("UploadImageCarousel") }}" class="btn btn-primary">dd</a> --}}
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Ajouter une image
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
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
                                                placeholder="First name" name="cr_carousel_title" aria-label="le titre">
                                            @if ($errors->has('cr_carousel_title'))
                                                <div class="text-danger text-start ">
                                                    {{ $errors->first('cr_carousel_title') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text"
                                                class="form-control @error('cr_carousel_footer') is-invalid @enderror "
                                                placeholder="First name" name="cr_carousel_footer" aria-label="sous titre">
                                            @if ($errors->has('cr_carousel_footer'))
                                                <div class="text-danger text-start ">
                                                    {{ $errors->first('cr_carousel_footer') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-12">
                                            <label for="exampleFormControlTextarea1" class="form-label">description
                                            </label>
                                            <textarea class="form-control @error('cr_carousel_desc') is-invalid @enderror" name="cr_carousel_desc"
                                                id="exampleFormControlTextarea1" rows="3"></textarea>
                                            @if ($errors->has('cr_carousel_desc'))
                                                <div class="text-danger text-start ">
                                                    {{ $errors->first('cr_carousel_desc') }}</div>
                                            @endif
                                        </div>
                                        <div class="mb-3 col-md-12">
                                            <label for="formFile" class="form-label">Default file input example</label>
                                            <input
                                                class="form-control @error('cr_carousel_image_background') is-invalid @enderror"
                                                name="cr_carousel_image_background" type="file" id="formFile">
                                            @if ($errors->has('cr_carousel_image_background'))
                                                <div class="text-danger text-start ">
                                                    {{ $errors->first('cr_carousel_image_background') }}</div>
                                            @endif
                                        </div>
                                        <div class="mb-3 col-md-12">
                                            <label for="formFile" class="form-label">Default file input example</label>
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
                        <div class="col-md-4">
                            <div class="card" style="width: 100%;height:auto;">
                                <img src="{{ asset('images/home/' . $inage->carousel_image_full_name) }}"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">
                                        {{ $inage->carousel_title }}
                                    </p>
                                    <p class="card-text">
                                        {{ $inage->carousel_desc }}
                                    </p>
                                    <p class="card-text">
                                        {{ $inage->carousel_footer }}
                                    </p>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal{{ $inage->carousel_image_id }}">
                                        Launch demo modal
                                    </button>
                                    <a href="{{ route('DeleteImageCarousel', ['carousel_image_id' => $inage->carousel_image_id]) }}"
                                        class="btn btn-danger">
                                        dddd</a>
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
                                        <input type="hidden" name="cr_carousel_image_id" value="{{$inage->carousel_image_id }}">
                                            <div class="w-100 row">
                                                <div class="col-md-6">
                                                    <input type="text"
                                                        class="form-control @error('cr_carousel_title_update') is-invalid @enderror "
                                                        value="{{ $inage->carousel_title }}"
                                                        placeholder="First name" name="cr_carousel_title_update"
                                                        aria-label="le titre">
                                                    @if ($errors->has('cr_carousel_title_update'))
                                                        <div class="text-danger text-start ">
                                                            {{ $errors->first('cr_carousel_title_update') }}</div>
                                                    @endif
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text"
                                                        class="form-control @error('cr_carousel_footer_update') is-invalid @enderror "
                                                        value="{{ $inage->carousel_footer }}"
                                                        placeholder="First name" name="cr_carousel_footer_update"
                                                        aria-label="sous titre">
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
                                                    {{  $inage->carousel_desc}}
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
                                                            {{ $errors->first('cr_carousel_image_background_update') }}</div>
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
                                                            {{ $errors->first('cr_carousel_image_logo_fullname_update') }}</div>
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
