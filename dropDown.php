<?php
require("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management System</title>
    <link rel="stylesheet" href="css/style.css">
    <!--google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Ubuntu&display=swap"
        rel="stylesheet">
</head>

<body>
    <table cellspacing="10px">
        <tr>

            <td><img class="small-logo" src="images/bsptcl-logo.png" alt="heading-logo"></td>
            <td>
                <h1 class="big-heading">INVENTORY MANAGEMENT SYSTEM</h1>
            </td>

        </tr>
    </table>
    <div class="container">

        <form action="" name="myform" id="myForm" method="POST">
            <div class="f-group">
                <label for="">Circle:</label>
                <select name="optone" id="circleSel" size="1">
                    <option value="" selected="selected">-- Choose Circle --</option>
                </select>
            </div>

            <div class="f-group">

                <label for="">Division:</label>
                <select name="opttwo" id="divisionSel" size="1">
                    <option value="" selected="selected">-- Choose Division --</option>
                </select>
            </div>

            <div class="f-group">

                <label for="">GSS:</label>
                <select name="optthree" id="gssSel" size="1">
                    <option value="" selected="selected">-- Choose GSS --</option>
                </select>
            </div>
            <div class="f-group">
                <label for="password">Password:</label>
                <input type="text" id="password" name="password" class="form-control" placeholder="Password" />
            </div>
            
            <div>

                <input type="submit" name="login-submit" id="login-submit" class="form-control btn btn-info"
                    value="Submit" />
                <input type="reset" name="reset" id="reset" class="form-control btn btn-info"
                    value="Reset" />
            </div>   
          
        </form>
    </div>


    <script>

        var circleObject = {
            "patna (East)": {
                "Patna (East)": ["Katra", "Gaurichak", "Masurhi", "Gaighat", "Mithapur"],
                "barh": ["Barh (Old)", "Hathidah", "Fatuha", "Baktiyarpur"],
            },
            "Patna (West)": {
                "Patna(West)": ["Bihta (Old)", "Bihta (New)", "Khagaul", "Paliganj"],
                "Patna (central)": ["Jakkanpur", "Karbigahiya", "Board Colony(U/C)", "Digha(Old)", "Digha (New)"],
            },
            "Dehri On Sone": {
                "Dehri On Sone": ["Dehri On Sone", "Banjari", "Bikramganj", "Sasaram", "Kepra(U/C)", "Kochas"],
                "Aurangabad": ["Aurangabad", "Goh", "Sonenagar", "Rafiganj"],
            },

            "Bhojpur": {
                "Arrah": ["Arrah", "Buxar", "Jagdishpur", "Piro", "Dumrao"],
                "Mohania": ["Karamnasa", "Karamnasa(U/C)", "Ramgarh", "Bhabua", "Kudra", "Pusauli", "Mohania"],
            },
            "Gaya": {
                "Gaya": ["Bodhgaya", "Sherghati", "Wazirganj", "Imamganj", "Chandauti", "Belaganj", "Tekari"],
                "Jehanabad": ["Jehanabad", "Tehta", "Hulasganj", "Ataula"],
            },
            "Biharshariff": {
                "Biharshariff": ["Biharshariff", "Nalanda", "Ekangasarai", "Harnaut", "Bariphari", "Ashthwan"],
                "Nawada": ["Nawada", "Warsaliganj", "Rajgir", "Sheikpura"],
            },

            "Bhagalpur": {
                "Bhagalpur": ["Sabour", "Sultanganj", "Kahalgaon", "Nathnagar *", "Banka", "Banka(New)", "Naugachia"],

            },
            "Begusarai": {
                "Begusarai": ["Begusarai", "Balia", "Manjhaul", "Teghra", "132 Khagaria", "220 Khagaria", "Bakhri"],
                "Munger": ["Jamalpur", "Trapur", "Jamui", "Jamui (New)", "Lakhisarai"],
            },
            "Purnia": {
                "Purnia": ["Purnia", "Dhamdaha", "Banmankhi", "Barsoi", "Manihari", "Korha", "Katihar", "Baisi"],
                "Kishanganj": ["220 Kishanganj", "132 Kishanganj", "Thakurganj", "Forbesganj", "Araria", "Palasi"]
            },
            "Muzaffarpur": {
                "Muzaffarpur": ["Muzaffarpur", "SKMCH", "Motipur", "Musahari"],
                "Sitamarhi": ["Sitamarhi", "Runni Saidpur", "Belsand", "Pupri", "Sheohar"],
            },
            "Vaishali": {
                "Hajipur": ["220 Hajipur", "132 Hajipur", "Vaishali", "Jandaha", "Mahnar", "Garoul"],
                "Samastipur": ["Samastipur 220", "Samastipur", "Shahpurpatori", "Dalsinghsarai", "Rosera", "Tajpur"],
            },
            "Darbhanga": {
                "Darbhanga": ["220 Darbhanga", "132 Darbhanga", "Gangwara", "Kusheswarsthan", "Benipur"],
                "Madhubani": ["Madhubani", "Pandaul", "Jainagar", "Benipatti", "Phulparas", "Jahnjharpur", "Laukahi"],
            },
            "Motihari": {
                "Motihari": ["Motihari", "Dhaka", "Pakridayal", "Chakiya", "Raxaul (New)", "Areraj", "Raxaul"],
                "Bettiah": ["Bettiah", "Ramnagar", "Narkatiyaganj", "Thakraha", "Hydel Valmikinagar"],

            },
            "Chapra": {
                "Chapra": ["Chapra", "Sheetalpur", "Musrakh", "Ekma"],
                "Gopalganj": ["Gopalganj", "Hatuha", "Siwan", "Siwan (New)", "Maharajganj"],
            },
            "Madhepura": {
                "Madhepura": ["Madhepura", "Uda Kishunganj", "Saharsa", "Sone barsa", "Simri Baktiyarpur"],
                "Birpur": ["Raghopur (New)", "132 Supaul", "Kataiya", "Nirmali", "Triveniganj"],
            },
        }
        window.onload = function () {
            var circleSel = document.getElementById("circleSel"),
                divisionSel = document.getElementById("divisionSel"),
                gssSel = document.getElementById("gssSel");
            for (var circle in circleObject) {
                circleSel.options[circleSel.options.length] = new Option(circle, circle);
            }
            circleSel.onchange = function () {
                divisionSel.length = 1; // remove all options bar first
                gssSel.length = 1; // remove all options bar first
                if (this.selectedIndex < 1) return; // done   
                for (var division in circleObject[this.value]) {
                    divisionSel.options[divisionSel.options.length] = new Option(division, division);
                }
            }
            circleSel.onchange(); // reset in case page is reloaded
            divisionSel.onchange = function () {
                gssSel.length = 1; // remove all options bar first
                if (this.selectedIndex < 1) return; // done   
                var gss = circleObject[circleSel.value][this.value];
                for (var i = 0; i < gss.length; i++) {
                    gssSel.options[gssSel.options.length] = new Option(gss[i], gss[i]);
                }
            }

        }

    </script>

<?php
if(isset($_POST['login-submit']))
{
    $querry="SELECT * FROM `admin_login` WHERE `Admin_Password`='$_POST[password]'";
    $result=mysqli_query($con,$querry);
    if(mysqli_num_rows($result)==1){
        // session_start();
        // header("location: meaters.php");
        echo "<script> location.href='meaters.php'; </script>";
        // exit;
    }
    else{
        echo"<script>alert('Incorrect Password');</script>";
    }
}
?>
</body>

</html>