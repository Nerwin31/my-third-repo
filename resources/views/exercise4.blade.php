<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 4 - ACT Student Portal</title>

    <link href="{{ asset('css/bootstrap-cyborg.min.css') }}" rel="stylesheet">
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-dark bg-primary">
    <div class="container">
        <span class="navbar-brand mb-0 h1">
            ACT Student Portal
        </span>
    </div>
</nav>


<div class="container mt-4">

    <!-- TOP GRID - STAT CARDS -->

    <h2 class="mb-3">Student Statistics</h2>

    <div class="row">

        <!-- Stat Card 1 -->
        <div class="col-12 col-md-4 mb-4">

            <div class="card h-100">

                <div class="card-body">

                    <h5 class="card-title">
                        Enrolled Subjects: 6
                    </h5>

                    <span class="badge bg-success">
                        Active
                    </span>

                </div>

            </div>

        </div>


        <!-- Stat Card 2 -->
        <div class="col-12 col-md-4 mb-4">

            <div class="card h-100">

                <div class="card-body">

                    <h5 class="card-title">
                        Pending Tasks: 2
                    </h5>

                    <span class="badge bg-warning text-dark">
                        Due Soon
                    </span>

                </div>

            </div>

        </div>


        <!-- Stat Card 3 -->
        <div class="col-12 col-md-4 mb-4">

            <div class="card h-100">

                <div class="card-body">

                    <h5 class="card-title">
                        Attendance: 98%
                    </h5>

                    <span class="badge bg-info text-dark">
                        Good
                    </span>

                </div>

            </div>

        </div>

    </div>


    <!-- MIDDLE GRID -->

    <h2 class="mb-3">Class Schedule</h2>

    <div class="row">

        <!-- MAIN AREA -->
        <div class="col-12 col-md-8 mb-4">

            <div class="card">

                <div class="card-header">
                    Class Schedule
                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead>
                                <tr>
                                    <th>Subject</th>
                                    <th>Schedule</th>
                                    <th>Room</th>
                                    <th>Status</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td>Web Development</td>
                                    <td>Monday 8:00 AM</td>
                                    <td>Room 101</td>
                                    <td>
                                        <span class="badge bg-success">
                                            Active
                                        </span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Database Systems</td>
                                    <td>Tuesday 10:00 AM</td>
                                    <td>Room 202</td>
                                    <td>
                                        <span class="badge bg-success">
                                            Active
                                        </span>
                                    </td>
                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>


        <!-- SIDEBAR -->
        <div class="col-12 col-md-4 mb-4">

            <div class="card">

                <div class="card-header">
                    Announcements
                </div>

                <div class="card-body">

                    <div class="alert alert-warning">
                        <strong>Reminder:</strong>
                        Asynchronous session today!
                    </div>

                    <div class="list-group">

                        <div class="list-group-item">
                            Submit your activity before Friday.
                        </div>

                        <div class="list-group-item">
                            Check the LMS for new announcements.
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- BOTTOM ACTION BAR -->

    <h2 class="mb-3">Portal Actions</h2>

    <div class="row">

        <!-- LEFT BUTTON -->
        <div class="col-12 col-md-6 mb-3">

            <button class="btn btn-primary w-100">
                Download Official Schedule PDF
            </button>

        </div>


        <!-- RIGHT BUTTON -->
        <div class="col-12 col-md-6 mb-3">

            <button class="btn btn-outline-danger w-100">
                Report a Portal Issue
            </button>

        </div>

    </div>

</div>


<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>