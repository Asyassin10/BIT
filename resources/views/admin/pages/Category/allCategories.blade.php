@extends('admin.master')
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
                                                reference exists
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('UpdateCategory', ['category_id' => $c->categorie_id]) }}"
                                                class="btn btn-primary">update</a>
                                            {{-- <a href="" class="btn btn-danger">delete</a> --}}
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
