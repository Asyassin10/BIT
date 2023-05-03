{{-- @extends('admin\layout\AdminLayout')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Checkbox Controls</h4>
                            <p class="card-description">Checkbox and radio controls (default appearance is in primary color)
                            </p>
                            <form action="{{ route('SaveRolePermissionData', ['role_id' => $role->id]) }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            @foreach ($permissions as $p)
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        @if (Auth::user()->can($p->name))
                                                            <input type="checkbox" name="permissions[]"
                                                                value='{{ $p->name }}' class="form-check-input"
                                                                checked>
                                                        @else
                                                            <input type="checkbox" name="permissions[]"
                                                                value='{{ $p->name }}' class="form-check-input">
                                                        @endif

                                                        {{ $p->name }}
                                                    </label>
                                                </div>
                                            @endforeach


                                        </div>
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-primary mr-2">enregistrer</button>
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
    </div>
@endsection
 --}}

@extends('admin\layout\AdminLayout')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    les permissions
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
                                            <th>Opérations</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($permissions as $key => $r)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $r->name }}</td>

                                                <td>
                                                    @if ($role->hasPermissionTo($r))
                                                        <a href="{{ route('UnAssignPermissionToRole', ['role_id' => $role->id, 'permission_id' => $r->id]) }}"
                                                            class="btn btn-primary ">supprimer l'accès </a>
                                                    @else
                                                        <a href="{{ route('AssignPermissionToRole', ['role_id' => $role->id, 'permission_id' => $r->id]) }}"
                                                            class="btn btn-primary ">ajouter un accès </a>
                                                    @endif
                                                    {{-- <a href="{{ route('UpdateCategory', ['category_id' => $c->categorie_id]) }}"
                                                        class="btn btn-outline-success">Modifier</a>
                                                    <a href="{{ route('AllArticles', ['category_id' => $c->categorie_id]) }}"
                                                        class="btn btn-outline-info ">Articles </a> --}}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
@endsection
