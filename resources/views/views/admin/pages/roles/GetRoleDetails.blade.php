

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
