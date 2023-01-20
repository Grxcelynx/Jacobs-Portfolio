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
            'title'       => __( 'Pattern 1', 'jacobs-portfolio' ),
            'description' => _x( 'Description here', 'jacobs-portfolio' ),
            'content'     => "<!-- wp:columns -->\n<div class=\"wp-block-columns about-section\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:heading {\"style\":{\"typography\":{\"fontSize\":\"64px\"}}} -->\n<h2 style=\"font-size:64px\">Hi, Im Jacob</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"style\":{\"typography\":{\"fontSize\":\"18px\"}}} -->\n<p style=\"font-size:18px\">Lorem ipsum dolor sit amet consectetur. Duis volutpat arcu sed ut odio lacinia. Felis maecenas dictum tincidunt sed at viverra. Dignissim feugiat ornare morbi feugiat a viverra faucibus. Etiam quisque in in semper aenean. Bibendum sed ut dignissim velit.<br>Arcu est turpis sed nascetur pretium nec. Sollicitudin ac faucibus leo porta adipiscing odio suscipit. Eget ut aliquet nam vitae lacus nullam id turpis dictumst. Varius aliquet sed turpis id est consequat. Lorem ipsum dolor sit amet consectetur.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"style\":{\"border\":{\"radius\":\"8px\"},\"color\":{\"background\":\"#091540\"}}} -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link has-background wp-element-button\" style=\"border-radius:8px;background-color:#091540\">Check out my work</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:image -->\n<figure class=\"wp-block-image\"><img alt=\"\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->",
            'categories'  => array( 'Custom Patterns' ),
        )
    );

    register_block_pattern(
        'jacobs-portfoliofolio/pattern-two',
        array(
            'title'       => __( 'Pattern 2', 'jacobs-portfolio' ),
            'description' => _x( 'Description here', 'jacobs-portfolio' ),
            'content'     => "<!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column {\"className\":\"project-display\"} -->\n<div class=\"wp-block-column project-display\"><!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:image -->\n<figure class=\"wp-block-image\"><img alt=\"\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:heading {\"level\":4,\"style\":{\"typography\":{\"fontSize\":\"32px\"}}} -->\n<h4 style=\"font-size:32px\">Project Name</h4>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"style\":{\"typography\":{\"fontSize\":\"16px\"}}} -->\n<p style=\"font-size:16px\">A real estate company who has yet to go digital required a custom solution to getting their customers information about properties efficiently and effectively while also providing an area to inquire about the properties they are interested in.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"style\":{\"border\":{\"radius\":\"8px\"},\"color\":{\"background\":\"#091540\"},\"typography\":{\"fontSize\":\"18px\"}}} -->\n<div class=\"wp-block-button has-custom-font-size\" style=\"font-size:18px\"><a class=\"wp-block-button__link has-background wp-element-button\" style=\"border-radius:8px;background-color:#091540\">View Project</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph -->",
            'categories'  => array( 'Custom Patterns' ),
        )
    );

    register_block_pattern(
        'jacobs-portfoliofolio/pattern-three',
        array(
            'title'       => __( 'Pattern 3', 'jacobs-portfolio' ),
            'description' => _x( 'Description here', 'jacobs-portfolio' ),
            'content'     => "<!-- wp:columns {\"verticalAlignment\":null} -->\n<div class=\"wp-block-columns info-boxes\"><!-- wp:column {\"verticalAlignment\":\"center\",\"className\":\"info-box\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center info-box\"><!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:heading {\"textAlign\":\"center\",\"level\":5} -->\n<h5 class=\"has-text-align-center\">Role</h5>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"textAlign\":\"center\",\"level\":6} -->\n<h6 class=\"has-text-align-center\">Role Type</h6>\n<!-- /wp:heading --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:heading {\"textAlign\":\"center\",\"level\":5} -->\n<h5 class=\"has-text-align-center\">Team</h5>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"textAlign\":\"center\",\"level\":6} -->\n<h6 class=\"has-text-align-center\">Team Member name</h6>\n<!-- /wp:heading --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:heading {\"textAlign\":\"center\",\"level\":5} -->\n<h5 class=\"has-text-align-center\">Duration</h5>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"textAlign\":\"center\",\"level\":6} -->\n<h6 class=\"has-text-align-center\">Timeframe</h6>\n<!-- /wp:heading --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph -->",
            'categories'  => array( 'Custom Patterns' ),
        )
    );

    register_block_pattern(
        'jacobs-portfoliofolio/pattern-four',
        array(
            'title'       => __( 'Pattern 4', 'jacobs-portfolio' ),
            'description' => _x( 'Description here', 'jacobs-portfolio' ),
            'content'     => "<!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column {\"className\":\"case-study-section\"} -->\n<div class=\"wp-block-column case-study-section\"><!-- wp:heading {\"level\":5,\"style\":{\"typography\":{\"fontStyle\":\"normal\",\"fontWeight\":\"300\",\"textTransform\":\"uppercase\"}}} -->\n<h5 style=\"font-style:normal;font-weight:300;text-transform:uppercase\">Section</h5>\n<!-- /wp:heading -->\n\n<!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:heading {\"level\":4,\"style\":{\"typography\":{\"fontStyle\":\"normal\",\"fontWeight\":\"300\",\"textTransform\":\"uppercase\"}}} -->\n<h4 style=\"font-style:normal;font-weight:300;text-transform:uppercase\">Title for section</h4>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Lorem ipsum dolor sit amet consectetur. Felis in ultrices et cras diam nibh non. Faucibus habitant lectus mollis sit aliquam cursus nisi. Ipsum feugiat non egestas quam integer libero mauris scelerisque placerat. Amet nulla consequat cras quis. Odio commodo velit consectetur viverra eget etiam mattis placerat. Aliquam scelerisque posuere urna urna neque sed sed a. Risus pulvinar pulvinar volutpat non blandit viverra tortor.</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:image -->\n<figure class=\"wp-block-image\"><img alt=\"\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph -->",
            'categories'  => array( 'Custom Patterns' ),
        )
    );

}
add_action( 'init', 'custom_block_patterns' );
