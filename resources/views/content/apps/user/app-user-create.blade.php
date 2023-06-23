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
    <br>
    <br>

    <!-- Permission Table -->
    <div class="card">
        <div class="card-datatable table-responsive">
            <a type="button" class="item-edit text-primary" data-bs-toggle="modal" data-bs-target="#update-users">
                utilisateurs
            </a>

            <!-- Modal -->
            <div class="modal fade text-start" id="update-users" tabindex="-1" aria-labelledby="myModalLabel33"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel33">modifier la permission
                            </h4>

                        </div>
                        <form class="forms-sample" method="POST">
                            @csrf
                            <div class="modal-body">
                                <div class="mb-1">
                                    <input type="text" placeholder="Nom de catégorie..." class="form-control"
                                        name="name" required " />
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
                                            <input type="text" id="modalPermissionName" name="modalPermissionName" class="form-control"
                                                placeholder="Permission Name" autofocus data-msg="Please enter permission name" />
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
