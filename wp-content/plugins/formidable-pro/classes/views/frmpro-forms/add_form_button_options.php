<tr class="hide_editable">
    <td>
        <label><?php _e( 'Update Button Text', 'formidable-pro' ) ?></label>
    </td>
    <td>
        <input type="text" name="options[edit_value]" value="<?php echo esc_attr($values['edit_value']); ?>" />
    </td>
</tr>

<?php if ( $page_field ) { ?>
<tr>
    <td>
        <label><?php _e( 'Previous Button Text', 'formidable-pro' ) ?></label>
    </td>
    <td>
        <input type="text" name="options[prev_value]" value="<?php echo esc_attr($values['prev_value']); ?>" />
    </td>
</tr>
<?php } ?>

<tr>
    <td>
        <label><?php _e( 'Submit Button Alignment', 'formidable-pro' ) ?></label>
    </td>
    <td>
        <select name="options[submit_align]">
			<option value=""><?php _e( 'Default', 'formidable-pro' ) ?></option>
			<option value="center" <?php selected( $values['submit_align'], 'center' ) ?>><?php _e( 'Center', 'formidable-pro' ) ?></option>
			<option value="inline" <?php selected( $values['submit_align'], 'inline' ) ?>><?php _e( 'Inline', 'formidable-pro' ) ?></option>
        </select>
    </td>
</tr>
