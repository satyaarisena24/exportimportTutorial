@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('Table List')])

@section('content')
<div class="content">
    <div class="col-12 text-left">
        <a href="{{ route('user.create') }}" class="btn btn-sm btn-primary">{{ __('Add') }}</a>
        <a href="{{ route('user.create') }}" class="btn btn-sm btn-primary">{{ __('Import Data') }}</a>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    {{-- <div class="card-header card-header-primary">
                        <h4 class="card-title ">Simple Table</h4>
                        <p class="card-category"> Here is a subtitle for this table</p>
                    </div> --}}
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        No. Dokumen
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Keterangan
                                    </th>
                                    <th>

                                    </th>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
