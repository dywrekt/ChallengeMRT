<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "maychallenge";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id_hondenvoer, productnaam, omschrijving, prijs FROM hondenvoer";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table>
<tr>
<th>id_hondenvoer</th>
<th>productnaam</th>
<th>omschrijving</th>
<th>prijs</th>
</tr>";
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id_hondenvoer"] . "</td><td>" . $row["productnaam"] . " </td><td>" . $row["omschrijving"] . $row["prijs"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Productpagina</title>
    <style>

        *{
            margin:0;
            padding:0;
        }


        .houder {
            display:flex;
            margin:20px auto;
            width:800px;
        }

        .blok {
            font-family: sans-serif;
            flex:1;
        }


        .product {
            height:140px;
            width:400px;
            text-align: right;
            line-height: 120%;
        }

        .product h4 {
            margin-bottom: 8px;
        }


        .product img{
            float: right;
            width:130px;

        }


        .product.droge-brokken-product {
            text-align: left;
        }

        .product.droge-brokken-product img {
            float: left;
            width:200px;
        }


        .reclame {
            padding-top: 200px;
        }

        .reclame h4 {
            margin-bottom: 30px;
            text-align: center;

        }

        .reclame img {
            width:220px;
            padding-left: 65px;
        }


    </style>
</head>
<body>
<main>

    <div class="houder">
        <section class="producten blok">

            <div class="product natte-brokken-product">
                <img src="nat.jpg" alt="natvoer"/>
                <h4>Natte brokken</h4>
                <p><span>Het allerbeste voor uw hond. Holistisch en biologisch natvoer.</span><br/><span>Prijs:€5,-</span></p>

            </div>
            <div class="product droge-brokken-product">
                <img src="droog.jpg" alt="droogvoer"/>
                <h4>Droge brokken</h4>
                <p><span>Als aanvulling op de natte maaltijd van uw hond.</span><br/><span>Prijs:€2,50</span></p>

            </div>
            <div class="product vitamines-product">
                <img src="vitamines.jpg" alt="vitamines"/>
                <h4>Vitamines</h4>
                <p><span>Ook honden houden kunnen soms extra supplementen gebruiken.</span><br/><span>Prijs:€1,-</span></p>

            </div>
        </section>
        <section class="reclame blok">
            <h4>Binnenkort verkrijgbaar:</h4>
            <img src="binnenkort.jpg" alt="Binnenkort verkrijgbaar"/>
        </section>
    </div>
</main>


</body>
</html>
