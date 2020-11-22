<?php

/**
 * @package    Modseven/Image
 * @group      kohana
 * @group      kohana.image
 * @category   Test
 * @author     Paweł Jarzyniak
 * @author     Kohana Team
 * @copyright  (c) 2009-2012 Kohana Team
 * @copyright  (c) 2020 Paweł Jarzyniak
 * @license    http://http://kohanaframework.org/license
 */

use Modseven\Image\Image;
use PHPUnit\Framework\TestCase;

class ImageTest extends TestCase {

	protected function setUp() : void
	{
		if ( ! extension_loaded('gd'))
		{
			$this->markTestSkipped('The GD extension is not available.');
		}
	}

    /**
     * Tests the Image::save() method for files that don't have extensions
     *
     * @return  void
     * @throws \Modseven\Exception
     */
	public function testSaveWithoutExtension()
	{
		$image = Image::factory(__DIR__.'/test_data/test_image');
		$this->assertTrue($image->save(__DIR__.'/test_data/test_image_copied'));

		unlink(__DIR__.'/test_data/test_image_copied');
	}

	public function testStart()
    {
        $image = Image::factory('abc');
        $this->assertTrue(true);
    }

} // End Kohana_ImageTest
