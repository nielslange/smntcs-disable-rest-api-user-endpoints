import './commands';

describe( 'Admin', () => {
	beforeEach( function () {
		cy.login();
	} );

	it( 'can ensure the SMNTCS Disable REST API User Endpoints plugin is activated', () => {
		cy.checkPluginActivation();
	} );
} );
