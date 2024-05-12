<style>
    .accordion-block-item {
        display: flex;
        align-items: baseline;
        gap: 15px;
        background-color: #303030;
    }

    .accordion-title h5 {
        font-size: 24px;
        color: #fff;
        margin: 0;
        /* Added to remove default margin */
        cursor: pointer;
        /* Added cursor pointer for better UX */
    }

    .accordion-decp {
        display: none;
        color: #fff;
        padding: 0px 0 20px;
    }

    .active .accordion-decp {
        display: block;
    }

    .accordion-text-item-list {
        width: 100%;
    }

    .accordion-title {
        position: relative;
        padding: 20px 0;
    }

    .accordion-title::after {
        content: '\02795';
        /* Unicode character for "plus" sign (+) */
        font-size: 13px;
        color: #777;
        float: right;
        margin-left: 5px;
    }

    .active .accordion-title::after {
        content: "\2796";
    }

    .accordion-block {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 50px;
    }

    .accordion-decp.active {
        display: block;
    }
</style>
<section>
    <div class="container">
        <div class="bottom-header-info">
            <h2>We look into all dynamics of the business</h2>
            <p class="p18-color">"Comprehensive Business Dynamics Analysis: Unlocking Success Strategies"</p>
        </div>

        <div class="accordion-block">
            <div class="accordion-block-item">
                <div class="count">
                    01
                </div>
                <div class="accordion-text-item-list">
                    <div class="accordion-title">
                        <h5>Complex and Evolving Product Offerings</h5>
                    </div>
                    <div class="accordion-decp">
                        <p>We bring the route to quality end customer and channel management to stay ahead of the curve against our competition.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-block-item">
                <div class="count">
                    01
                </div>
                <div class="accordion-text-item-list">
                    <div class="accordion-title">
                        <h5>Complex and Evolving Product Offerings</h5>
                    </div>
                    <div class="accordion-decp">
                        <p>We bring the route to quality end customer and channel management to stay ahead of the curve against our competition.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-block-item">
                <div class="count">
                    01
                </div>
                <div class="accordion-text-item-list">
                    <div class="accordion-title">
                        <h5>Complex and Evolving Product Offerings</h5>
                    </div>
                    <div class="accordion-decp">
                        <p>We bring the route to quality end customer and channel management to stay ahead of the curve against our competition.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-block-item">
                <div class="count">
                    01
                </div>
                <div class="accordion-text-item-list">
                    <div class="accordion-title">
                        <h5>Complex and Evolving Product Offerings</h5>
                    </div>
                    <div class="accordion-decp">
                        <p>We bring the route to quality end customer and channel management to stay ahead of the curve against our competition.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-block-item">
                <div class="count">
                    01
                </div>
                <div class="accordion-text-item-list">
                    <div class="accordion-title">
                        <h5>Complex and Evolving Product Offerings</h5>
                    </div>
                    <div class="accordion-decp">
                        <p>We bring the route to quality end customer and channel management to stay ahead of the curve against our competition.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
 $(document).ready(function() {
    $('.accordion-block-item').click(function() {
        $(this).find('.accordion-decp').toggleClass('active');
    });
});

</script>