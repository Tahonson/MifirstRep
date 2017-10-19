<?php
//ЗАДАНИЕ №1
function task1()
{
    $file = 'data.xml';
    $xml = simplexml_load_string(file_get_contents($file));
    echo '<table border=\'2px\'><tr><td><h4>Purchase Order Number:</h4> </td><td>' . $xml['PurchaseOrderNumber'] . '</h4></td></tr><br>';
    echo '<td><h4>Date Order: </td><td>' . $xml['OrderDate'] . '</h4></td></tr><br></td></table>';
    foreach ($xml->Address as $address) {
        $str = sprintf('<div><h4>Address %s</h4>', $address['Type']);
        $str .= sprintf('<p>Name: %s<br> Street: %s<br>Street: %s %s %s<br>Country: %s</p>',
            $address->Name,
            $address->Street,
            $address->City,
            $address->State,
            $address->Zip,
            $address->Country);
        $str .= '</div>';
        echo $str;
    }
    $courier = sprintf('<b><h3>Delivery Notes:</h3> %s <br></b>', $xml->DeliveryNotes);
    $courier .= '<h2>Details</h2><br>';
    $courier .= '<table border=/"1px/">
    <tr>
        <th>Product Name</th>
        <th>Part Number</th>
        <th>Quantity</th>
        <th>US price</th>
        <th>Final price</th>
        <th>Ship Date</th>
        <th>Comments</th>
    </tr>';
    foreach ($xml->Items->Item as $item) {
        $courier .= sprintf(' <tr>
    <td>%s</td>
    <td>%s</td>
    <td>%s</td>
    <td>%s</td>
    <td>%s</td>
    <td>%s</td>
    <td>%s</td>
  </tr>',
            $item->ProductName,
            $item['PartNumber'],
            $item->Quantity,
            $item->USPrice,
            number_format((float)$item->Quantity * (float)$item->USPrice, 2),
            empty($item->ShipDate) ? 'No info' : $item->ShipDate,
            empty($item->Comment) ? 'No info' : $item->Comment
        );
    }
    $courier .= '</table>';
    echo $courier;

}

//ЗАДАНИЕ №2 ===================================///

function task2()
{
    $movies = array(
        array(
            "title" => "Rear Window",
            "director" => "Alfred Hitchcock",
            "year" => 1954
        ),
        array(
            "title" => "Full Metal Jacket",
            "director" => "Stanley Kubrick",
            "year" => 1987
        ),
        array(
            "title" => "Mean Streets",
            "director" => "Martin Scorsese",
            "year" => 1973
        )
    );
    file_put_contents('output.json', json_encode($movies));
    $new_movies = json_decode(file_get_contents('output.json', true), true);
    if (random_int(0, 1) === 1) {
        $new_movies [0]['year'] = rand(1800, 2017);
        $new_movies [1]['year'] = rand(1800, 2017);
        $new_movies [2]['year'] = rand(1800, 2017);
    }
    file_put_contents('output2.json', json_encode($new_movies));
    $output1 = json_decode(file_get_contents('output.json', true), true);

    $output2 = json_decode(file_get_contents('output2.json', true), true);

}

function task2_rev($movies, $new_movies)
{
    $res = [];
    foreach ($movies as $key => $value) {
    if (is_array($new_movies) and array_key_exists($key,$new_movies)) {
        if (is_array($value)) {

        }
    }
    }
}

echo task2();

