<!DOCTYPE html>
<html lang="en">

<?php 
require_once 'assets/includes/pdo.php';
if (!isset($_GET['i'])) {
    header("location:index.php");
}
$certificate = $pdo->read("charactercertificate", ['user_id' => $_GET['i']]);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Character Certificate</title>
    <style>
    body {
        font-family: 'Montserrat', sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .certificate-container {
        width: 900px;
        background: #fff;
        padding: 40px;
        border-radius: 20px;
        box-shadow: 0 0 30px rgba(0, 0, 0, 0.2);
        position: relative;
        page-break-inside: avoid;
    }

    .certificate-border {
        border: 15px double #444;
        padding: 30px;
        border-radius: 20px;
        background-color: rgba(255, 255, 255, 0.95);
        /* Slightly transparent white background */
        position: relative;
        z-index: 1;
        background-image: url('https://www.transparenttextures.com/patterns/diamond-upholstery.png');
    }

    .certificate-header {
        text-align: center;
        margin-bottom: 30px;
        position: relative;
    }

    .certificate-header .logo {
        position: absolute;
        top: -70px;
        left: 50%;
        transform: translateX(-50%);
        width: 100px;
        height: 100px;
        background: #fff;
        border-radius: 50%;
        padding: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .certificate-header .logo img {
        width: 100%;
        height: auto;
    }

    .certificate-header h1 {
        margin: 0;
        font-size: 3em;
        color: #444;
        text-transform: uppercase;
        letter-spacing: 3px;
        font-family: 'Great Vibes', cursive;
    }

    .certificate-body {
        margin-bottom: 30px;
        line-height: 1.8;
        font-size: 1.2em;
        text-align: center;
        position: relative;
    }

    .certificate-body::before,
    .certificate-body::after {
        content: '';
        position: absolute;
        width: 60%;
        height: 1px;
        background: #444;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: -1;
    }

    .certificate-body::before {
        top: 25%;
    }

    .certificate-body::after {
        top: 75%;
    }

    .certificate-body h2,
    .certificate-body h3 {
        margin: 15px 0;
        color: #555;
        font-style: italic;
        font-family: 'Great Vibes', cursive;
    }

    .certificate-footer {
        font-size: 1.1em;
        display: flex;
        justify-content: space-between;
        align-items: flex-end;
        position: relative;
    }

    .certificate-footer p {
        margin: 5px 0;
    }

    .certificate-footer .signature {
        text-align: right;
        font-style: italic;
    }

    .certificate-footer .signature p {
        margin: 5px 0;
    }

    .certificate-footer .signature p:first-child {
        margin-bottom: 30px;
        border-top: 1px solid #333;
        display: inline-block;
        width: 200px;
        padding-top: 5px;
    }

    .certificate-footer .date-place p {
        text-align: left;
    }

    .certificate-container::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        border: 5px solid #444;
        border-radius: 20px;
        z-index: 0;
        pointer-events: none;
    }

    /* Watermark */
    .certificate-container::after {
        content: 'Certified';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 100px;
        color: rgba(0, 0, 0, 0.05);
        z-index: 0;
        pointer-events: none;
        white-space: nowrap;
    }

    /* Print styles */
    @media print {
        body {
            margin: 0;
            background: none;
            box-shadow: none;
        }

        .certificate-container {
            box-shadow: none;
            width: 100%;
            height: 100%;
            background: none;
            padding: 0;
            page-break-inside: avoid;
        }

        .certificate-border {
            border-width: 10px;
            padding: 30px;
            background-color: #fff;
        }

        .certificate-header .logo {
            display: none;
        }

        .certificate-container::before,
        .certificate-container::after {
            display: none;
        }
    }
    </style>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Montserrat:wght@400;600&display=swap">
</head>

<body>
    <div class="certificate-container">
        <div class="certificate-border">
            <div class="certificate-header">
                <div class="logo">
                    <img src="https://www.svgrepo.com/show/27447/certificate.svg" alt="Certificate Logo">
                </div>
                <h1>Character Certificate</h1>
            </div>
            <div class="certificate-body">
                <p>This is to certify that</p>
                <h2><?php echo $certificate[0]['full_name'] ?></h2>
                <!-- <p>son/daughter of</p>
                <h3>[Parent's Name]</h3> -->
                <p>has been known to me for the past <?php echo $certificate[0]['application_date'] ?> years/months and has always exhibited exemplary
                    character. During this period, they have shown a high level of integrity and responsibility.</p>
            </div>
            <div class="certificate-footer">
                <div class="date-place">
                    <p>Issued on: <span><?php echo $certificate[0]['certificate_issued_date'] ?></span></p>
                    <!-- <p>Place: <span>[Place]</span></p> -->
                </div>
                <div class="signature">
                    <p>Signature</p>
                    <p>Admin</p>
                    <p>Admin</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>