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
                <span>Reports</span>
            </div>
            <a href="{{route('reports.create')}}" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24"><path fill="currentColor" d="M12 22q-4.025-3.425-6.012-6.362T4 10.2q0-3.75 2.413-5.975T12 2q.675 0 1.338.113t1.287.312L9 8.075V13h4.925l5.625-5.625q.225.65.338 1.35T20 10.2q0 2.5-1.987 5.438T12 22Zm-1-11V8.9l6.2-6.2l2.1 2.1l-6.2 6.2H11Zm9-6.9L17.9 2l.7-.7q.275-.275.7-.275t.7.275l.7.7q.275.275.275.7t-.275.7l-.7.7Z"/></svg>
                <span>
                    COMPOSE REPORT
                </span>
            </a>
        </div>
        <div class="card-body">
            <table id="myTable" class="display">
                <thead>
                    <tr>
                        <th>Report ID</th>
                        <th>Report Type</th>
                        <th>Date</th>
                        <th>Descriptions</th>
                        <th>Coordinates</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reports as $report)
                        <tr>
                            <td>{{\Str::padLeft($report->id, 6, 0)}}</td>
                            <td>{{$report->type}}</td>
                            <td>{{$report->created_at->format('M d, Y')}}</td>
                            <td>{{$report->descriptions}}</td>
                            <td>
                                {{$report->lat}} - {{$report->lng}}
                            </td>
                            <td>
                                {{$report->status}}
                            </td>
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
