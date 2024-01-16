@extends('layouts.main-layout')

@section('styles')

@endsection

@section('header')
    @include('includes.header')
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card mx-auto bg-light">
                <div class="card-body">
                    <h1>Make an appointment</h1>

                    <table>
                        <thead>
                            <tr>
                                <th>Hour</th>
                                <th>Doctor</th>
                                <th>Availability</th>
                                <th>Booking</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>09:00 - 10:00</td>
                                <td>Dr. Martin</td>
                                <td>Available</td>
                                <td><button class="reserve-btn" onclick="reserveAppointment('Dr. Martin', '09:00 - 10:00')">Booking</button></td>
                            </tr>
                            <tr>
                                <td>10:00 - 11:00</td>
                                <td>Dr. Emma</td>
                                <td>Not available</td>
                                <td><button class="reserve-btn" disabled>Booking</button></td>
                            </tr>
                            <tr>
                                <td>11:00 - 12:00</td>
                                <td>Dr. Thomas</td>
                                <td>Available</td>
                                <td><button class="reserve-btn" onclick="reserveAppointment('Dr. Thomas', '11:00 - 12:00')">Booking</button></td>
                            </tr>
                            <tr>
                                <td>14:00 - 15:00</td>
                                <td>Dr. Alice</td>
                                <td>Available</td>
                                <td><button class="reserve-btn" onclick="reserveAppointment('Dr. Alice', '14:00 - 15:00')">Booking</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function reserveAppointment(doctor, time) {
            console.log('Réserver un rendez-vous avec le Dr.', doctor, 'à', time);
        }
    </script>
@endsection

@section('footer')

@endsection
