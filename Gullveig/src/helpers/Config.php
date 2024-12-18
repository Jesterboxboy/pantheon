<?php
/*  Hugin: system statistics
 *  Copyright (C) 2023  o.klimenko aka ctizen
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
namespace Gullveig;

class Config
{
    /**
     * @var array|mixed|string
     */
    protected $_data;

    /**
     * @param string|array $fileOrSource config file location
     */
    public function __construct($fileOrSource)
    {
        if (is_array($fileOrSource)) { // not file name, just whole config
            $this->_data = $fileOrSource;
        } else {
            $this->_data = require $fileOrSource;
        }
    }

    /**
     * Get config value by dot-separated path
     *
     * @param string $path
     * @return mixed
     */
    public function getValue(string $path)
    {
        $parts = explode('.', $path);
        $current = $this->_data;
        while ($part = array_shift($parts)) {
            $current = $current[$part];
        }

        return $current;
    }
}
