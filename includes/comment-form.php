<?php

add_filter( 'comment_form_defaults', 'ldm_comment_form_modifications' );

function ldm_comment_form_modifications( $fields ) {
    //Remove Form Allowed Tags Box
    $fields['comment_notes_after'] = '';

    return $fields;
}
