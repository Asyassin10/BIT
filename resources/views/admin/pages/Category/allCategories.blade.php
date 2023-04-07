@extends('admin\layout\AdminLayout')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    Catégories
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Tables</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Catégories</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('CreateCategory') }}" class="btn btn-primary">add category</a>
                            <div class="table-responsive">
                                <table class="table">
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
                                      <tr>
                                          <td>{{ $key }}</td>
                                          <td>{{ $c->categorie_name }}</td>
                                          <td>
                                            @if (is_null($c->categorie_parent_id))
                                            ----
                                            @else
                                                {{ $c->referenceCategory->categorie_name }}
                                            @endif
                                          </td>
                                          <td>
                                            <a href="{{ route('UpdateCategory', ['category_id' => $c->categorie_id]) }}" class="btn btn-outline-success">Modifier</a>
                                            <a href="{{ route('AllArticles', ['category_id' => $c->categorie_id]) }}" class="btn btn-outline-info " >Articles </a>
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
