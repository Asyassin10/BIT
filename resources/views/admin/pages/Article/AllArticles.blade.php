@extends('admin\layout\AdminLayout')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    Articles
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Tables</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Articles</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Articles</h4>
                            <p class="card-description">
                                Add class <code>.table</code>
                            </p>
                            <a href="{{ route('AddArticle', ['category_id' => $category_id]) }}" class="btn btn-primary">Add
                                Article</a>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Article</th>
                                            <th>Operations</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($all_articles as $article)
                                            <tr>
                                                <td>{{ $article->article_slug }}</td>
                                                <td>
                                                    <a href="{{ route('update_articles', ['article_id' => $article->article_id]) }}"
                                                        class="btn btn-outline-success">Modifier</a>
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
        <!-- partial -->
        @include('admin.footer')

    </div>
@endsection
