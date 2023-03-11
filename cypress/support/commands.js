Cypress.Commands.add( 'login', () => {
	cy.viewport( 1200, 2000 );
	cy.visit( 'http://localhost:8889/wp-login.php' ).wait( 500 );
	cy.get( '#user_login' ).type( 'admin' );
	cy.get( '#user_pass' ).type( 'password' );
	cy.get( '#wp-submit' ).click();
} );

Cypress.Commands.add( 'checkPluginActivation', () => {
	cy.viewport( 1200, 2000 );
	cy.visit( 'http://localhost:8889/wp-admin/plugins.php' ).wait( 500 );
	cy.get( 'tr[data-slug="smntcs-disable-rest-api-user-endpoints"]' ).then(
		( $link ) => {
			if ( $link.hasClass( 'inactive' ) ) {
				cy.get(
					'tr[data-slug="smntcs-disable-rest-api-user-endpoints"] .activate a'
				).click();
			}
		}
	);
} );
