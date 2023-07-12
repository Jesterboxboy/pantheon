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

require_once __DIR__ . '/../Controller.php';

class AvatarsController extends Controller
{
    public function upload($userId, $avatarFile)
    {
        $fileSize = $avatarFile['size'];
        $fileTmp = $avatarFile['tmp_name'];
        $fileType = $avatarFile['type'];

        try {
            $ext = match ($fileType) {
                'image/jpeg' => 'jpg',
                'image/png' => 'png',
                'image/gif' => 'gif',
                default => throw new \Exception('Invalid file type')
            };

            if ($fileSize > 1024 * 512) {
                throw new \Exception('Max file size is 512KB');
            }

            move_uploaded_file($fileTmp, "/var/storage/files/avatars/user_{$userId}.{$ext}");
        } catch (\Exception $e) {
            unlink($fileTmp);
            return $e->getMessage();
        }
    }
}
