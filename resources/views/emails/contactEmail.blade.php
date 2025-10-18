<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Contact Message</title>
</head>
<body style="font-family: Arial, sans-serif; background: #f7f7f7; margin: 0; padding: 0;">
    <table width="100%" cellspacing="0" cellpadding="0" style="padding: 20px;">
        <tr>
            <td>
                <table width="600" cellpadding="0" cellspacing="0" align="center" style="background: #ffffff; border-radius: 8px; overflow: hidden;">
                    <tr>
                        <td style="background: #007bff; color: #ffffff; padding: 20px; text-align: center;">
                            <h2 style="margin: 0; font-size: 22px;">New Contact Request</h2>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 20px; color: #333;">
                            <p style="margin: 0 0 15px;">You have received a new message from your website contact form.</p>

                            <table width="100%" cellpadding="5" cellspacing="0" style="border-collapse: collapse;">
                                <tr>
                                    <td style="font-weight: bold; width: 150px;">Name:</td>
                                    <td>{{ $data['name'] }}</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;">Email:</td>
                                    <td>{{ $data['email'] }}</td>
                                </tr>
                                @if(!empty($data['phone']))
                                <tr>
                                    <td style="font-weight: bold;">Phone:</td>
                                    <td>{{ $data['phone'] }}</td>
                                </tr>
                                @endif
                                @if(!empty($data['service']))
                                <tr>
                                    <td style="font-weight: bold;">Service:</td>
                                    <td>{{ $data['service'] }}</td>
                                </tr>
                                @endif
                                <tr>
                                    <td style="font-weight: bold; vertical-align: top;">Message:</td>
                                    <td>{{ $data['message'] }}</td>
                                </tr>
                            </table>

                            <p style="margin-top: 30px; font-size: 13px; color: #777;">This message was sent automatically from your website.</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="background: #f0f0f0; padding: 15px; text-align: center; font-size: 12px; color: #555;">
                            &copy; {{ date('Y') }} Your Website Name
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
