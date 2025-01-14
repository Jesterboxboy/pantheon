<?php
/*  Frey: ACL & user data storage
 *  Copyright (C) 2016  o.klimenko aka ctizen
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

return [
    'connection_string' => 'pgsql:host=' . getenv('PHINX_DB_FREY_HOST') . ';port='
        . getenv('PHINX_DB_FREY_PORT', true)
        . ';dbname=' . getenv('PHINX_DB_FREY_NAME', true),
    'credentials' => [
        'username' => getenv('PHINX_DB_FREY_USER'),
        'password' => getenv('PHINX_DB_FREY_PASS')
    ]
];
