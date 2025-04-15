<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Provider Dashboard</title>
    <!-- main stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
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

    <div class="admin-container">
           <!-- Sidebar Toggle Checkbox -->
    <input type="checkbox" id="sidebar-toggle">
    <!-- Sidebar -->
    <div class="overlay"></div>
    <aside id="sidebar">
        <label for="sidebar-toggle" class="close-btn" style="color: white">&times;</label>
        <div class="menu">
            <div class="detal">
                <a href="{{ url('/home') }}" style="text-decoration: none;"> <i class="fa-solid fa-house"></i>&nbsp;<p>Home</p></a><br>
                <a href="{{route('provider.profile', ['id' => $provider->id])}}" style="text-decoration: none;"> <i class="fa-solid fa-user"></i>&nbsp;<p> Personal Profile</p></a><br>
                @php
                $pendingRequestsCount = $serviceRequests->where('status', 'pending')->count()+ $topproviderrequests->where('status', 'pending')->count();
            @endphp

            <!-- Notify Link -->
            <a href="#!" onclick="document.getElementById('notification-message').style.display='block';" style="text-decoration: none; position: relative;">
                <i class="fa-solid fa-bell" style="position: relative;">
                    @if($pendingRequestsCount > 0)
                        <span class="notification-badge">{{ $pendingRequestsCount }}</span>
                    @endif
                </i>
                &nbsp;<p>Notify</p>
            </a>

            <!-- Notification Message (Initially Hidden) -->
            @if($pendingRequestsCount > 0)
                <div id="notification-message" class="notification-card" style="display: none;">
                    <span class="close-btn" onclick="document.getElementById('notification-message').style.display='none';">&times;</span>
                    <p>You have a new service request waiting for you. Check it in your dashboard.</p>
                   <a href="{{ route('provider.dashboard', ['provider_id' => auth('provider')->id()]) }}"class="btn">Go to Dashboard</a>
                </div>
            @endif

                <a href="{{ route('provider.dashboard', ['provider_id' => $provider->id]) }}" style="text-decoration: none;"><i class="fa-solid fa-border-all"></i>&nbsp;<p>Dashboard</p></a><br>
                <a href="{{route('provider.edit', ['id' => $provider->id])}}" style="text-decoration: none;"><i class="fa-solid fa-pen-to-square"></i>&nbsp;<p>Edit Profile</p></a><br>
                    <p><form action="{{ route('provider.logout') }}" method="POST" class="logout">
                        @csrf<button type="submit"><i class="fas fa-sign-out-alt"></i>&nbsp;log out</button>
                    </form></p>
            </div>
        </div>
    </aside>
       @php
       $providerId = auth('provider')->id(); // Get logged-in provider ID
       $provider = auth('provider')->user();
        $acceptedOrders = $serviceRequests->where('status', 'accepted')
                ->where('accepted_provider_id', $providerId)
                 ->count() + $topproviderrequests->where('status', 'accepted')
                ->where('service_provider', $provider->name)
                 ->count();
       $inprocessOrders = $serviceRequests->where('status', 'pending')->count() + $topproviderrequests->where('status', 'pending')->count();
       $failorders= $topproviderrequests->where('status', 'refuced')->count();
       @endphp

        <h1 class="admin-title">Provider Dashboard</h1>

        <!-- Stats Overview Section -->
             <!-- Sidebar Toggle Checkbox -->
     <input type="checkbox" id="sidebar-toggle">

   <!-- Sidebar Toggle Button with Notification Badge -->
    <label for="sidebar-toggle" class="icon-menu">  &#9776;</label>
        <section class="stats-overview">
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
                    <h3 class="card-title">inprocess Orders</h3>
                </div>
                <div class="card-content">
                    <p class="total">{{ $inprocessOrders }}</p>
                    <span class="separator">|</span>
                    <p class="report">In Number</p>
                </div>
            </div>

            <div class="stat-card">
                <div class="card-header">
                    <h3 class="card-title">Failed Orders</h3>
                </div>
                <div class="card-content">
                    <p class="total">{{$failorders}}</p>
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
                            <th>transaction ID</th>
                            <th>Service Type</th>
                            <th>price</th>
                            <th>customer Name</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>customer Area</th>
                            <th>Problem Address</th>
                            <th>Requirements</th>
                            <th>Execution Day</th>
                            <th>Status</th>
                            <th>Accept/Refuse</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($serviceRequests as $request)
                        <tr>
                        <td> #{{ $request->request_key }}</td>
                        <td> {{ $request->service }} ({{ $request->skill }})</td>
                        <td>{{ $request->price }}</td>
                        <td> {{ $request->name }}</td>
                        <td>
                           @if($request->accepted_provider_id == auth('provider')->id())
                             {{ $request->mobile }}
                          @else
                          <h3 style="color: rgb(58, 58, 212)" >Hidden</h3>
                          @endif
                       </td>
                        <td> {{ $request->email }}</td>
                        <td> {{ $request->area }}</td>
                        <td> {{ $request->address }}</td>
                        <td> {{ $request->requirements }}</td>
                        <td> {{ $request->execution_day }}</td>
                        <td>
                            @if($request->status === 'expired')
                            <span class="status Failed">Expired</span>
                          @elseif($request->accepted_provider_id)
                          @if($request->accepted_provider_id == auth('provider')->id())
                          <span class="status Accepted">Accepted</span>
                         @else
                         <span class="status completed">completed</span>
                       @endif
                      @else
                      <span class="status InProcess">Pending</span>
                    @endif
                     </td>
                     <td>
                        @if(!$request->accepted_provider_id && $request->status !== 'expired')
                            <form method="POST" action="{{ route('service-request.accept', $request->request_key) }}">
                               @csrf
                               <button type="submit" class=" status Accepted " style="background-color: rgb(4, 64, 4);color:white">Accept</button>
                            </form>
                        @endif
                       </td>
                         </tr>
                         @endforeach

                         @foreach($topproviderrequests as $request)
                         <td> #{{ $request->request_key }}</td>
                         <td> {{ $request->service }} ({{ $request->skill }}) <p style="color: rgb(70, 70, 236)"> as top provider</p></td>
                         <td>{{ $request->price }}</td>
                         <td> {{ $request->name }}</td>
                         <td>
                            @if($request->status === 'accepted')
                              {{ $request->mobile }}
                           @else
                           <h3 style="color: rgb(58, 58, 212)">Hidden</h3>
                           @endif
                        </td>
                         <td> {{ $request->email }}</td>
                         <td> {{ $request->area }}</td>
                         <td> {{ $request->Problem_Address }}</td>
                         <td> {{ $request->requirements }}</td>
                         <td> {{ $request->execution_day }}</td>
                         <td>
                           @if($request->status === 'refuced')
                           <span class="status Failed">Refused</span>
                           @endif
                           @if($request->status === 'accepted')
                           <span class="status Accepted">Accepted</span>
                           @endif
                           @if($request->status === 'pending')
                           <span class="status InProcess">pending</span>
                         @endif
                       </td>
                       <td>
                        @if( $request->status === 'pending')
                            <div style="display: flex; gap: 10px;">
                            <form method="POST" action="{{ route('service-toprequest.accept', $request->request_key) }}">
                               @csrf
                               <button type="submit" class="status Accepted" style="background-color: rgb(4, 64, 4);color:white">Accept</button>
                            </form>
                            <form method="POST" action="{{ route('service-toprequest.refuce', $request->request_key) }}">
                               @csrf
                               <button type="submit" class="status Failed" style="background-color:rgb(194, 23, 23);color:white">Refuse</button>
                            </form>
                            </div>
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
