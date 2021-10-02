<?php
if($_POST){
    require('fpdf/fpdf.php');
    $name = $_POST['name'];
    $da = $_POST['da'];
    $mail = $_POST['mail'];
    $title = 'Donation Recipt';

    $pdf = new FPDF();
    $pdf -> AddPage();
    $pdf->SetTitle($title);
    $pdf->SetFont('Arial','B',15);
    $w = $pdf->GetStringWidth($title)+6;
    $pdf->SetX((210-$w)/2);
    $pdf->SetDrawColor(221,221,221,1);
    $pdf->SetFillColor(10,158,0,1);
    $pdf->SetTextColor(255,255,255,1);
    $pdf->SetLineWidth(1);
    $pdf->Cell($w, 9, $title, 1, 1, 'C', true);
    $pdf->Ln(10);

    $pdf->SetTextColor(0,0,0,1);
    $w = $pdf->GetStringWidth($mail)+6;
    $pdf->SetX((170-$w)/2);
    $pdf->Cell(80, 40, 'Name:', 1, 0, 'C');
    $pdf->Cell($w, 40, $name, 1, 1, 'C');

    $pdf->SetX((170-$w)/2);
    $pdf->Cell(80, 40, 'Donation Amount:', 1, 0, 'C');
    $pdf->Cell($w, 40, $da, 1, 1, 'C');

    $pdf->SetX((170-$w)/2);
    $pdf->Cell(80, 40, 'Email:', 1, 0, 'C');
    $pdf->Cell($w, 40, $mail, 1, 1, 'C');
    $pdf->Output();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create PDF using PHP</title>
    <link rel="stylesheet" href="spyware.css">
</head>
<body link="red">
    <div class="regbox">
        <h1> Donation Details</h1><br>
        <div class="body">
            <form action='' method="POST">
                <input type="text" name="name" placeholder="Name" required>
                <input type="text" name="da" placeholder="Donation Amount" required>
                <input type="text" name="mail" placeholder="Email" required>
                <input type="submit" value="Donate">
            </form>
        </div>
        <div class="footer">
            <p>Planting trees is a legacy for yourself, a loved one, and the planet. Each ring on your tree stands for another year where you made a difference.</p>
            <p>With the help of your donation We plant the right trees in the right places to safeguard biodiversity, protect nature, and fight climate change.</p>
        <br>
        <li><a href="home1.php"> HOME </a></li>
        </div>
    </div>
    
</body>
</html>