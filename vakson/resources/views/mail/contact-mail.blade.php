<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Email</title>
</head>
<body>

    <p style="height:30px;line-height:50px;font-size:15px">{{ $mailData['subject'] }}</p>

    <div>
        <span>Name: </span>
        <span>{{ $mailData['name'] }}</span>
    </div>

    <div>
        <span>Email: </span>
        <span>{{ $mailData['email'] }}</span>
    </div>

    <div>
        <span>Phone: </span>
        <span>{{ $mailData['phone'] }}</span>
    </div>

    <div>
        <p>Message: </p>
        <p>{{ $mailData['message'] }}</p>
    </div>

    <div>
        <em style="color: #666666;font-size: 12px">{{ $mailData['agree'] }}</em>
    </div>

</body>
</html>
