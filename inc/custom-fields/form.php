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
        <label for="hobi_position">Position</label>
        <input id="hobi_position"
            type="text"
            name="hobi_position"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'hobi_position', true ) ); ?>">
    </p>
    <p class="meta-options hcf_field">
        <label for="hobi_instagram_link">Instagram Link</label>
        <input id="hobi_instagram_link"
            type="text"
            name="hobi_instagram_link"
           value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'hobi_instagram_link', true ) ); ?>">
    </p>
    <p class="meta-options hcf_field">
        <label for="hobi_email">Email</label>
        <input id="hobi_email"
            type="text"
            name="hobi_email"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'hobi_email', true ) ); ?>">
    </p>
</div>