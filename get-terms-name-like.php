<?php
/*
Plugin Name: Get Terms name__like
Version: 0.1
Description: Reverses the WordPress 3.7 get_terms() 'name__like' functionality back to its prior query by matching terms that begin with the 'name_like' string.
Author: keesiemijer
License: GPL v2

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
(at your option) any later version. You may NOT assume that you can use any other version of the GPL.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

add_filter( 'terms_clauses', 'gtnl_get_terms_name__like', 10, 3 );

function gtnl_get_terms_name__like( $pieces, $taxonomies, $args ) {

	if ( !is_admin() ) {

		if ( isset( $args['name__like'] ) && $args['name__like'] ) {
			$pattern = "/AND t\.name LIKE '%(.*?)%'/";
			$replacement = "AND t.name LIKE '\$1%'";
			$pieces['where'] = preg_replace( $pattern, $replacement, $pieces['where'] );
		}

	}

	return $pieces;
}