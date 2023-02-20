wp.blocks.registerBlockType( 'my-plugin/menu-selector', {
    title: 'Menu Selector',
    icon: 'menu',
    category: 'common',
    attributes: {
        menuId: {
            type: 'string',
            default: '',
        },
    },
    edit: function( props ) {
        var menus = wp.data.select( 'core' ).getEntityRecords( 'taxonomy', 'nav_menu' );
        var options = [];
    
        menus.forEach( function( menu ) {
            options.push( { value: menu.id, label: menu.name } );
        } );
    
        return el(
            'div',
            { className: props.className },
            el(
                wp.components.SelectControl,
                {
                    label: 'Select Menu',
                    value: props.attributes.menuId,
                    options: options,
                    onChange: function( value ) {
                        props.setAttributes( { menuId: value } );
                    },
                }
            )
        );
    },    
    save: function( props ) {
        return el(
            wp.element.RawHTML,
            null,
            wp_nav_menu( {
                menu: props.attributes.menuId,
                container: false,
                echo: false,
            } )
        );
    },
} );
