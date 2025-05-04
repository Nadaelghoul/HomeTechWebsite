<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Request Accepted</title>
</head>
<body>

    <p>Hello,</p>

    <p>Your request for <strong>{{ $service }} ({{ $skill }})</strong> has been accepted.</p>

    <h3> Service Provider Details:</h3>
    <p><strong>Name:</strong> {{ $providerName }}</p>
    <p><strong>Phone:</strong> {{ $providerPhone }}</p>

      <p>
        <img src="{{ $providerPhoto }}" alt="Provider Photo"
        style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover;">
      </p>

    <p>The provider will contact you soon to confirm the execution time.</p>

    <p>Best regards,<br>HomeTech website Team</p>
</body>
</html>
