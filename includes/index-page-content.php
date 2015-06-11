<section class="row">
    <div class="col starts-at-full ends-at-two-thirds clr holding-box">
        <div class="heading-holding-banner">
            <h1><span><span>Your orders</span></span></h1>
        </div>
        <div class="breather">
            <div class="your-orders-filters">
                <div class="breather date-filter">
                    <h3>View orders within the last:</h3>
                    <div class="date-filter-form">
                        <form>
                            <div class="field-row">
                                <!-- <label for="date">See orders in the past: </label> -->
                                <select>
                                    <option value="0" label="3 months">3 months</option>
                                    <option value="1" label="6 months">6 months</option>
                                    <option value="2" label="12 months">12 months</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="your-order">
                <div class="breather">
                    <div class="your-order-header">
                        <?php
                        $rand = "1/15/" . rand(1000000, 9000000) . "M";
                        $randDate = rand(01, 29) . "/" . rand(01, 12) . "/2015";
                        printf("<h2>Order reference:</strong> %s</h2>", $rand);
                        printf("<p><strong>Date:</strong> %s</p>", $randDate);
                        ?>
                    </div>
                    <ul class="your-order-items">
                        <?php require('index-page-order-loop.php'); ?>
                    </ul>
                    <div class="your-order-summary">
                        <h3>Order 192837465 summary</h3>
                        <p>Sub total: £358.00</p>
                        <p>Postage and packing: £0.00</p>
                        <p><strong>Total: £358.00</strong></p>
                    </div>
                </div>
            </div>
            <div class="your-order">
                <div class="breather">
                    <div class="your-order-header">
                        <?php
                        $rand = "1/15/" . rand(1000000, 9000000) . "M";
                        $randDate = rand(01, 29) . "/" . rand(01, 12) . "/2015";
                        printf("<h2>Order reference:</strong> %s</h2>", $rand);
                        printf("<p><strong>Date:</strong> %s</p>", $randDate);
                        ?>
                    </div>
                    <ul class="your-order-items">
                        <?php require('index-page-order-loop.php'); ?>
                    </ul>
                    <div class="your-order-summary">
                        <h3>Order 192837465 summary</h3>
                        <p>Sub total: £358.00</p>
                        <p>Postage and packing: £0.00</p>
                        <p><strong>Total: £358.00</strong></p>
                    </div>
                </div>
            </div>
            <ul class="menu-disc">
                <li><a class="active">1</a></li>
                <li><a>2</a></li>
                <li><a>3</a></li>
                <li><a>&gt;</a></li>
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
                <li><a class="selected" href="/account/your-orders">Your orders</a></li>
                <li><a href="http://secure.nationalarchives.gov.uk/login/PersonalDetails">Your personal details</a></li>
            </ul>
        </div>
    </div>
</section>
