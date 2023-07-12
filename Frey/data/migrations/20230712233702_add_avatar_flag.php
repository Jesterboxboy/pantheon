<?php
// @codingStandardsIgnoreFile
use Phinx\Migration\AbstractMigration;

require_once __DIR__ . '/../../src/helpers/BootstrapAccess.php';

class AddAvatarFlag extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('person');
        $table
            ->addColumn('has_avatar', 'integer', ['default' => 0])
            ->save();
        $this->getAdapter()->commitTransaction();
    }
}
