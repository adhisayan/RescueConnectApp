@extends('layouts.admin') 
@section('content')

<div class="source bg-white rounded p-5">

    <div class="md:flex">
        <div class="flex-1">
            <h4 class="px-2">Basic Details</h4>
            <table class="table  table-borderless">
                <tr>
                    <td>Name</td>
                    <td>{{ $req->name }}</td>
                </tr>

                <tr>
                    <td>Phone</td>
                    <td>{{ $req->phone }}</td>
                </tr>
                <tr>
                    <td>Request for others
                    </td>
                    <td>@if ($req->reqOthers == 0) No @else Yes @endif

                    </td>
                </tr>


                <tr>
                    <td>District</td>
                    <td>{{ $req->district }}</td>
                </tr>

                <tr>
                    <td>Location</td>
                    <td>{{ $req->location }}</td>
                </tr>


                <tr>
                    <td>Latitude</td>
                    <td>{{ $req->lat }}</td>
                </tr>

                <tr>
                    <td>Longitude</td>
                    <td>{{ $req->lon }}</td>
                </tr>
            </table>
        </div>
        <div class="flex-1">
            <h4 class="px-2">Needs</h4>

            <table class="table  table-borderless">
                @if ($req->rescue)
                <tr>
                    <td>Rescue</td>
                    <td>{{ $req->rescue }}</td>
                </tr>
                @endif @if ($req->water)
                <tr>
                    <td>Water</td>
                    <td>{{ $req->water }}</td>
                </tr>
                @endif @if ($req->food)
                <tr>
                    <td>Food</td>
                    <td>{{ $req->food }}</td>
                </tr>
                @endif @if ($req->clothing)
                <tr>
                    <td>Clothing</td>
                    <td>{{ $req->clothing }}</td>
                </tr>
                @endif @if ($req->medicine)
                <tr>
                    <td>Medicine</td>
                    <td>{{ $req->medicine }}</td>
                </tr>
                @endif @if ($req->kitchen)
                <tr>
                    <td>Kitchen</td>
                    <td>{{ $req->kitchen }}</td>
                </tr>
                @endif @if ($req->toiletries)
                <tr>
                    <td>Toiletries</td>
                    <td>{{ $req->toiletries }}</td>
                </tr>
                @endif @if ($req->other)
                <tr>
                    <td>Other</td>
                    <td>{{ $req->other }}</td>
                </tr>
                @endif


            </table>
        </div>
    </div>


    <div class="md:flex w-1/2">
        <div class="md:flex-1">

            <a href="https://www.google.com/maps/?q={{ $req->lat }},{{ $req->lon }}" target="_BLANK" class="el-button el-button--primary"><i class="el-icon-location-outline"></i> View on Google Map</a>

        </div>
        <div class="md:flex-1">
            @if ($req->status == 0)

            <a href="{{ url('admin/requst/status/'.$req->id) }}" class="el-button el-button--success text-white"><i class="el-icon-check"></i>  Mark as Completed</a>            @else
            <a href="{{ url('admin/requst/status/pending/'.$req->id) }}" class="el-button el-button--danger text-white"><i class="el-icon-warning"></i>  Mark as Pending</a>            @endif
        </div>

    </div>




</div><iframe src="https://maps.google.com/maps?q={{ $req->lat }},{{ $req->lon }}&hl=es;z=14&amp;output=embed" class="w-full h-full"
    style="
    height: 300px;
"></iframe>
@endsection