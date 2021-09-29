<div class="hcf_box">
    <style scoped>
        .hcf_box{
            display: grid;
            grid-template-columns: max-content 1fr;
            grid-row-gap: 10px;
            grid-column-gap: 20px;
        }
        .hcf_field{
            display: contents;
        }
    </style>
    <p class="meta-options hcf_field">
        <label for="menu_price">Price</label>
        <input id="menu_price"
            type="number"
            name="menu_price"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'menu_price', true ) ); ?>">
    </p>
</div>