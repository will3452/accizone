@extends('layouts.app')

@section('content')

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
    .dashboard-count {
        font-size: 250%;
        font-weight: bolder; 
    }
</style>
<div class="container">
    <h1>DASHBOARD</h1>
    <div class="row g-4">
        <div class="col-12 col-md-4">
            <div class="card">
                <div class="card-header">
                    Users
                </div>
                <div class="card-body text-center">
                    <div class="dashboard-count">
                        {{ \App\Models\User::count() }}
                    </div>
                    <div>
                        <small>
                            As of {{ now()->format('M d, Y') }}
                        </small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card">
                <div class="card-header">
                    <span>
                        Reports
                    </span>
                </div>
                <div class="card-body text-center">
                    <div class="dashboard-count">
                        {{ \App\Models\Report::count() }}
                    </div>
                    <div>
                        <small>
                            As of {{ now()->format('M d, Y') }}
                        </small>
                    </div>
                </div>
            </div>
        </div><div class="col-12 col-md-4">
            <div class="card">
                <div class="card-header">
                    Activity
                </div>
                <div class="card-body text-center">
                    <div class="dashboard-count">
                        {{ \App\Models\AccessLog::count() }}
                    </div>
                    <div>
                        <small>
                            As of {{ now()->format('M d, Y') }}
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-4 mt-2">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M10 19q-.425 0-.712-.288T9 18q0-.425.288-.712T10 17h10q.425 0 .713.288T21 18q0 .425-.288.713T20 19H10Zm0-6q-.425 0-.712-.288T9 12q0-.425.288-.712T10 11h10q.425 0 .713.288T21 12q0 .425-.288.713T20 13H10Zm0-6q-.425 0-.712-.288T9 6q0-.425.288-.712T10 5h10q.425 0 .713.288T21 6q0 .425-.288.713T20 7H10ZM5 20q-.825 0-1.412-.587T3 18q0-.825.588-1.412T5 16q.825 0 1.413.588T7 18q0 .825-.587 1.413T5 20Zm0-6q-.825 0-1.412-.587T3 12q0-.825.588-1.412T5 10q.825 0 1.413.588T7 12q0 .825-.587 1.413T5 14Zm0-6q-.825 0-1.412-.587T3 6q0-.825.588-1.412T5 4q.825 0 1.413.588T7 6q0 .825-.587 1.413T5 8Z"/></svg>
                    <span>Activity Logs</span>
                </div>
                <div class="card-body">
                    <table id="myTable" class="display">
                        <thead>
                            <tr>
                                <th>Descriptions</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach (\App\Models\AccessLog::whereUserId(auth()->id())->latest()->get() as $item)
                           <tr>
                                <td>{{$item->info}}</td>
                                <td>{{$item->created_at->diffForHumans()}}</td>
                            </tr>
                           @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M3 21q-.425 0-.712-.288T2 20q0-.425.288-.712T3 19h18q.425 0 .713.288T22 20q0 .425-.288.713T21 21H3Zm1.5-3q-.625 0-1.062-.437T3 16.5v-4q0-.625.438-1.062T4.5 11q.625 0 1.063.438T6 12.5v4q0 .625-.437 1.063T4.5 18Zm5 0q-.625 0-1.062-.437T8 16.5v-9q0-.625.438-1.062T9.5 6q.625 0 1.063.438T11 7.5v9q0 .625-.437 1.063T9.5 18Zm5 0q-.625 0-1.062-.437T13 16.5v-6q0-.625.438-1.062T14.5 9q.625 0 1.063.438T16 10.5v6q0 .625-.437 1.063T14.5 18Zm5 0q-.625 0-1.062-.437T18 16.5v-12q0-.625.438-1.062T19.5 3q.625 0 1.063.438T21 4.5v12q0 .625-.437 1.063T19.5 18Z"/></svg>
                    Reports
                </div>
                <div class="card-body">
                    <canvas id="myChart" height="100"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>
<script>
    const ctx = document.getElementById('myChart');
    let dd = @json(\App\Models\Report::selectRaw('YEAR(created_at) as year')->selectRaw('count(*) as count')->groupByRaw('YEAR(created_at)')->orderByRaw('YEAR(created_at) asc')->get()); 
    console.log(dd); 
    new Chart(ctx, {
      type: 'line',
      data: {
        labels: dd.map(e => e.year),
        datasets: [{
          label: 'Reports',
          data: dd.map(e => e.count),
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>
@endsection
