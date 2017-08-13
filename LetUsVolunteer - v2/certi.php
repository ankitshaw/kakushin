<?php
    $ngoname = 'Drishti';$ngoid = '12T545';
    $volname = 'Ankit Shaw'
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

        <div id ="print" style="width:800px; height:600px; padding:20px; text-align:center; border: 10px solid #787878">
            <div style="width:750px; height:550px; padding:20px; text-align:center; border: 5px solid #787878"><br><br>
           <span style="font-size:35px; font-weight:bold"><?php echo $ngoname ?></span><br>
           <span style="font-size:20px; font-weight:bold">Registed Under Society's Registration ACT XXI of 1860. NGO ID <?php echo $ngoid ?></span>
           <br><br><br><br>
           <span style="font-size:60px; font-weight:bold">Certificate</span>
           <br><br><br><br>
           <span style="font-size:25px"><i>This is to certify that</i></span>
           <br><br>
           <span style="font-size:30px"><b><?php echo $volname ?></b></span><br/><br/>
           <span style="font-size:25px"><i>has worked at <?php echo $ngoname ?></i></span> <br/><br/>
           <span style="font-size:30px">as a Volunteer.</span> <br/><br/>
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