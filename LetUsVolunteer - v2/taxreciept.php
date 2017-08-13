<?php
    $ngoname = 'Drishti';$ngoid = '12T545';
    $volname = 'Ankit Shaw';
    $total = 25000;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Certificate</title>
    <style>
        h1{

        }
    </style>
    </head>
<body>

        <div id ="print" style="width:800px; height:430px; padding:20px; text-align:center; border: 10px solid #787878">
            <div style="width:750px; height:380px; padding:20px; text-align:center; border: 5px solid #787878"><br><br>
           <span style="font-size:35px; font-weight:bold"><?php echo $ngoname ?></span><br>
           <span style="font-size:20px; font-weight:bold">Registed Under Society's Registration ACT XXI of 1860. NGO ID <?php echo $ngoid ?></span>
           <br><br><br><br>
           <span style="font-size:40px; font-weight:bold">Tax Reciept</span>
           <br><br><br><br>
            <span style="font-size:15px text-align:left">Annual Amount: <?php echo $total ?></span><br>
           <span style="font-size:15px text-align:left">Date: </span><br>
              
            <span style="font-size:15px">Name / Organization: <?php echo $volname ?></span><br/>
            <span style="font-size:15px">Address: </span> <br/>
            <span style="font-size:15px">City: </span> <br/>
            <span style="font-size:15px">Phone: </span> <br/>

            <p>Donations are except U/S 35AC of the I.T Act, 1961.</p>
            </div>
          

    </div>
    <script>
    var printContents = document.getElementById('print').innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

        window.print();
        document.body.innerHTML = originalContents;
        </script>
    <!-- <input type="button" onclick="printDiv('print')" value="print a div!" /> -->
</body>
</html>