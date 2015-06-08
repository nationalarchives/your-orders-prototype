<?php
    $titles = array('42ND DIVISION Reconnaissance Battalion', '1ST ARMOURED DIVISION Commander Royal Engineers', '3RD INFANTRY BRIGADE Anti-tank Company', '1ST BATTALION Somerset Light Infantry', 'NAVY Medal card of Seddon, J Corps');
    $formats = array('Record copy', 'Digital download', 'Naturalisation certificate');
    $statuses = array('Page check in progress', 'Page check successful', 'Page check cancelled', 'Record copying order in progress', 'Record copying order complete and dispatched');
    $digStatuses = array('Digital copy ready to download', 'Digital copy download expired');
    $customerInst = array('Looking for information related to John Smith from...', 'Locating any information related to Jane Smith from...', 'Looking for specific information related to...', 'Between dates March and April 1941...', 'Any information about the division from...');
    $natCertTitles = array('Beck, Daniel Frederick Christian, Cert 5353 issued 18 Feb 1867', 'Barsdorf, Solomon, Cert 2738 issued 11 Sept 1858', 'Anzarut, Jacob, Cert 5016 issued 26 Oct 1870', 'Fanty, Benno, Cert 5697 issued 24 Feb 1868', 'Edward, John, Cert 2700 issued 10 Jul 1858');
?>

<section class="row">
    <div class="col starts-at-full ends-at-two-thirds clr holding-box">
        <div class="heading-holding-banner">
            <h1><span><span>Your orders</span></span></h1>
        </div>
        <div class="breather">
            <ul id="your-orders">
                <?php for ($i=0; $i < 5; $i++) {
                    $rand = "RC " . rand(1000000, 9000000) . " 15";
                    $randPrice = "£" . rand(10, 120) . ".00";
                    $randDate = rand(01, 29) . "/" . rand(01, 12) . "/2015";
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
                    printf("<h3>Order reference: %s</h3>", $rand);
                    printf("<span class='format-type'><strong>%s</strong></span>", $randFormat);
                    printf("<p><strong>Date:</strong> %s</p>", $randDate);
                    printf("<p><strong>Price:</strong> %s</p>", $randPrice);
                    printf("<p><strong>Instructions:</strong> %s <a href='#'>read more</a></p>", $customerInst[$i]);
                    print("<div class='status'>");
                    if ($randFormat == "Digital download") {
                        printf("<p class='status-type'><strong>Status:</strong> %s</p>", $randDigStatus);
                        if ($randDigStatus == "Digital copy ready to download") {
                            print("<a class='button' href='#'>Download</a>");
                        }
                        else {
                            print("<a class='mail-button' href='#'>Enquire</a>");
                        }
                    }
                    else {
                        printf("<p class='status-type'><strong>Status:</strong> %s</p>", $randStatus);
                        if ($randStatus == "Page check successful") {
                            print("<a class='button' href='#'>Order</a>");
                        }
                        else {
                            print("<a class='mail-button' href='#'>Enquire</a>");
                        }
                    }
                    print("</div></li>");
                }
                ?>
            </ul>
        </div>
    </div>
    <div class="col ends-at-one-third box">
        <div class="heading-holding-banner">
            <h2><span> <span>Also in this section</span> </span></h2>
        </div>
        <div class="breather">
            <ul class="sibling">
                <li><a class="normal" href="/account/bookmarks">Your bookmarks</a></li>
                <li><a class="normal" href="/account/tags">Your tags</a></li>
                <li><a class="selected" href="/account/currentorders">Your current orders</a></li>
                <li><a class="normal" href="/account/pastorders">Your previous orders</a></li>
                <li><a href="http://secure.nationalarchives.gov.uk/login/PersonalDetails">Your personal details</a></li>
            </ul>
        </div>
    </div>
</section>
