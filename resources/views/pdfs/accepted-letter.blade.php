<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Application PDF</title>
    <style>
        body {
            font-family: 'Times New Roman', serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            color: #000;
        }
        .header {
            text-align: center;
            margin-top: 20px;
        }
        .header img {
            max-width: 150px;
        }
        .content {
            margin: 40px 60px;
        }
        .content p {
            margin-bottom: 20px;
            text-align: justify;
        }
        .signature-section {
            margin-top: 60px;
            text-align: right;
            margin-right: 60px;
        }
        .signature-section img {
            max-width: 150px;
        }
        .footer {
            text-align: center;
            margin-top: 40px;
            font-style: italic;
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <div class="header">
        <img src="{{ public_path('storage/HomeImages/TPA.jpeg') }}" alt="Logo">
        <h1>Student Application Acceptance Letter</h1>
    </div>

    <!-- Content Section -->
    <div class="content">
        <p>Dear <strong>{{ $student->user->first_name }} {{ $student->user->last_name }}</strong>,</p>

        <p>We are pleased to inform you that your application to the <strong>{{ $student->user->department }}</strong> has been accepted. You are now officially part of our program, and we look forward to your contributions and active participation.</p>

        <p>This is an important step in your professional journey, and we believe that you will make the most of the opportunities presented to you. Our team is committed to supporting you as you navigate through your training and develop the skills necessary for your future career.</p>

        <p>Please make sure to attend the orientation session on the first day of your program. During this session, you will receive essential information about your schedule, assignments, and the resources available to you.</p>

        <p>We wish you success in your training and hope that you find this experience both rewarding and enriching.</p>
    </div>

    <!-- Signature Section -->
    <div class="signature-section">
        <p>Director of the {{ $student->user->position }}</p>
        <img src="{{ public_path('images/director_signature.png') }}" alt="Signature">
    </div>

    <!-- Footer Section -->
    <div class="footer">
        <p>Thank you for your application, and welcome to our program.</p>
        <p>If you have any questions, please do not hesitate to contact us.</p>
    </div>

</body>
</html>
