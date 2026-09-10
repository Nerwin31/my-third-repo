<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 3 - Class Schedule</title>

    <link href="{{ asset('css/bootstrap-cyborg.min.css') }}" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <h1 class="mb-4">Class Schedule</h1>

    <div class="row">

        <!-- Main Area -->
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

        <!-- Sidebar -->
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

</div>

<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>