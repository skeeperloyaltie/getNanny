( function( api ) {

	// Extends our custom "fashion-designer-mart" section.
	api.sectionConstructor['fashion-designer-mart'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );