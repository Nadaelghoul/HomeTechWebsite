<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- main stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <!-- icon -->
    <link rel="icon" href="assets/images/logo-removebg-preview.png" type="image/png">
    <!-- Assuming path, adjust if needed -->
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Font: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body>

    @php
    use App\Models\Provider;
  $totalRequests = $serviceRequests->count() + $topproviderrequests->count(); // Get total count of service requests
  $acceptedOrders = $serviceRequests->where('status', 'accepted')->count() + $topproviderrequests->where('status', 'accepted')->count();
  $failedrequests = $topproviderrequests->where('status', 'refuced')->count();
  $noresponserequest = $serviceRequests->where('status', 'expired')->count();
  @endphp

    <div class="admin-container">
          <!-- Sidebar Toggle Checkbox -->
    <input type="checkbox" id="sidebar-toggle">
    <!-- Sidebar -->
    <div class="overlay"></div>
    <aside id="sidebar">
        <label for="sidebar-toggle" class="close-btn">&times;</label>
        <div class="menu">
            <div class="detal">
                <a href="{{ url('/home') }}" style="text-decoration: none;"> <i class="fa-solid fa-house"></i>&nbsp;<p>Home</p></a><br>
                <a href="{{url('/electrical')}}" style="text-decoration: none;"> <i class="fa-solid fa-screwdriver-wrench"></i>&nbsp;<p>Electrical Service</p></a><br>
                <a href="{{url('/carpentry')}}" style="text-decoration: none;"> <i class="fa-solid fa-hammer"></i>&nbsp;<p>Carpentry Service</p></a><br>
                <a href="{{url('/painting')}}" style="text-decoration: none;"> <i class="fa-solid fa-brush"></i>&nbsp;<p>Painting Service</p></a><br>
                <a href="{{url('/plumbing')}}" style="text-decoration: none;"> <i class="fa-solid fa-faucet"></i>&nbsp;<p>Plumbing Service</p></a><br>
                <a href="{{url('/airconditions')}}" style="text-decoration: none;"> <i class="fa-solid fa-temperature-arrow-up"></i>&nbsp;<p>AirConditioning Service</p></a><br>
                <a href="{{url('/appliance')}}" style="text-decoration: none;"> <i class="fa-solid fa-fire-burner"></i>&nbsp;<p>Appliance Service</p></a><br>
            </div>
        </div>
    </aside>
    <label for="sidebar-toggle" class="icon-menu">&#9776;</label>
        <h1 class="admin-title">Admin Dashboard</h1>

        <!-- Stats Overview Section -->
        <section class="stats-overview">
            <div class="stat-card">
                <div class="card-header">
                    <h3 class="card-title">Website Requests</h3>
                </div>
                <div class="card-content">
                    <p class="total">{{ $totalRequests }}</p>
                    <span class="separator">|</span>
                    <p class="report">In Number</p>
                </div>
            </div>

            <div class="stat-card">
                <div class="card-header">
                    <h3 class="card-title">Accepted Orders</h3>
                </div>
                <div class="card-content">
                    <p class="total">{{ $acceptedOrders }}</p>
                    <span class="separator">|</span>
                    <p class="report">In Number</p>
                </div>
            </div>

            <div class="stat-card">
                <div class="card-header">
                    <h3 class="card-title">Noresponse Orders</h3>
                </div>
                <div class="card-content">
                    <p class="total">{{ $noresponserequest }}</p>
                    <span class="separator">|</span>
                    <p class="report">In Number</p>
                </div>
            </div>

            <div class="stat-card">
                <div class="card-header">
                    <h3 class="card-title">Failed Orders</h3>
                </div>
                <div class="card-content">
                    <p class="total">{{ $failedrequests }}</p>
                    <span class="separator">|</span>
                    <p class="report">In Number</p>
                </div>
            </div>
        </section>

        <!-- Orders Table Section -->
        <section class="orders-section">
            <h2>Recent Orders</h2>
            <div class="orders-table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Transaction ID</th>
                            <th>Service Type</th>
                            <th>Date</th>
                            <th>Provider/s</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($serviceRequests as $request)
                        <tr>
                            <td>{{'#'. $request->request_key }}</td>
                            <td>{{ $request->service }} <br>({{ $request->skill }})</td>
                            <td>{{ $request->created_at->format('Y-m-d') }}</td>

                            {{-- Display notified providers --}}
                            <td>
                                @php
                                    // Get providers who were notified (based on service & skill match)
                                    $notifiedProviders = Provider::where('service', $request->service) // Service must match
                                      ->whereJsonContains('skills', $request->skill) // Skill should be in provider's skills
                                      ->get();
                                @endphp

                                @foreach($notifiedProviders as $provider)
                                    {{ $provider->name }},<br>
                                @endforeach
                            </td>

                            {{-- Display accepted provider --}}
                            <td>
                                @if($request->status === 'expired')
                                <span class="status Failed">Expired</span>
                                @endif
                               @if($request->accepted_provider_id)
                               <span class="status Accepted">Accepted</span><br><p style="color:rgb(2, 108, 2); display:inline;">by:</p>&nbsp;{{ $request->accepted_provider_id ? $request->acceptedProvider->name : 'Not accepted' }}
                               @endif
                            @if  ($request->status === 'pending')
                            <span class="status InProcess">Pending</span>
                            @endif
                            </td>
                        </tr>
                        @endforeach

                        @foreach($topproviderrequests as $request)
                        <tr>
                            <td>{{'#'. $request->request_key }}</td>
                            <td>{{ $request->service }}<br> ({{ $request->skill }})</td>
                            <td>{{ $request->created_at->format('Y-m-d') }}</td>

                            {{-- Display notified providers --}}
                            <td>
                                @php
                                    // Get providers who were notified
                                    $notifiedProviders = Provider::where('name', $request->service_provider)
                                      ->get();
                                @endphp

                                @foreach($notifiedProviders as $provider)
                                    {{ $provider->name }} <p style="color: rgb(54, 54, 227)">as top provider</p>
                                @endforeach
                            </td>

                            {{-- Display accepted provider --}}
                            <td>
                                @if($request->status === 'refuced')
                                <span class="status Failed">Failed</span>
                                @endif
                                @if($request->status === 'accepted')
                                <span class="status Accepted">Accepted</span>
                                @endif
                                @if($request->status === 'pending')
                                <span class="status InProcess">Pending</span>
                              @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>

    </div> <!-- end admin-container -->
</body>

</html>
