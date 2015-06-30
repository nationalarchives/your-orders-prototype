<?php
$titles = array('42ND DIVISION Reconnaissance Battalion', '1ST ARMOURED DIVISION Commander Royal Engineers', '3RD INFANTRY BRIGADE Anti-tank Company', '1ST BATTALION Somerset Light Infantry', 'NAVY Medal card of Seddon, J Corps');
$formats = array('Record copy', 'Digital download', 'Naturalisation certificate');
$statuses = array('Page check in progress', 'Page check successful', 'Page check cancelled', 'Record copying in progress', 'Complete and dispatched');
$digStatuses = array('Ready to download', 'Download expired');
$customerInst = array('Looking for information related to John Smith from...', 'Locating any information related to Jane Smith from...', 'Looking for specific information related to...', 'Between dates March and April 1941...', 'Any information about the division from...');
$natCertTitles = array('Beck, Daniel Frederick Christian, Cert 5353 issued 18 Feb 1867', 'Barsdorf, Solomon, Cert 2738 issued 11 Sept 1858', 'Anzarut, Jacob, Cert 5016 issued 26 Oct 1870', 'Fanty, Benno, Cert 5697 issued 24 Feb 1868', 'Edward, John, Cert 2700 issued 10 Jul 1858');
?>
<?php
    $randItems = rand(4, 6);
    for ($i=0; $i < $randItems; $i++) {
    $rand = rand(1000000, 9000000) . " 15";
    $randPrice = "£" . rand(10, 120) . ".00";
    $randStatus = $statuses[array_rand($statuses)];
    $randDigStatus = $digStatuses[array_rand($digStatuses)];
    $randFormat = $formats[array_rand($formats)];
    print("<li class='order-item'>");

    if ($randFormat == "Naturalisation certificate") {
        printf("<h3>%s</h3>", $natCertTitles[$i]);
    }
    else {
        printf("<h3>%s</h3>", $titles[$i]);
    }
        if ($randFormat == "Digital download") {
            printf("<p class='status-type'>%s</p>", $randDigStatus);
        }
        else {
            printf("<p class='status-type'>%s</p>", $randStatus);
        }
        print("<div class='row'><div class='order-details col starts-at-full ends-at-two-thirds'>");
    printf("<h3>Item ID: %s</h3>", $rand);
        $page = basename($_SERVER['REQUEST_URI']);
        if ($page == 'index-alt.php') {
            $randDate = rand(01, 29) . "/" . rand(01, 12) . "/2015";
            printf("<p><strong>Date:</strong> %s</p>", $randDate);
        }
    printf("<!-- <span class='format-type'><strong>%s</strong></span> -->", $randFormat);
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
        printf("<p><strong>Instructions:</strong> %s <a href='#'>read&nbsp;more</a></p>", $customerInst[$i]);
    }
        print("<a href='#'>Enquire about this order item</a>");
        print("</div>");
    if ($randFormat == "Digital download" && $randDigStatus == "Digital copy ready to download") {
        print("<div class='status action-this col starts-at-full ends-at-one-third'>");
    }
    elseif ($randFormat == "Record copy" && $randStatus == "Page check successful") {
        print("<div class='status action-this col starts-at-full ends-at-one-third'>");
    }
    elseif ($randFormat == "Naturalisation certificate" && $randStatus == "Page check successful") {
        print("<div class='status action-this col starts-at-full ends-at-one-third'>");
    }
    else {
        print("<div class='status col starts-at-full ends-at-one-third'>");
    }
    if ($randFormat == "Digital download") {
        if ($randDigStatus == "Ready to download") {
            print("<a class='button' href='#'>Download</a>");
        }
    }
    else {
        if ($randStatus == "Page check successful") {
            print("<a class='button' href='#'>Review order</a>");
        }
    }
    print("</div></div></li>");
}
?>