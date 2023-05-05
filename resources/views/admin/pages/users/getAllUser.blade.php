@extends('admin\layout\AdminLayout')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    les roles
                </h3>

            </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nom de Catégorie</th>
                                            <th>les roles</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $key => $r)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $r->name }}</td>

                                                <td>
                                                    <div class="d-flex">
                                                        @foreach ($r->roles as $rn)
                                                            <p class="badge-pill-primary m-2">
                                                                {{ $rn->name }}
                                                            </p>
                                                        @endforeach
                                                        {{-- <div class="text-center">
                                                            <button type="button" class="btn btn-primary btn-sm"
                                                                data-toggle="modal"
                                                                data-target="#exampleModal-2{{ $r->id }}">Click for
                                                                demo<i class="fa fa-play-circle ml-1"></i></button>
                                                        </div> --}}
                                                    </div>

                                                    {{-- <a href="{{ route('UpdateCategory', ['category_id' => $c->categorie_id]) }}"
                                                        class="btn btn-outline-success">Modifier</a> --}}
                                                    {{-- <a href="{{ route('GetRoleDetails', ['role_id' => $r->id]) }}"
                                                        class="btn btn-outline-info ">role details </a> --}}
                                                </td>
                                            </tr>

                                            <div class="modal fade" id="exampleModal-2{{ $r->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="exampleModalLabel-2" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel-2">Modal title
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h4 class="card-title">Badge Outlined Variations
                                                            </h4>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-success">Submit</button>
                                                            <button type="button" class="btn btn-light"
                                                                data-dismiss="modal">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                {{--  <div class="col-md-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Badge Outlined Variations</h4>
                            <div class="template-demo">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th class="pl-0">Item</th>
                                            <th class="text-right">Label</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="pl-0">Rounded Primary</td>
                                            <td class="pr-0 text-right">
                                                <div class="badge badge-pill badge-outline-primary">2</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pl-0">Rounded Info</td>
                                            <td class="pr-0 text-right">
                                                <div class="badge badge-pill badge-outline-info">5</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pl-0">Rounded Danger</td>
                                            <td class="pr-0 text-right">
                                                <div class="badge badge-pill badge-outline-danger">1</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pl-0">Rounded Success</td>
                                            <td class="pr-0 text-right">
                                                <div class="badge badge-pill badge-outline-success">9</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pl-0">Rounded Warning</td>
                                            <td class="pr-0 text-right">
                                                <div class="badge badge-pill badge-outline-warning">4</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Small Modal</h4>
                            <p class="card-description">Small modal with max-width set to <code>300px</code></p>
                            <!-- Dummy Modal Starts -->
                            <div class="modal demo-modal">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Modal title</h5>
                                            <button type="button" class="close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Modal body text goes here.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-success">Submit</button>
                                            <button type="button" class="btn btn-light">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Dummy Modal Ends -->
                            <!-- Modal starts -->
                            <div class="text-center">
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                    data-target="#exampleModal-3">Click for demo<i
                                        class="fa fa-play-circle ml-1"></i></button>
                            </div>
                            <div class="modal fade" id="exampleModal-3" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel-3" aria-hidden="true">
                                <div class="modal-dialog modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel-3">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Modal body text goes here.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-success">Submit</button>
                                            <button type="button" class="btn btn-light"
                                                data-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Ends -->
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
@endsection
