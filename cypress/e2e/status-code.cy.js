describe( 'The REST API user endpoints', () => {
	context( 'for unauthenticated requests', () => {
		it( 'should return a 404 error for the users collection endpoint', () => {
			cy.request( {
				method: 'GET',
				url: 'http://localhost:8889/wp-json/wp/v2/users',
				failOnStatusCode: false, // prevent Cypress from failing the test on non-2xx status codes
			} ).should( ( response ) => {
				expect( response.status ).to.eq( 404 );
				// Ensure the 404 comes from WordPress (route removed), not from a broken REST API setup.
				expect( response.body.code ).to.eq( 'rest_no_route' );
			} );
		} );

		it( 'should return a 404 error for the single user endpoint', () => {
			cy.request( {
				method: 'GET',
				url: 'http://localhost:8889/wp-json/wp/v2/users/1',
				failOnStatusCode: false, // prevent Cypress from failing the test on non-2xx status codes
			} ).should( ( response ) => {
				expect( response.status ).to.eq( 404 );
				expect( response.body.code ).to.eq( 'rest_no_route' );
			} );
		} );

		it( 'should keep other REST API endpoints working', () => {
			cy.request( {
				method: 'GET',
				url: 'http://localhost:8889/wp-json/wp/v2/posts',
			} ).should( ( response ) => {
				expect( response.status ).to.eq( 200 );
			} );
		} );
	} );

	context( 'for authenticated requests', () => {
		beforeEach( () => {
			cy.login();
		} );

		it( 'should keep the users collection endpoint available', () => {
			cy.getRestNonce().then( ( nonce ) => {
				cy.request( {
					method: 'GET',
					url: 'http://localhost:8889/wp-json/wp/v2/users',
					headers: { 'X-WP-Nonce': nonce },
				} ).should( ( response ) => {
					expect( response.status ).to.eq( 200 );
					expect( response.body ).to.be.an( 'array' );
				} );
			} );
		} );

		it( 'should keep the single user endpoint available', () => {
			cy.getRestNonce().then( ( nonce ) => {
				cy.request( {
					method: 'GET',
					url: 'http://localhost:8889/wp-json/wp/v2/users/1',
					headers: { 'X-WP-Nonce': nonce },
				} ).should( ( response ) => {
					expect( response.status ).to.eq( 200 );
					expect( response.body.id ).to.eq( 1 );
				} );
			} );
		} );
	} );
} );
