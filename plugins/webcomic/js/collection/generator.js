/* global ajaxurl, webcomicGeneratorL10n */

/**
 * Comic generator utilities.
 */
( function load() {
	if ( 'loading' === document.readyState ) {
		return document.addEventListener( 'DOMContentLoaded', load );
	}

	prepareTable( document.querySelector( 'table.media' ) );

	jQuery( 'table.media tbody' ).sortable({
		items: 'tr',
		start: startSorting,
		stop: stopSorting
	});

	/**
	 * Prepare the media table for comic publish date previews.
	 *
	 * @param {object} table The table to prepare.
	 * @return {void}
	 */
	function prepareTable( table ) {
		const rows = table.querySelectorAll( 'tbody > tr' );
		const td = document.createElement( 'td' );
		const th = document.createElement( 'th' );
		const elements = document.querySelectorAll( 'input, select' );

		th.innerHTML = webcomicGeneratorL10n.publish;

		table.querySelector( 'thead tr' ).appendChild( th );

		for ( let i = 0; i < rows.length; i++ ) {
			rows[i].appendChild( td.cloneNode() );
		}

		for ( let i = 0; i < elements.length; i++ ) {
			elements[i].addEventListener( 'change', ()=> {
				setTimeout( ()=> getPublishDates( document.querySelector( '#webcomic_generator' ) ), 1 );
			});

			if ( 'webcomic_generator[start_date]' !== elements[i].name ) {
				continue;
			}

			elements[i].addEventListener( 'change', ()=> getStartDay( elements[i]) );
			elements[i].dispatchEvent( new Event( 'change' ) );
		}
	}

	/**
	 * Set the placeholder height while sorting.
	 *
	 * @param {object} event The current event object.
	 * @param {object} ui The current ui object.
	 * @return {void}
	 */
	function startSorting( event, ui ) {
		ui.placeholder.height( ui.helper.outerHeight() );
	}

	/**
	 * [stopSorting description]
	 *
	 * @return {void}
	 */
	function stopSorting() {
		document.querySelector( '[name="webcomic_generator[collection]"]' ).dispatchEvent( new Event( 'change' ) );
	}

	/**
	 * Get the start day for comic generation.
	 *
	 * @param {object} element The start date form element.
	 * @return {void}
	 */
	function getStartDay( element ) {
		const data = new FormData;
		const xhr = new XMLHttpRequest;

		data.append( 'action', 'webcomic_generator_start_date' );
		data.append( 'date', element.value );

		xhr.onreadystatechange = ()=> {
			if ( 4 !== xhr.readyState ) {
				return;
			}

			document.querySelector( `label[for="${element.name}"]` ).innerHTML = JSON.parse( xhr.responseText )[0];
		};
		xhr.open( 'POST', ajaxurl );
		xhr.send( data );
	}

	/**
	 * Get comic publish dates for selected media and generator settings.
	 *
	 * @param {object} form The comic generator form object.
	 * @return {void}
	 */
	function getPublishDates( form ) {
		const data = new FormData( form );
		const xhr = new XMLHttpRequest;

		data.append( 'action', 'webcomic_generator_preview' );

		xhr.onreadystatechange = ()=> {
			if ( 4 !== xhr.readyState ) {
				return;
			}

			const cells = document.querySelectorAll( 'table.media tbody > tr td:last-child' );
			let media = [];

			for ( let i = 0; i < cells.length; i++ ) {
				cells[i].innerHTML = '&mdash;';
			}

			if ( ! xhr.responseText ) {
				return;
			}

			media = JSON.parse( xhr.responseText );

			for ( let i = 0; i < media.length; i++ ) {
				document.querySelector( `table.media tbody [data-id="${media[i].id}"] td:last-child` ).innerHTML = media[i].date;
			}
		};
		xhr.open( 'POST', ajaxurl );
		xhr.send( data );
	}
}() );
