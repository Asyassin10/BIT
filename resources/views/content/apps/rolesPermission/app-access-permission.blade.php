@extends('layouts/contentLayoutMaster')

@section('title', 'Permission')

@section('vendor-style')
    <!-- Vendor css files -->
    <link rel="stylesheet" href="{{ secure_asset(mix('vendors/css/tables/datatable/dataTables.bootstrap5.min.css')) }}">
    <link rel="stylesheet" href="{{ secure_asset(mix('vendors/css/tables/datatable/responsive.bootstrap5.min.css')) }}">
    <link rel="stylesheet" href="{{ secure_asset(mix('vendors/css/tables/datatable/buttons.bootstrap5.min.css')) }}">
@endsection
@section('page-style')
    <!-- Page css files -->
    <link rel="stylesheet" href="{{ secure_asset(mix('css/base/plugins/forms/form-validation.css')) }}">
@endsection

@section('content')
    <h3> List des Permissions</h3>
    <br>
    <a href="{{ route('app-user-list') }}" class="btn btn-primary">Liste des utilisateurs</a>
    <br>
    <br>
    <script>
        var data_db = {!! json_encode($ermissions) !!};
        console.log(data_db); // Access the data in JavaScript
    </script>
    <!-- Permission Table -->
    <div class="card">
        <div class="card-datatable table-responsive">
            <table class="datatables-permissions table">
                <thead class="table">
                    <tr>
                        <th></th>
                        <th>Name</th>
                        {{-- <th>Assigned To</th>
                        <th>Created Date</th> --}}
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ermissions as $key => $c)
                        <tr class="odd">
                            <td>{{ $c->id }}</td>
                            <td>{{ $c->name }}</td>

                            <td style="">

                                <a type="button" class="item-edit text-primary" data-bs-toggle="modal"
                                    data-bs-target="#update-category{{ $c->id }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-edit font-small-4">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                        </path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a type="button" class="item-edit text-primary" data-bs-toggle="modal"
                                    data-bs-target="#update-users{{ $c->id }}">
                                    utilisateurs
                                </a>
                                <!-- Modal -->
                                <div class="modal fade text-start" id="update-users{{ $c->id }}" tabindex="-1"
                                    aria-labelledby="myModalLabel33" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel33">modifier la permission
                                                </h4>

                                            </div>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">nom</th>
                                                        <th scope="col">actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($users as $user)
                                                        <tr>
                                                            <td>{{ $user->name }}</td>
                                                            <td>
                                                                @if ($user->hasPermissionTo($c->name))
                                                                    <a href="{{ route('DeleteUserToPermission', ['permission_id' => $c->id, 'user_id' => $user->id]) }}"
                                                                        class="btn btn-primary">Retirer l'access</a>
                                                                @else
                                                                    <a href="{{ route('AssignUserToPermission', ['permission_id' => $c->id, 'user_id' => $user->id]) }}"
                                                                        class="btn btn-primary">Ajouter l'access</a>
                                                                @endif
                                                            </td>

                                                        </tr>
                                                    @endforeach


                                                </tbody>
                                            </table>
                                            <br>
                                            <br>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade text-start" id="update-category{{ $c->id }}" tabindex="-1"
                                    aria-labelledby="myModalLabel33" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel33">modifier la permission
                                                </h4>

                                            </div>
                                            <form class="forms-sample" method="POST"
                                                action="{{ route('UpdatePermissionName', ['permission_id' => $c->id]) }}">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="mb-1">
                                                        <input type="text" placeholder="Nom de catégorie..."
                                                            class="form-control" name="name" required
                                                            value="{{ $c->name }}" />
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary"
                                                        data-bs-dismiss="modal">Enregistrer</button>
                                                    <button type="button" class="btn btn-outline-secondary waves-effect "
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
    <!--/ Permission Table -->
    <!-- Add Permission Modal -->
    <div class="modal fade" id="addPermissionModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-transparent">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-sm-5 pb-5">
                    <div class="text-center mb-2">
                        <h1 class="mb-1">Add New Permission</h1>
                        <p>Permissions you may use and assign to your users.</p>
                    </div>
                    <form id="addPermissionForm" class="row" onsubmit="return false">
                        <div class="col-12">
                            <label class="form-label" for="modalPermissionName">Permission Name</label>
                            <input type="text" id="modalPermissionName" name="modalPermissionName"
                                class="form-control" placeholder="Permission Name" autofocus
                                data-msg="Please enter permission name" />
                        </div>
                        <div class="col-12 mt-75">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="corePermission" />
                                <label class="form-check-label" for="corePermission"> Set as core permission </label>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary mt-2 me-1">Create Permission</button>
                            <button type="reset" class="btn btn-outline-secondary mt-2" data-bs-dismiss="modal"
                                aria-label="Close">
                                Discard
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--/ Add Permission Modal -->

    {{-- @include('content/_partials/_modals/modal-add-permission') --}}
    {{--  @include('content/_partials/_modals/modal-edit-permission') --}}
    <!-- Edit Permission Modal -->
    <div class="modal fade" id="editPermissionModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-transparent">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-3 pt-0">
                    <div class="text-center mb-2">
                        <h1 class="mb-1">Edit Permission</h1>
                        <p>Edit permission as per your requirements.</p>
                    </div>

                    <div class="alert alert-warning" role="alert">
                        <h6 class="alert-heading">Warning!</h6>
                        <div class="alert-body">
                            By editing the permission name, you might break the system permissions functionality. Please
                            ensure you're
                            absolutely certain before proceeding.
                        </div>
                    </div>

                    <form id="editPermissionForm" class="row" onsubmit="return false">
                        <div class="col-sm-9">
                            <label class="form-label" for="editPermissionName">Permission Name</label>
                            <input type="text" id="editPermissionName" name="editPermissionName" class="form-control"
                                placeholder="Enter a permission name" tabindex="-1"
                                data-msg="Please enter permission name" />
                        </div>
                        <div class="col-sm-3 ps-sm-0">
                            <button type="submit" class="btn btn-primary mt-2">Update</button>
                        </div>
                        <div class="col-12 mt-75">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="editCorePermission" />
                                <label class="form-check-label" for="editCorePermission"> Set as core permission </label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--/ Edit Permission Modal -->

@endsection

@section('vendor-script')
    <!-- Vendor js files -->
    <script src="{{ secure_asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script>
    <script src="{{ secure_asset(mix('vendors/js/tables/datatable/dataTables.bootstrap5.min.js')) }}"></script>
    <script src="{{ secure_asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
    <script src="{{ secure_asset(mix('vendors/js/tables/datatable/responsive.bootstrap5.js')) }}"></script>
    <script src="{{ secure_asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script>
    <script src="{{ secure_asset(mix('vendors/js/tables/datatable/buttons.bootstrap5.min.js')) }}"></script>
    <script src="{{ secure_asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
@endsection
@section('page-script')
    <!-- Page js files -->
    <script src="{{ secure_asset(mix('js/scripts/pages/modal-add-permission.js')) }}"></script>
    <script src="{{ secure_asset(mix('js/scripts/pages/modal-edit-permission.js')) }}"></script>
    {{--  <script src="{{ secure_asset(mix('js/scripts/pages/app-access-permission.js')) }}"></script> --}}
@endsection
