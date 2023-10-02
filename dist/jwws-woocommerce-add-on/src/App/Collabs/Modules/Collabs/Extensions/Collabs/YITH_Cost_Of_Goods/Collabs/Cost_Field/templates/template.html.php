<p class="form-row form-row-full">
    <label>
        <?php
        // translators: Placeholder: %s - currency symbol
        apply_filters(
            'yith_cog_add_cost_field_label_variations',
            printf(
                esc_html__(
                    text: 'Cost price: (%s)',
                    domain: 'yith-cost-of-goods-for-woocommerce',
                ),
                esc_html(
                    text: get_woocommerce_currency_symbol(),
                ),
            ),
        );
        ?>
    </label>
    <input
        type="text"
        size="6"
        name="variable_cost_of_good[<?= esc_attr(text: $loop); ?>]"
        value="<?= $cost; ?>"
        class="wc_input_price"
        placeholder="<?= $cost_variable; ?>"
    />
</p>