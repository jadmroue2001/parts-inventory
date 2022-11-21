<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InventorysFixture
 */
class InventorysFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'ID' => 1,
                'part_num' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet',
                'condition' => 'Lorem ipsum dolor sit amet',
                'price' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
