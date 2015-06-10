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
                                <label for="date" style="display:none;">View orders within the last: </label>
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
            <div class="order-container">
                <div class="order-header">
                    <div class="breather">
                        <h2>Order 120003939 placed on 12/04/2015</h2>
                    </div>
                </div>
                <div class="breather">
                    <?php require('index-page-your-orders-loop.php'); ?>
                </div>
                <div class="order-footer">
                    <div class="breather">
                        <h3>Order 120003939 Summary</h3>
                        <p>Sub total: £324.00</p>
                        <p>Postage and packing: £17.00</p>
                        <p>Total: £341.00</p>
                    </div>
                </div>
            </div>
            <div class="order-container">
                <div class="order-header">
                    <div class="breather">
                        <h2>Order 120003939 placed on 12/04/2015</h2>
                    </div>
                </div>
                <div class="breather">
                    <?php require('index-page-your-orders-loop.php'); ?>
                </div>
                <div class="order-footer">
                    <div class="breather">
                        <h3>Order 120003939 Summary</h3>
                        <p>Sub total: £324.00</p>
                        <p>Postage and packing: £17.00</p>
                        <p>Total: £341.00</p>
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
                <li><a class="selected" href="/account/currentorders">Your current orders</a></li>
                <li><a class="normal" href="/account/pastorders">Your previous orders</a></li>
                <li><a href="http://secure.nationalarchives.gov.uk/login/PersonalDetails">Your personal details</a></li>
            </ul>
        </div>
    </div>
</section>
