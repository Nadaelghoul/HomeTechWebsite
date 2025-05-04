<!DOCTYPE html>
<html>
<head>
    <title>No Response to Your Service Request</title>
</head>
<body>
    <h2>Dear Customer,</h2>

    <p>Unfortunately, no service provider has accepted your request ,they may be inavaliable for your requirements at that time.</p>

    <p>Here are your request details:</p>

    <ul>
        <li><strong>Request ID:</strong> {{ $serviceRequest->request_key }}</li>
        <li><strong>Service:</strong> {{ $serviceRequest->service }}({{ $serviceRequest->skill }})</li>
    </ul>

    <p>You may try sending your request again to find an available provider.</p>

    <p>Thank you for using our website.</p>

    <p>Best regards,</p>
    <p><strong>HomeTech website Team</strong></p>
</body>
</html>
