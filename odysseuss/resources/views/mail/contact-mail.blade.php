<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OZON Pharma Contact Email</title>
</head>
<body>

    <p style="height:30px;line-height:50px;font-size:15px">{{ $mailData['subject'] }}</p>

    <table border="0" cellpadding="0" cellspacing="0" style="background-color: #FFF;width: 50%;">
        <tr>
            <td style="border:solid 1px #DDD;width: 50%;height:40px;padding: 0 10px;">Name</td>
            <td style="border:solid 1px #DDD;width: 50%;height:40px;padding: 0 10px;">{{ $mailData['name'] }}</td>
        </tr>
        <tr>
            <td style="border:solid 1px #DDD;width: 50%;height:40px;padding: 0 10px;">Email</td>
            <td style="border:solid 1px #DDD;width: 50%;height:40px;padding: 0 10px;">{{ $mailData['email'] }}</td>
        </tr>
        <tr>
            <td style="border:solid 1px #DDD;width: 50%;height:40px;padding: 0 10px;">Message</td>
            <td style="border:solid 1px #DDD;width: 50%;height:40px;padding: 0 10px;">{{ $mailData['message'] }}</td>
        </tr>
    </table>

</body>
</html>
