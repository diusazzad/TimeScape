@extends('layouts.master')
@section('content')

<div class="card">
    <div class="card-header bg-success text-white">
        TimeTable
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-sm" id="printTable">
                <thead>
                    <tr>

                        <th>Employee Name</th>
                        <th>Employee Position</th>
                        <th>Employee ID</th>
                        <th style="">
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <input type="hidden" name="emp_id" value="">

                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>

                        <td>

                            <div class="form-check form-check-inline ">

                                <i class="fa fa-check text-success"></i>
                                <i class="fa fa-check text-danger"></i>

                                <i class="fas fa-times text-danger"></i>
                            </div>
                            <div class="form-check form-check-inline">

                                <i class="fa fa-check text-success"></i>
                                <i class="fa fa-check text-danger"></i>

                                <i class="fas fa-times text-danger"></i>


                            </div>

                        </td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection