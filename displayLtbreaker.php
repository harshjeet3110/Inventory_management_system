
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management System</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Ubuntu&display=swap" rel="stylesheet">

</head>
<body>
    <header class="header">
        <div class="logo">
            <img src="images/bsptcl-logo.png" alt="">
        </div>
        <div class="heading">
            <h1>INVENTORY MANAGEMENT SYSTEM</h1>
        </div>
    </header>

    <div class="container">

        <form action="displayLtbreaker.php"method="post" name="myform" id="myForm">
            <div class="f-group">
               <label for="">Circle:</label>  
                <select name="optone" id="circleSel" size="1">
                    <option value="" selected="selected"> Choose Circle </option>
                </select>
            </div>

            <div class="f-group">

               <label for="">Division:</label>  
                <select name="opttwo" id="divisionSel" size="1">
                    <option value="" selected="selected"> Choose Division </option>
                </select>
            </div>

            <div class="f-group">

               <label for="">GSS:</label>  
                <select name="optthree" id="gssSel" size="1">
                    <option value="" selected="selected"> Choose GSS </option>
                </select>
            </div>
          <!-- <div class="f-group">
                <label for="Component">Component:</label>
                <input type="text" id="password" name="password" class="form-control" placeholder="Password" />
            </div> -->
        
        
        <form action="displayLtbreaker.php" method="post">  
            <div class="f-group">
          <label for="components">Components:</label>
          <select id="components" name="components"onChange="SelectRedirect();">
            <option value =""> Select Component </option>
            
            <option value="Meters">Meters</option>
            
            <option value="Transformer">Transformer</option>
       
            <option value="HT Breaker" >HT Breaker </option>
            <option value="LT Breaker">LT Breaker</option>
            <option value="Towers/Poles">Towers/Poles</option>
            <!-- <option value="all">All</option> -->
          </select>
          </div>
       
            <div>
                

                <input type="submit" name="login-submit" id="login-submit" class="btn-g"
                    value="Submit" />
                    <!--
               <input type="reset" name="reset" id="reset" class="form-control btn btn-info"
                    value="Reset" />  -->
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
        function SelectRedirect(){
// ON selection of section this function will work
//alert( document.getElementById('components').value);

switch(document.getElementById('components').value)
{
case "Meters":
window.location="displayMeater.php";
break;

case "Transformer":
window.location="displayTransformer.php";
break;

case "HT Breaker":
window.location="displayHtbreaker.php";
break;
case "LT Breaker":
window.location="displayLtbreaker.php";
break;

case "Towers/Poles":
window.location="displayTowers.php";
break;

/// Can be extended to other different selections of SubCategory //////
default:
window.location="displayMeater.php"; // if no selection matches then redirected to home page
break;
}// end of switch 
}

    </script>
<div class="whole-table">
<table class="content-table" >
<thead>
<tr>

<th>   Type   </th>
                <th>   Make   </th>
                <th>   Manufacturing year    </th>
                <th>   Serial No.   </th>
                <th>   Capacity   </th>
                <th>   Energization Date   </th>
                <th>   Warranty   </th>
                </tr>
                <?php
 $server = "localhost";
 $username = "root";
 $password = "";
 $database="ltbreaker";
 //create a connection
 $con = mysqli_connect($server,$username,$password,$database);
 
 if(!$con)
 {
     die("Sorry we failed to connect:".mysqli_connect_error());
    }
    else{
        // echo"Connection was sucessful<br>";
    }
    $sql="SELECT * FROM `ltbreaker`";
    $result = mysqli_query($con,$sql);
    //Find the number of records returned
    $num=mysqli_num_rows($result);
    // echo $num;
    echo "<br>";
    //display the rows return by sql
    if($num>0){
        
        while($row=mysqli_fetch_assoc($result)){
            // echo var_dump($row);
            // echo $row['Type'] ." ". $row['Make'] ." ". $row['ManufacturingYear'] ." ". $row['SerialNumber'] ." ". $row['Capacity']." ".$row['EnergizationDate']." ".$row['Warranty'];
            // echo "<br>";
            echo"
            <tr>
            <td>".$row['Type'] ."</td>
            <td>".$row['Make'] ."</td>
            <td>".$row['ManufacturingYear'] ."</td>
            <td>".$row['SerialNumber'] ."</td>
            <td>".$row['Capacity'] ."</td>
            <td>".$row['EnergizationDate'] ."</td>
            <td>".$row['Warranty'] ."</td>
            ";
        }
    }
    ?>
        </thead>
        </table>
        </div>
        
</body>
</html>
