@extends('layouts/contentLayoutMaster')

@section('title', 'User List')

@section('vendor-style')
    {{-- Page Css files --}}
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap5.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap5.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/buttons.bootstrap5.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/rowGroup.bootstrap5.min.css')) }}">
@endsection

@section('page-style')
    {{-- Page Css files --}}
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
@endsection

@section('content')
    <!-- users list start -->
    <section class="app-user-list">
        <a type="nutton" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create_user">Créer un
            utilisateur</a>
        <br>
        <br>
        <div class="modal fade text-start" id="create_user" tabindex="-1" aria-labelledby="myModalLabel33"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel33">créer un utlisateur
                        </h4>

                    </div>
                    <form class="forms-sample" method="POST" action="{{ route('app-user-create') }}">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-1">
                                <input type="text" placeholder="Nom" class="form-control" name="name" required />
                            </div>
                            <div class="mb-1">
                                <input type="email" placeholder="email" class="form-control" name="email" required />
                            </div>
                            <div class="mb-1">
                                <input type="password" placeholder="mot de passe" class="form-control" name="password"
                                    required />
                            </div>
                            {{-- <div class="mb-1">
                                <input type="text" placeholder="confirmer mot de passe" class="form-control"
                                    name="confirmation_password" required />
                            </div> --}}
                            {{--   <div class="mb-1">
                                <select class="form-select" aria-label="Default select example">
                                    @foreach ($roles as $r)
                                        <option value="{{ $r->id }}">{{ $r->name }}</option>
                                    @endforeach
                                </select>
                            </div> --}}

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
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div>
                            <h3 class="fw-bolder mb-75">{{ count($users_count) }}</h3>
                            <span>Nombre total d'utilisateurs</span>
                        </div>
                        <div class="avatar bg-light-primary p-50">
                            <span class="avatar-content">
                                <i data-feather="user" class="font-medium-4"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">nom</th>
                                    <th scope="col">permissions</th>
                                    <th scope="col">les roles</th>
                                    <th scope="col">actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users_count as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>
                                            <p>
                                                @foreach ($user->permissions as $p)
                                                    {{ $p->name }}
                                                @endforeach
                                            </p>

                                            {{-- @if ($user->hasPermissionTo($c->name))
                                                <a href="{{ route('DeleteUserToPermission', ['permission_id' => $c->id, 'user_id' => $user->id]) }}"
                                                    class="btn btn-primary">Retirer l'access</a>
                                            @else
                                                <a href="{{ route('AssignUserToPermission', ['permission_id' => $c->id, 'user_id' => $user->id]) }}"
                                                    class="btn btn-primary">Ajouter l'access</a>
                                            @endif --}}
                                        </td>
                                        <td>
                                            <p>
                                                @foreach ($user->roles as $p)
                                                    {{ $p->name }}
                                                @endforeach
                                            </p>
                                        </td>
                                        <td>
                                            <a href="{{ route('app-access-permission') }}">Manager les permissions</a>
                                            |
                                            <a href="{{ route('app-access-roles') }}">Manager les roles</a>
                                        </td>

                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- list and filter start -->
        {{--   <div class="card">
    <div class="card-body border-bottom">
      <h4 class="card-title">Search & Filter</h4>
      <div class="row">
        <div class="col-md-4 user_role"></div>
        <div class="col-md-4 user_plan"></div>
        <div class="col-md-4 user_status"></div>
      </div>
    </div>
    <div class="card-datatable table-responsive pt-0">
      <table class="user-list-table table">
        <thead class="table-light">
          <tr>
            <th></th>
            <th>Name</th>
            <th>Role</th>
            <th>Plan</th>
            <th>Billing</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
      </table>
    </div>
    <!-- Modal to add new user starts-->
    <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in">
      <div class="modal-dialog">
        <form class="add-new-user modal-content pt-0">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
          <div class="modal-header mb-1">
            <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
          </div>
          <div class="modal-body flex-grow-1">
            <div class="mb-1">
              <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
              <input
                type="text"
                class="form-control dt-full-name"
                id="basic-icon-default-fullname"
                placeholder="John Doe"
                name="user-fullname"
              />
            </div>
            <div class="mb-1">
              <label class="form-label" for="basic-icon-default-uname">Username</label>
              <input
                type="text"
                id="basic-icon-default-uname"
                class="form-control dt-uname"
                placeholder="Web Developer"
                name="user-name"
              />
            </div>
            <div class="mb-1">
              <label class="form-label" for="basic-icon-default-email">Email</label>
              <input
                type="text"
                id="basic-icon-default-email"
                class="form-control dt-email"
                placeholder="john.doe@example.com"
                name="user-email"
              />
            </div>
            <div class="mb-1">
              <label class="form-label" for="basic-icon-default-contact">Contact</label>
              <input
                type="text"
                id="basic-icon-default-contact"
                class="form-control dt-contact"
                placeholder="+1 (609) 933-44-22"
                name="user-contact"
              />
            </div>
            <div class="mb-1">
              <label class="form-label" for="basic-icon-default-company">Company</label>
              <input
                type="text"
                id="basic-icon-default-company"
                class="form-control dt-contact"
                placeholder="PIXINVENT"
                name="user-company"
              />
            </div>
            <div class="mb-1">
              <label class="form-label" for="country">Country</label>
              <select id="country" class="select2 form-select">
                <option value="Australia">USA</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Belarus">Belarus</option>
                <option value="Brazil">Brazil</option>
                <option value="Canada">Canada</option>
                <option value="China">China</option>
                <option value="France">France</option>
                <option value="Germany">Germany</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Japan">Japan</option>
                <option value="Korea">Korea, Republic of</option>
                <option value="Mexico">Mexico</option>
                <option value="Philippines">Philippines</option>
                <option value="Russia">Russian Federation</option>
                <option value="South Africa">South Africa</option>
                <option value="Thailand">Thailand</option>
                <option value="Turkey">Turkey</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
              </select>
            </div>
            <div class="mb-1">
              <label class="form-label" for="user-role">User Role</label>
              <select id="user-role" class="select2 form-select">
                <option value="subscriber">Subscriber</option>
                <option value="editor">Editor</option>
                <option value="maintainer">Maintainer</option>
                <option value="author">Author</option>
                <option value="admin">Admin</option>
              </select>
            </div>
            <div class="mb-2">
              <label class="form-label" for="user-plan">Select Plan</label>
              <select id="user-plan" class="select2 form-select">
                <option value="basic">Basic</option>
                <option value="enterprise">Enterprise</option>
                <option value="company">Company</option>
                <option value="team">Team</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary me-1 data-submit">Submit</button>
            <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
          </div>
        </form>
      </div>
    </div>
    <!-- Modal to add new user Ends-->
  </div> --}}
        <!-- list and filter end -->
    </section>
    <!-- users list ends -->
@endsection

@section('vendor-script')
    {{-- Vendor js files --}}
    <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.bootstrap5.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/responsive.bootstrap5.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/jszip.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/pdfmake.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/vfs_fonts.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.html5.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.print.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.rowGroup.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/forms/cleave/cleave.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/forms/cleave/addons/cleave-phone.us.js')) }}"></script>
@endsection

@section('page-script')
    {{-- Page js files --}}
    <script src="{{ asset(mix('js/scripts/pages/app-user-list.js')) }}"></script>
@endsection
