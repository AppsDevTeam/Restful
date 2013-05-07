<?php
namespace Tests\Drahak\Restful;

require_once __DIR__ . '/../../bootstrap.php';

use Drahak\Restful\IResource;
use Drahak\Restful\Resource;
use Nette;
use Tester;
use Tester\Assert;
use Tests\TestCase;


/**
 * Test: Tests\Drahak\Restful\Resource.
 *
 * @testCase Tests\Drahak\Restful\ResourceTest
 * @author Drahomír Hanák
 * @package Tests\Drahak\Restful
 */
class ResourceTest extends TestCase
{

	/** @var Resource */
	private $resource;

    protected function setUp()
    {
		parent::setUp();
		$this->resource = new Resource();
    }

    public function testAddingDataThroughArrayAccess()
    {
		$this->resource['name'] = 'Test';
		Assert::equal($this->resource->getData()['name'], 'Test');
    }

	public function testAddingDataThroughMagicMethods()
	{
		$this->resource->name = 'Test';
		Assert::equal($this->resource->name, 'Test');
	}

	public function testSettingMimeType()
	{
		$this->resource->setMimeType(IResource::JSON);
		Assert::equal($this->resource->mimeType, IResource::JSON);
	}
}
\run(new ResourceTest());