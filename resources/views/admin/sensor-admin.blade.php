@extends('layouts.user_type.auth')

@section('title', 'Sensor')

@section('content')

    <div>
        <div class="row" style="margin-top: -30px;">
            <div class="col-12">
                <div class="card mb-4 mx-2">
                    <div class="card-header pb-0">
                        <div class="d-flex flex-row justify-content-between" style="margin-bottom: 30px;">
                            <div>
                                <h5 class="mb-0">Daftar Sensor User </h5>
                            </div>

                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <h5 class="mb-1">

                                    </h5>
                                    <tr>
                                        <th class="text-chamelcase text-bold text-xl-start font-weight-bolder opacity-7">
                                            No
                                        </th>
                                        <th
                                            class="text-center text-chamelcase text-bold text-xl-start font-weight-bolder opacity-7">
                                            User
                                        </th>
                                        <th
                                            class="text-center text-chamelcase text-bold text-xl-start font-weight-bolder opacity-7">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sensor_admin as $row => $sensor)
                                        <tr>
                                            <td class="ps-4">
                                                {{ $row + 1 }}
                                            </td>
                                            <td class="text-center">
                                                {{ $sensor->user ? $sensor->user->name : 'Tidak diketahui' }}

                                            </td>
                                            <td class="text-center horizontal-icons">
                                                <a href="{{ url('detail/' . $sensor->id . '?komoditas=' . $sensor->komoditas) }}"
                                                    class="icon-link" data-bs-toggle="tooltip"
                                                    data-bs-original-title="View Detail">
                                                    <i class="fas fa-eye text-bold"></i>
                                                </a>

                                                <form action="{{ route('sensor_admin.destroy', $sensor->id) }}"
                                                    method="POST" class="icon-link">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="cursor-pointer fas fa-trash text-bold"
                                                        style="border: none; background: none;">
                                                    </button>
                                                </form>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="text-center">Belum ada Sensor</td>
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
    {{-- Tempatkan pagination di bawah tabel --}}
    <div class="pagination-container">
        {{-- Pagination links --}}
        {{ $sensor_admin->links() }}
    </div>

    <style>
        .card {
            margin: 1rem;
            padding: 1rem;
            border-radius: 30px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.45);
        }

        .card-header {
            background-color: #f8f9fa;
            border-bottom: 1px solid #eaecef;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);

        }

        body {
            font-family: 'Arial', sans-serif;
            font-size: 14px;
        }

        h5 {
            color: #333;
            margin-bottom: 0.5rem;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead th {
            background-color: #e9ecef;
            color: #495057;
        }

        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tbody tr:hover {
            background-color: #ddd;
        }

        .btn {
            background-color: #007bff;
            color: white;
            padding: 8px 15px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .fas {
            color: #6c757d;
            margin-right: 5px;
        }

        .text-xl-start {
            font-size: 14px;
        }

        .horizontal-icons {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .icon-link {
            margin: 0 5px;
        }

        /* Style tambahan untuk pagination */
        .pagination-container {
            text-align: center;
            margin-top: 20px;
        }

        .pagination {
            display: inline-block;
            padding-left: 0;
            margin: 20px 0;
            border-radius: 4px;
        }

        .page-item {
            display: inline;
        }

        .page-item a {
            position: relative;
            float: left;
            padding: 6px 12px;
            margin-left: -1px;
            line-height: 1.42857143;
            color: #007bff;
            text-decoration: none;
            background-color: #fff;
            border: 1px solid #ddd;
        }

        .page-item.active a {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
        }

        .page-item.disabled a {
            color: #777;
            pointer-events: none;
            cursor: not-allowed;
            background-color: #fff;
            border-color: #ddd;
        }

        .page-link {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media screen and (max-width: 600px) {
            .pagination {
                font-size: 12px;
            }
        }
    </style>

@endsection
