( function ( wp ) {
    var UnderlineButton = function ( props ) {
        return wp.element.createElement( wp.editor.RichTextToolbarButton, {
            icon: 'editor-underline',
            title: 'Underline',
            onClick: function () {
				props.onChange(
                    wp.richText.toggleFormat( props.value, {
                        type: 'mchev/gutenberg-underline',
                    } )
                );
			},
			isActive: props.isActive,
        } );
    };
    wp.richText.registerFormatType( 'mchev/gutenberg-underline', {
        title: 'Underline',
        tagName: 'u',
        className: null,
        edit: UnderlineButton,
    } );
} )( window.wp );