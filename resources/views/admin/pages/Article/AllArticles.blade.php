{{-- @extends('admin.master')
@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Default Table</h5>
                        <a href="{{ route('CreateCategory') }}" class="btn btn-primary">add category</a>

                        <!-- Default Table -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">reference</th>
                                    <th scope="col">Operations</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($all_categories as $c)
                                    <tr>
                                        <th scope="row">{{ $c->categorie_id }}</th>
                                        <td>{{ $c->categorie_name }}</td>
                                        <td>
                                            @if (is_null($c->categorie_parent_id))
                                                ----
                                            @else
                                                {{ $c->referenceCategory->categorie_name }}
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('UpdateCategory', ['category_id' => $c->categorie_id]) }}"
                                                class="btn btn-primary">update</a>
                                        </td>
                                    </tr>
                                @endforeach



                            </tbody>
                        </table>
                        <!-- End Default Table Example -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
 --}}
@extends('admin\layout\AdminLayout')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    Basic Tables
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Tables</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
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
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Article Slug</th>
                                            {{-- <th>VatNo.</th>
                                            <th>Created</th> --}}
                                            <th>Operations</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($all_articles as $article)
                                            <tr>
                                                <td>{{ $article->article_slug }}</td>
                                                {{-- <td>53275531</td>
                                            <td>12 May 2017</td> --}}
                                                <td><label class="badge badge-danger badge-pill">Pending</label></td>
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
