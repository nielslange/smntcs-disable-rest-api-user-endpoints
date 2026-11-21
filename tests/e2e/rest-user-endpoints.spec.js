/**
 * Visitors get no REST user endpoints (rest_no_route, so the 404 comes from WordPress, not from a broken REST
 * setup); other endpoints keep working, and logged-in users keep the user endpoints. Routes go through
 * ?rest_route= so the specs do not depend on the permalink setup.
 */
import { request as playwrightRequest } from '@playwright/test';
import { test, expect } from '@wordpress/e2e-test-utils-playwright';

const route = ( path ) => `/?rest_route=${ encodeURIComponent( path ) }`;

test.describe( 'REST API user endpoints for visitors', () => {
	let visitor;

	test.beforeAll( async ( { baseURL } ) => {
		visitor = await playwrightRequest.newContext( {
			baseURL,
			storageState: { cookies: [], origins: [] },
		} );
	} );

	test.afterAll( async () => {
		await visitor.dispose();
	} );

	for ( const path of [ '/wp/v2/users', '/wp/v2/users/1' ] ) {
		test( `${ path } does not exist`, async () => {
			const response = await visitor.get( route( path ) );
			expect( response.status() ).toBe( 404 );
			expect( ( await response.json() ).code ).toBe( 'rest_no_route' );
		} );
	}

	test( 'other endpoints keep working', async () => {
		const response = await visitor.get( route( '/wp/v2/posts' ) );
		expect( response.status() ).toBe( 200 );
	} );
} );

test.describe( 'REST API user endpoints for logged-in users', () => {
	test( 'the users collection is available', async ( { requestUtils } ) => {
		const users = await requestUtils.rest( { path: '/wp/v2/users' } );
		expect( Array.isArray( users ) ).toBe( true );
		expect( users.length ).toBeGreaterThan( 0 );
	} );

	test( 'a single user is available', async ( { requestUtils } ) => {
		const user = await requestUtils.rest( { path: '/wp/v2/users/1' } );
		expect( user.id ).toBe( 1 );
	} );
} );
