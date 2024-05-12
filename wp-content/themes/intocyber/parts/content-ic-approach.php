<style>
    .approach-block {
        display: grid;
        gap: 20px;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    }

    .sales-block-img,
    .channel-block-img,
    .markiting-block-img {
        width: 80px;
        height: 80px;
        margin-bottom: 25px;
        position: relative;
    }

    ul.sales-block-img-text {
        gap: 10px;
        list-style: none;
        display: flex;
        align-items: baseline;
    }

    .sales-block,
    .channel-block,
    .markiting-block {
        display: flex;
        align-items: center;
        flex-direction: column;
        max-width: max-content;
        gap: 40px;
        position: relative;
    }

    .sales-block-tabs {
        width: auto;
        background: linear-gradient(180deg, rgba(47, 47, 47, 1) 0%, rgba(24, 24, 24, 1) 50%);
        padding: 20px;
        position: relative;
    }

    .sales-block-tabs::after {
        content: "";
        position: absolute;
        background-image: url(../wp-content/uploads/2024/05/Line-38.svg);
        width: 100%;
        height: 45px;
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
        left: 0;
    }

    .sales-block-img::after,
    .channel-block-img::after,
    .markiting-block-img::after {
        content: "";
        position: absolute;
        background-image: url(../wp-content/uploads/2024/05/Line-38.svg);
        width: 100%;
        height: 45px;
        background-repeat: no-repeat;
        background-position: bottom;
        background-size: contain;
        left: 0;
        top: 80px;
    }

    .sales-block::before,.channel-block::before {
        content: "";
        position: absolute;
        background-image: url(../wp-content/uploads/2024/05/Line-33.svg);
        width: 100%;
        height: 1px;
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
        left: 50%;
        top: 40px;
    }

    .sales-block-tabs:nth-last-child(1)::after {
        display: none;
    }

    @media screen and (max-width:581px){
        .sales-block::before {
        content: none;      
    }
    }

    @media screen and (min-width:581px) and (max-width:882px) {
        .channel-block::before {
        content: none;      
    }
    }


</style>
<section>
    <div class="container">
        <div class="bottom-header-info">
            <h2>IntoCyber Approach</h2>
            <p class="p18-color">The three pillars of success - Sales, Channel & Marketing.</p>
        </div>

        <div class="approach-block">
            <div class="sales-block">
                <div class="sales-block-img">
                    <img src="http://localhost/IntoCyber/wp-content/uploads/2024/05/sales.svg" alt="sales" />
                </div>
                <div class="sales-block-tabs">
                    <ul class="sales-block-img-text">
                        <li class="sales-icon">
                            <img src="http://localhost/IntoCyber/wp-content/uploads/2024/05/yes.svg" alt="cancle">
                        </li>
                        <div>
                            <li class="sales-block-text">
                                <p class="p18"><strong>Highly experience</strong> Regional Sales Leader to lead the region</p>
                            </li>
                        </div>
                    </ul>
                </div>
                <div class="sales-block-tabs">
                    <ul class="sales-block-img-text">
                        <li class="sales-icon">
                            <img src="http://localhost/IntoCyber/wp-content/uploads/2024/05/yes.svg" alt="cancle">
                        </li>
                        <div>
                            <li class="sales-block-text">
                                <p class="p18"><strong>Highly experience</strong> Regional Sales Leader to lead the region</p>
                            </li>
                        </div>
                    </ul>
                </div>
                <div class="sales-block-tabs">
                    <ul class="sales-block-img-text">
                        <li class="sales-icon">
                            <img src="http://localhost/IntoCyber/wp-content/uploads/2024/05/yes.svg" alt="cancle">
                        </li>
                        <div>
                            <li class="sales-block-text">
                                <p class="p18"><strong>Highly experience</strong> Regional Sales Leader to lead the region</p>
                            </li>
                        </div>
                    </ul>
                </div>

            </div>
            <div class="channel-block">
                <div class="channel-block-img">
                    <img src="http://localhost/IntoCyber/wp-content/uploads/2024/05/channel.svg" alt="channel" />
                </div>
                <div class="sales-block-tabs">
                    <ul class="sales-block-img-text">
                        <li class="sales-icon">
                            <img src="http://localhost/IntoCyber/wp-content/uploads/2024/05/yes.svg" alt="cancle">
                        </li>
                        <div>
                            <li class="sales-block-text">
                                <p class="p18"><strong>Highly experience</strong> Regional Sales Leader to lead the region</p>
                            </li>
                        </div>
                    </ul>
                </div>
                <div class="sales-block-tabs">
                    <ul class="sales-block-img-text">
                        <li class="sales-icon">
                            <img src="http://localhost/IntoCyber/wp-content/uploads/2024/05/yes.svg" alt="cancle">
                        </li>
                        <div>
                            <li class="sales-block-text">
                                <p class="p18"><strong>Highly experience</strong> Regional Sales Leader to lead the region</p>
                            </li>
                        </div>
                    </ul>
                </div>
                <div class="sales-block-tabs">
                    <ul class="sales-block-img-text">
                        <li class="sales-icon">
                            <img src="http://localhost/IntoCyber/wp-content/uploads/2024/05/yes.svg" alt="cancle">
                        </li>
                        <div>
                            <li class="sales-block-text">
                                <p class="p18"><strong>Highly experience</strong> Regional Sales Leader to lead the region</p>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
            <div class="markiting-block">
                <div class="markiting-block-img">
                    <img src="http://localhost/IntoCyber/wp-content/uploads/2024/05/markiting.svg" alt="markiting" />
                </div>
                <div class="sales-block-tabs">
                    <ul class="sales-block-img-text">
                        <li class="sales-icon">
                            <img src="http://localhost/IntoCyber/wp-content/uploads/2024/05/yes.svg" alt="cancle">
                        </li>
                        <div>
                            <li class="sales-block-text">
                                <p class="p18"><strong>Highly experience</strong> Regional Sales Leader to lead the region</p>
                            </li>
                        </div>
                    </ul>
                </div>
                <div class="sales-block-tabs">
                    <ul class="sales-block-img-text">
                        <li class="sales-icon">
                            <img src="http://localhost/IntoCyber/wp-content/uploads/2024/05/yes.svg" alt="cancle">
                        </li>
                        <div>
                            <li class="sales-block-text">
                                <p class="p18"><strong>Highly experience</strong> Regional Sales Leader to lead the region</p>
                            </li>
                        </div>
                    </ul>
                </div>
                <div class="sales-block-tabs">
                    <ul class="sales-block-img-text">
                        <li class="sales-icon">
                            <img src="http://localhost/IntoCyber/wp-content/uploads/2024/05/yes.svg" alt="cancle">
                        </li>
                        <div>
                            <li class="sales-block-text">
                                <p class="p18"><strong>Highly experience</strong> Regional Sales Leader to lead the region</p>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>

        </div>

    </div>

</section>y