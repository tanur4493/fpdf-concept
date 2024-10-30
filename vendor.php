<?php
require '../mainadmin/includes/db.php';
require('../fpdf/fpdf/fpdf.php'); // Include FPDF

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$output = array('success' => false);

// Validate and sanitize input
$name = isset($_POST['name']) ? mysqli_real_escape_string($con, $_POST['name']) : '';
$date = isset($_POST['date']) ? mysqli_real_escape_string($con, $_POST['date']) : '';
$bname = isset($_POST['bname']) ? mysqli_real_escape_string($con, $_POST['bname']) : '';
$phone = isset($_POST['phone']) ? mysqli_real_escape_string($con, $_POST['phone']) : '';
$address = isset($_POST['address']) ? mysqli_real_escape_string($con, $_POST['address']) : '';
$state = isset($_POST['state']) ? mysqli_real_escape_string($con, $_POST['state']) : '';
$zip = isset($_POST['zip']) ? mysqli_real_escape_string($con, $_POST['zip']) : '';
$cname = isset($_POST['cname']) ? mysqli_real_escape_string($con, $_POST['cname']) : '';
$phoneb = isset($_POST['phoneb']) ? mysqli_real_escape_string($con, $_POST['phoneb']) : '';
$referred = isset($_POST['referred']) ? mysqli_real_escape_string($con, $_POST['referred']) : '';
$dateb = isset($_POST['dateb']) ? mysqli_real_escape_string($con, $_POST['dateb']) : '';
$accepted = isset($_POST['accepted']) ? mysqli_real_escape_string($con, $_POST['accepted']) : '';

// Prepare and execute the query
$qry_subCat = mysqli_query($con, "INSERT INTO `vendor` (`vendor`, `showdate`, `bussiness`, `phone`, `address`, `state`, `zip`, `candidate`, `phoneb`, `referred`, `date`, `accepted`) VALUES ('$name', '$date', '$bname', '$phone', '$address', '$state', '$zip', '$cname', '$phoneb', '$referred', '$dateb', '$accepted')");

if ($qry_subCat) {
    $output['success'] = true;

  // Create a new PDF
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 16);

    // Title section
    $pdf->Cell(0, 10, 'Global Fashions, LLC.', 0, 1, 'C');
    $pdf->Ln(5);
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(0, 10, 'INTERNATIONAL GIFTS & CRAFTS SHOW REFERRAL FORM', 0, 1, 'C');
    $pdf->Ln(5);

    // Referral Incentives
    $pdf->SetFont('Arial', '', 12);
    $pdf->MultiCell(0, 10, "Referral Policy: Spread the word, bring other vendors to participate in our Crafts Show. For every new paid vendor participating for the first time, Global Fashions offers a referral incentive for both the new & old vendor from the space rental fee.");
    $pdf->Ln(5);
    $pdf->Cell(0, 10, '1 Vendor: $30 off, 2 Vendors: $60 off, 3 Vendors: $90 off, 4 Vendors: $120 off', 0, 1);

    // Vendor Information Header
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(0, 10, 'VENDOR INFORMATION', 1, 1, 'C');
    $pdf->SetFont('Arial', '', 12);

    // Vendor Information Fields
    $pdf->Cell(50, 10, 'Vendor Name:', 1);
    $pdf->Cell(0, 10, $name, 1, 1);

    $pdf->Cell(50, 10, 'Show Date:', 1);
    $pdf->Cell(0, 10, $date, 1, 1);

    $pdf->Cell(50, 10, 'Business Name:', 1);
    $pdf->Cell(0, 10, $bname, 1, 1);

    $pdf->Cell(50, 10, 'Phone:', 1);
    $pdf->Cell(0, 10, $phone, 1, 1);

    $pdf->Cell(50, 10, 'Address:', 1);
    $pdf->Cell(0, 10, $address, 1, 1);

    $pdf->Cell(50, 10, 'State:', 1);
    $pdf->Cell(50, 10, $state, 1);
    $pdf->Cell(50, 10, 'Zip:', 1);
    $pdf->Cell(0, 10, $zip, 1, 1);

    $pdf->Cell(50, 10, 'Candidate Name:', 1);
    $pdf->Cell(0, 10, $cname, 1, 1);

    $pdf->Cell(50, 10, 'Candidate Phone:', 1);
    $pdf->Cell(0, 10, $phoneb, 1, 1);

    $pdf->Cell(50, 10, 'Referred By:', 1);
    $pdf->Cell(0, 10, $referred, 1, 1);

    $pdf->Cell(50, 10, 'Date of Referral:', 1);
    $pdf->Cell(0, 10, $dateb, 1, 1);

    $pdf->Cell(50, 10, 'Accepted By:', 1);
    $pdf->Cell(0, 10, $accepted, 1, 1);

    // Save the PDF to a temporary file
    $pdfFile = tempnam(sys_get_temp_dir(), 'form_') . '.pdf';
    $pdf->Output('F', $pdfFile);
  
    // Send Email
    $to = 'tanur4493@gmail.com';
    $subject = 'Vendor Form !';
    $headers = "From: sales@desidhabalv.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary=\"boundary\"\r\n";

    $message = '
    <html>
    <head>
        <title>Vendor Form!</title>
    </head>
    <body>
        <p>Vendor Form </p>
        <table>
            <tr><td>Name:</td><td>' . $name . '</td></tr>
            <tr><td> Show Date:</td><td>' . $date . '</td></tr>
            <tr><td>Bussiness:</td><td>' . $bname . '</td></tr>
            <tr><td>Phone Number:</td><td>' . $phone . '</td></tr>
            <tr><td>Address:</td><td>' . $address . '</td></tr>
            <tr><td>State:</td><td>' . $state . '</td></tr>
            <tr><td>Zip:</td><td>' . $zip . '</td></tr>
             <tr><td>Candidate:</td><td>' . $cname . '</td></tr>
              <tr><td>Phone:</td><td>' . $phoneb. '</td></tr>
               <tr><td>Referred By:</td><td>' . $referred. '</td></tr>
                <tr><td>Date:</td><td>' . $dateb. '</td></tr>
                 <tr><td>Accepted By:</td><td>' . $accepted. '</td></tr>
              
              
             
        </table>
    </body>
    </html>';
    
    // Prepare vendor-specific PDF filename
$pdfFileName = strtolower(str_replace(' ', '_', $vendor)) . '_submission.pdf';

    // Prepare email body
    $body = "--boundary\r\n";
    $body .= "Content-Type: text/html; charset=UTF-8\r\n";
    $body .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    $body .= $message . "\r\n";
    $body .= "--boundary\r\n";
    $body .= "Content-Type: application/pdf; name=\"{$pdfFileName}\"\r\n";
    $body .= "Content-Disposition: attachment; filename=\"{$pdfFileName}\"\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
    $body .= chunk_split(base64_encode(file_get_contents($pdfFile))) . "\r\n";
    $body .= "--boundary--";

    if (!mail($to, $subject, $body, $headers)) {
        error_log('Email could not be sent.');
    }

    unlink($pdfFile); // Clean up temporary files
} else {
    error_log('Database query failed: ' . mysqli_error($con));
}

echo json_encode($output);
?>
