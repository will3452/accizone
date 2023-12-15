@extends('layouts.app')

@section('content')
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
<div class="container">
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24"><path fill="currentColor" d="M3 21v-2h18v2H3Zm0-4v-2h12v2H3Zm0-4v-2h18v2H3Zm0-4V7h12v2H3Zm0-4V3h18v2H3Z"/></svg>
                <span>Notifications</span>
            </div>
        </div>
        <div class="card-body">
            <table id="myTable" class="display">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Descriptions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (auth()->user()->notifications as $not)
                        <tr>
                            <td>{{$not->created_at->format('M d, Y')}}</td>
                            <td>{{$not->data['message']}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>
@endsection
