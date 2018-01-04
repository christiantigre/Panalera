@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Ventum {{ $venta->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/venta') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/venta/' . $venta->id . '/edit') }}" title="Edit Venta"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/venta' . '/' . $venta->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-xs" title="Delete Venta" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $venta->id }}</td>
                                    </tr>
                                    <tr><th> Fecha </th><td> {{ $venta->fecha }} </td></tr><tr><th> Cliente </th><td> {{ $venta->cliente }} </td></tr><tr><th> Cel Cli </th><td> {{ $venta->cel_cli }} </td></tr><tr><th> Ruc Cli </th><td> {{ $venta->ruc_cli }} </td></tr><tr><th> Dir Cli </th><td> {{ $venta->dir_cli }} </td></tr><tr><th> Mail Cli </th><td> {{ $venta->mail_cli }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
