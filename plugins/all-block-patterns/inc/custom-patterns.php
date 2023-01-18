<?php
/**
     * CUSTOM BLOCK PATTERN for Custom Cat
     * - Register Pattern Cat/Label
     * - Register Block Pattern
*/
register_block_pattern_category(
    'Custom Patterns',
    array(
        'label'     => __( 'Custom Patterns', 'jacobs-portfolio' )
    )
);
function custom_block_patterns() {
    register_block_pattern(
        'jacobs-portfoliofolio/pattern-one',
        array(
            'title'       => __( 'Contact', 'jacobs-portfolio' ),
            'description' => _x( 'Description here', 'jacobs-portfolio' ),
            'content'     => "",
            'categories'  => array( 'Custom Patterns' ),
        )
    );

}