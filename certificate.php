<?php
include 'db_con.php';

if (isset($_GET['form_number']))
{
  $form_number = mysqli_real_escape_string($con, $_GET['form_number']);
  $query = mysqli_query($con, "SELECT * FROM registration_form WHERE form_number='$form_number' AND status='Approved'");
  $data = mysqli_fetch_assoc($query);

  if ($data)
  {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <title>CAWF - 80G Certificate</title>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

      <style>
        body {
          font-family: Arial, sans-serif;
          font-size: 14px;
          margin: 0;
          padding: 20px;
          background: #f5f5f5;
        }

        .container {
          max-width: 800px;
          margin: auto;
          padding: 20px 30px;
          background: white;
          border-radius: 8px;
          box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .header {
          text-align: center;
          margin-bottom: 10px;
        }

        .logo-img-top {
          display: flex;
          align-items: center;
          justify-content: center;
          gap: 20px;
          margin-top: 10px;
        }

        .header img {
          height: 80px;
          object-fit: contain;
        }

        .trust-name {
          color: #c38e63;
          font-size: 28px;
          font-weight: 700;
          letter-spacing: 1px;
        }

        hr.underline {
          border: none;
          border-bottom: 2px solid #c38e63;
          margin: 25px 0;
        }

        .info-bar {
          display: flex;
          justify-content: space-around;
          margin: 18px 0;
          font-weight: 600;
          color: #555;
          font-size: 15px;
        }

        table {
          width: 100%;
          border-collapse: collapse;
          margin-top: 20px;
          border: 1px solid #000;
        }

        th,
        td {
          padding: 10px 15px;
          text-align: left;
          border: 1px solid #000;
          vertical-align: middle;
          font-size: 14px;
        }

        .section-label {
          width: 120px;
          text-align: center;
          vertical-align: middle;
          position: relative;
          padding: 0;
          border: 1px solid #000;
          font-weight: 700;
          background-color: #f0e6d2;
        }

        .section-label span {
          display: inline-flex;
          transform: rotate(-90deg);
          transform-origin: left top;
          white-space: nowrap;
          font-weight: 700;
          position: absolute;
          top: 87%;
          /* left: -60px; */
          width: max-content;
          color: #c38e63;
        }

        .footer {
          margin-top: 35px;
          font-size: 13px;
          line-height: 1.5;
          color: #555;
          text-align: center;
        }

        .footer b {
          display: block;
          margin-top: 10px;
          color: #000;
        }

        .footer a {
          color: #c38e63;
          text-decoration: none;
          font-weight: 600;
        }

        .footer a:hover {
          text-decoration: underline;
        }

        /* Responsive */
        @media(max-width: 600px) {
          .logo-img-top {
            flex-direction: column;
            gap: 10px;
          }

          .section-label {
            width: 60px;
          }

          .section-label span {
            left: -30px;
          }
        }
      </style>
    </head>

    <body>
      <div class="container" id="idCertificate">
        <div class="header">
          <div><strong style="font-size: 22px;">80G Certificate</strong></div>
          <div class="logo-img-top">
            <img src="images/logo/cawf black.png" alt="CAWF Logo" />
            <div class="trust-name">Cine Artist & Worker Welfare Federation</div>
          </div>
        </div>

        <hr class="underline" />

        <div class="info-bar">
          <div>☎ +91 9555584040</div>
          <div>PAN: <span style="color: #F28C28;">AAKCC5661N</span></div>
          <div>📞 +91 9555584040</div>
        </div>

        <table>
          <tr>
            <td class="section-label" rowspan="7"><span>Donor Information</span></td>
            <td><b>Name</b></td>
            <td><?= htmlspecialchars($data['first_name']) ?></td>
          </tr>
          <tr>
            <td><b>PAN No  </b></td>
            <td><?= htmlspecialchars($data['pan_no']) ?></td>
          </tr>
          <tr>
            <td><b>Program</b></td>
            <td><?= htmlspecialchars($data['program_type']) ?></td>
          </tr>
          <tr>
            <td><b>Phone Number</b></td>
            <td><?= htmlspecialchars($data['phone']) ?></td>
          </tr>
          <tr>
            <td><b>Email</b></td>
            <td><?= htmlspecialchars($data['email']) ?></td>
          </tr>
          <tr>
            <td><b>Address</b></td>
            <td><?= nl2br(htmlspecialchars($data['address'])) ?></td>
          </tr>
          <tr>
            <td><b>Country</b></td>
            <td>India</td>
          </tr>

          <tr>
            <td class="section-label" rowspan="5"><span>Donation Information</span></td>
            <td><b>Date</b></td>
            <td><?= date('d-m-Y', strtotime($data['created_at'])) ?></td>
          </tr>
          <tr>
            <td><b>Payment Mode</b></td>
            <td>Online</td>
          </tr>
          <tr>
            <td><b>Donation for</b></td>
            <td>Registration for Lamaa</td>
          </tr>
          <tr>
            <td><b>Amount</b></td>
            <td>₹100 /-</td>
          </tr>
          <tr>
            <td><b>Amount in words</b></td>
            <td>One Hundred Rupees Only</td>
          </tr>
        </table>

        <div class="footer">
          <p><strong>Your grant is tax free under section 80G of the Income Tax Act 1961,</strong><br />
            The Unique Registration No. is DELHI/80G2020-21/A/20221 and valid from 25/10/2022
          </p>
          <hr class="underline" style="margin: 15px auto 25px auto;" />
          <p>
            Correspondence Address: <strong>Property No. C-13, Basement Shivalik Colony, Malviya Nagar South Delhi – 110017,
              India</strong>
          </p>
          <p>
            <strong>Website :</strong> <a href="https://cawf.in/" target="_blank"
              rel="noopener noreferrer">https://cawf.in/</a>
          </p>
          <p>
            <strong>Email us at:</strong> <a href="mailto:hello@cawf.in">hello@cawf.in</a>
          </p>
        </div>
      </div>

      <script>
        window.onload = function () {
          const element = document.getElementById('idCertificate');
          const opt = {
            margin: 0.5,
            filename: 'ID_Certificate_<?= htmlspecialchars($data['form_number']) ?>.pdf',
            image: { type: 'jpeg', quality: 0.98 },
            html2canvas: { scale: 2 },
            jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
          };
          html2pdf().from(element).set(opt).save();
        };
      </script>
    </body>

    </html>

    <?php
  } else
  {
    echo "<h3 style='text-align:center;margin-top:50px;color:#d9534f;'>❌ Invalid or Unapproved Form Number.</h3>";
  }
} else
{
  echo "<h3 style='text-align:center;margin-top:50px;color:#d9534f;'>❌ No Form Number Provided.</h3>";
}
?>