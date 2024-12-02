<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }
        .container {
            margin: 0 auto;
            width: 100%;
        }
        h1 {
            text-align: center;
        }
        .content {
            margin-top: 30px;
        }
        .footer {
            text-align: center;
            font-size: 10px;
            position: fixed;
            bottom: 10px;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>User Details</h1>

        <div class="content">
            <p><strong>Name:</strong> {{ $user->name }}</p>
            <p><strong>Reg. Number:</strong> {{ $user->reg_number }}</p>
            <p><strong>Date of Registration:</strong> {{ $user->date_of_registration }}</p>
            <p><strong>Allergy Information:</strong> {{ $user->allergy_information }}</p>
            <p><strong>Additional Information:</strong> {!! nl2br(e($user->additional_information)) !!}</p>
        </div>
        <div class="footer">
            Page {PAGE_NUM} of {PAGE_COUNT}
        </div>
    </div>
</body>
</html>
