@extends('layouts.app')
@section('header_toolbar')
    <div class="container-fluid">
        <div class="d-md-flex align-items-center justify-content-between mb-5">
            <h1 class="mb-0">Appointment Calendar</h1>
            <div class="text-end mt-4 mt-md-0">
                <button type="button" class="btn btn-primary">Appointment List</button>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="d-flex flex-column flex-lg-row">
            <div class="flex-lg-row-fluid">
                <div class="card">
                    <div class="card-body">
                        <div id='calendar'></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page_js')
    <script>
        let calendarEl = document.getElementById('calendar')

        let calendar = new FullCalendar.Calendar(calendarEl, {
            themeSystem: 'bootstrap5',
            height: 750,
            headerToolbar: {
                left: 'title',
                center: 'prev,next today',
                right: 'dayGridMonth,timeGridWeek,timeGridDay',
            },
            initialDate: new Date(),
            timeZone: 'UTC',
            dayMaxEvents: true,
            events: [
                    @foreach($period as $appointment)
                {
                    title: 'working days',
                    start: '{{ $appointment->format('Y-m-d')}}',
                    @if ($appointment->format('Y-m-d'))
                    end: '{{ $appointment->format('Y-m-d') }}',
                    @endif
                },
                @endforeach
            ],
        })
        calendar.render()
    </script>
@endsection
