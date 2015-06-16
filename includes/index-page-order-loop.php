<?php
$titles = array('42ND DIVISION Reconnaissance Battalion', '1ST ARMOURED DIVISION Commander Royal Engineers', '3RD INFANTRY BRIGADE Anti-tank Company', '1ST BATTALION Somerset Light Infantry', 'NAVY Medal card of Seddon, J Corps');
$formats = array('Record copy', 'Digital download', 'Naturalisation certificate');
$statuses = array('Page check in progress', 'Page check successful', 'Page check cancelled', 'Record copying order in progress', 'Record copying order complete and dispatched');
$digStatuses = array('Digital copy ready to download', 'Digital copy download expired');
$customerInst = array('Looking for information related to John Smith from...', 'Locating any information related to Jane Smith from...', 'Looking for specific information related to...', 'Between dates March and April 1941...', 'Any information about the division from...');
$natCertTitles = array('Beck, Daniel Frederick Christian, Cert 5353 issued 18 Feb 1867', 'Barsdorf, Solomon, Cert 2738 issued 11 Sept 1858', 'Anzarut, Jacob, Cert 5016 issued 26 Oct 1870', 'Fanty, Benno, Cert 5697 issued 24 Feb 1868', 'Edward, John, Cert 2700 issued 10 Jul 1858');
?>
<?php
    $randItems = rand(3, 5);
    for ($i=0; $i < $randItems; $i++) {
    $rand = "RC " . rand(1000000, 9000000) . " 15";
    $randPrice = "£" . rand(10, 120) . ".00";
    $randStatus = $statuses[array_rand($statuses)];
    $randDigStatus = $digStatuses[array_rand($digStatuses)];
    $randFormat = $formats[array_rand($formats)];
    print("<li class='order-item'>");
    if ($randFormat == "Naturalisation certificate") {
        printf("<h3><a href='#'>%s</a></h3>", $natCertTitles[$i]);
    }
    else {
        printf("<h3><a href='#'>%s</a></h3>", $titles[$i]);
    }
    printf("<h3>Order Item ID: %s</h3>", $rand);
        $page = basename($_SERVER['REQUEST_URI']);
        if ($page == 'index-alt.php') {
            $randDate = rand(01, 29) . "/" . rand(01, 12) . "/2015";
            printf("<p><strong>Date:</strong> %s</p>", $randDate);
        }
    printf("<span class='format-type'><strong>%s</strong></span>", $randFormat);
    if ($randFormat == "Digital download") {
        print("<strong>Price:</strong> &pound;3.30</p>");
    }
    else {
        printf("<p><strong>Price:</strong> %s</p>", $randPrice);
    }
    if ($randFormat == "Digital download") {
        print("<strong>Download details:</strong> Download size approximately 2MB<br><strong>Email address for digital item:</strong> test19@test.com</p>");
    }
    elseif ($randFormat == "Naturalisation certificate") {
        print("<strong>Certified copy</strong></p>");
    }
    else {
        printf("<p><strong>Instructions:</strong> %s <a href='#'>read more</a></p>", $customerInst[$i]);
    }
    if ($randFormat == "Digital download" && $randDigStatus == "Digital copy ready to download") {
        print("<div class='status action-this'>");
    }
    elseif ($randFormat == "Record copy" && $randStatus == "Page check successful") {
        print("<div class='status action-this'>");
    }
    elseif ($randFormat == "Naturalisation certificate" && $randStatus == "Page check successful") {
        print("<div class='status action-this'>");
    }
    else {
        print("<div class='status'>");
    }
    if ($randFormat == "Digital download") {
        printf("<p class='status-type'><strong>Status:</strong> %s</p>", $randDigStatus);
        if ($randDigStatus == "Digital copy ready to download") {
            print("<a class='button' href='#'>Download</a>");
        }
        else {
            print("<a href='#'>Enquire about this order item</a>");
        }
    }
    else {
        printf("<p class='status-type'><strong>Status:</strong> %s</p>", $randStatus);
        if ($randStatus == "Page check successful") {
            print("<a class='button' href='#'>Review order</a>");
        }
        else {
            print("<a href='#'>Enquire about this order item</a>");
        }
    }
    print("</div></li>");
}
?>