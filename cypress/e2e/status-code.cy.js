describe( 'The REST API user endpoint', () => {
	it( 'should return a 404 error', () => {
		cy.request( {
			method: 'GET',
			url: 'http://localhost:8889/wp-json/wp/v2/users',
			failOnStatusCode: false, // prevent Cypress from failing the test on non-2xx status codes
		} ).should( ( response ) => {
			expect( response.status ).to.eq( 404 );
		} );
	} );
} );
